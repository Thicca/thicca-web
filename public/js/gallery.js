document.addEventListener('DOMContentLoaded', () => {
    const galleryList = document.getElementById('galleryList');
    const itemsPerPage = parseInt(galleryList.dataset.itemsPerPage, 10) || 4;

    let currentCategory = 'all';
    let currentPage = 1;
    let sortOrder = 'desc'; // 初期値:新しい順

    const allItems = Array.from(document.querySelectorAll('.gallery-item'));
    const tabs = document.querySelectorAll('.tab');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageNumbers = document.getElementById('pageNumbers');
    const sortToggle = document.getElementById('sortToggle');

    function getFilteredItems() {
        let items = currentCategory === 'all'
            ? allItems
            : allItems.filter(item => item.dataset.category.split(' ').includes(currentCategory));

        // 日付でソート(既存のコードはそのまま)
        items = items.slice().sort((a, b) => {
            const dateA = new Date(a.querySelector('.date').textContent.replace(/\./g, '-'));
            const dateB = new Date(b.querySelector('.date').textContent.replace(/\./g, '-'));
            return sortOrder === 'desc' ? dateB - dateA : dateA - dateB;
        });

        return items;
    }

    function renderPageNumbers(totalPages) {
        pageNumbers.innerHTML = '';

        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.classList.add('page-number');
            if (i === currentPage) {
                btn.classList.add('active');
            }
            btn.addEventListener('click', () => {
                currentPage = i;
                render();
            });
            pageNumbers.appendChild(btn);
        }
    }

    function render() {
        const filtered = getFilteredItems();
        const totalPages = Math.max(1, Math.ceil(filtered.length / itemsPerPage));

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        allItems.forEach(item => {
            item.style.display = 'none';
        });

        const pageItems = filtered.slice(start, end);
        pageItems.forEach(item => {
            item.style.display = '';
            galleryList.appendChild(item); // 表示順を並び替えるため、DOM上の順序も更新
        });

        renderPageNumbers(totalPages);
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }

    // タブ切り替え
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            currentCategory = tab.dataset.category;
            currentPage = 1;
            render();
        });
    });

    // 前へ/次へ
    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            render();
        }
    });

    nextBtn.addEventListener('click', () => {
        currentPage++;
        render();
    });

    // 並び替えボタン
    sortToggle.addEventListener('click', () => {
        sortOrder = sortOrder === 'desc' ? 'asc' : 'desc';
        sortToggle.textContent = sortOrder === 'desc' ? '日付順: 新しい順 ▼' : '日付順: 古い順 ▲';
        currentPage = 1; // 並び替えたら1ページ目に戻す
        render();
    });

    render(); // 初期表示
});