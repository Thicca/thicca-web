document.addEventListener('DOMContentLoaded', () => {
    const itemsPerPage = 4;
    let currentCategory = 'all';
    let currentPage = 1;

    const allItems = Array.from(document.querySelectorAll('.gallery-item'));
    const tabs = document.querySelectorAll('.tab');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageInfo = document.getElementById('pageInfo');

    function getFilteredItems() {
        if (currentCategory === 'all') {
            return allItems;
        }
        return allItems.filter(item => item.dataset.category === currentCategory);
    }

    function render() {
        const filtered = getFilteredItems();
        const totalPages = Math.max(1, Math.ceil(filtered.length / itemsPerPage));

        // ページ番号が範囲外にならないよう調整
        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        // 全アイテムを一旦非表示にし、該当ページ分だけ表示
        allItems.forEach(item => {
            item.style.display = 'none';
        });
        filtered.slice(start, end).forEach(item => {
            item.style.display = '';
        });

        pageInfo.textContent = `${currentPage} / ${totalPages}`;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }

    // タブ切り替え
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            currentCategory = tab.dataset.category;
            currentPage = 1; // タブを変えたら1ページ目に戻す
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

    render(); // 初期表示
});