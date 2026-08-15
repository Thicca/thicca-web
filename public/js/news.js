document.addEventListener('DOMContentLoaded', () => {
    const newsList = document.getElementById('newsList');
    const itemsPerPage = parseInt(newsList.dataset.itemsPerPage, 10) || 10;

    let currentPage = 1;

    const allItems = Array.from(document.querySelectorAll('.news-item'));
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageNumbers = document.getElementById('pageNumbers');

    function renderPageNumbers(totalPages) {
        pageNumbers.innerHTML = '';
        const delta = 2;
        const range = [];
        const rangeWithDots = [];

        for (let i = 1; i <= totalPages; i++) {
            if (i === 1 || i === totalPages || (i >= currentPage - delta && i <= currentPage + delta)) {
                range.push(i);
            }
        }

        let prev = null;
        range.forEach((i) => {
            if (prev !== null) {
                if (i - prev === 2) {
                    rangeWithDots.push(prev + 1);
                } else if (i - prev > 2) {
                    rangeWithDots.push('...');
                }
            }
            rangeWithDots.push(i);
            prev = i;
        });

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
                if (item === currentPage) btn.classList.add('active');
                btn.addEventListener('click', () => {
                    currentPage = item;
                    render();
                });
                pageNumbers.appendChild(btn);
            }
        });
    }

    function render() {
        const totalPages = Math.max(1, Math.ceil(allItems.length / itemsPerPage));
        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        allItems.forEach(item => item.style.display = 'none');
        allItems.slice(start, end).forEach(item => item.style.display = '');

        renderPageNumbers(totalPages);
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }

    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) { currentPage--; render(); }
    });
    nextBtn.addEventListener('click', () => {
        currentPage++; render();
    });

    render();
});