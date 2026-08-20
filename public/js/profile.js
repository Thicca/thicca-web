document.addEventListener('DOMContentLoaded', () => {
    const deckList = document.getElementById('deckList');
    const itemsPerPage = parseInt(deckList.dataset.itemsPerPage, 10) || 4;

    let currentCategory = 'all';
    let currentPage = 1;
    let sortOrder = 'desc'; // 初期値:新しい順

    const allItems = Array.from(document.querySelectorAll('.deck-item'));
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
            const dateA = new Date(a.querySelector('.deck-date').textContent.replace(/\./g, '-'));
            const dateB = new Date(b.querySelector('.deck-date').textContent.replace(/\./g, '-'));
            return sortOrder === 'desc' ? dateB - dateA : dateA - dateB;
        });

        return items;
    }

    function renderPageNumbers(totalPages) {
        pageNumbers.innerHTML = '';

        const delta = 2; // 現在のページの前後、何ページ分表示するか
        const range = [];
        const rangeWithDots = [];

        for (let i = 1; i <= totalPages; i++) {
            // 1ページ目、最終ページ、現在ページの前後deltaページは必ず表示
            if (i === 1 || i === totalPages || (i >= currentPage - delta && i <= currentPage + delta)) {
                range.push(i);
            }
        }

        // 省略記号(...)を挿入する位置を判定
        let prev = null;
        range.forEach((i) => {
            if (prev !== null) {
                if (i - prev === 2) {
                    // 1つだけ飛んでいる場合は、省略せずその番号を挟む
                    rangeWithDots.push(prev + 1);
                } else if (i - prev > 2) {
                    // 2つ以上飛んでいる場合は "..." を挿入
                    rangeWithDots.push('...');
                }
            }
            rangeWithDots.push(i);
            prev = i;
        });

        // ボタン(または...のテキスト)を生成
        rangeWithDots.forEach((item) => {
            if (item === '...') {
                const dots = document.createElement('span');
                dots.textContent = '...';
                dots.classList.add('page-dots');
                pageNumbers.appendChild(dots);
            } else {
                const btn = document.createElement('button');
                btn.textContent = item;
                btn.classList.add('page-number');
                if (item === currentPage) {
                    btn.classList.add('active');
                }
                btn.addEventListener('click', () => {
                    currentPage = item;
                    render();
                });
                pageNumbers.appendChild(btn);
            }
        });
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
            deckList.appendChild(item); // 表示順を並び替えるため、DOM上の順序も更新
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

/*-------------------------------
モーダル内画像のズーム(クリックで拡大/縮小)
---------------------------------*/
$(document).on("click", " #modalImage img, .modal-image img", function (e) {
     e.stopPropagation();
    const $img = $(this);
    const $container = $img.closest(".modal-content");

    $img.toggleClass("zoomed");

    if ($img.hasClass("zoomed")) {
    requestAnimationFrame(() => {
        const scrollX = ($container[0].scrollWidth - $container[0].clientWidth) / 2;
        const scrollY = ($container[0].scrollHeight - $container[0].clientHeight) / 2;
        $container.scrollLeft(scrollX);
        $container.scrollTop(scrollY);
    });
}
});