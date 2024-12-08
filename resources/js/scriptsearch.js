document.querySelectorAll('.table-controls input').forEach(input => {
    input.addEventListener('input', function () {
        const table = this.closest('.table-container').querySelector('table tbody');
        const rows = table.querySelectorAll('tr');
        const query = this.value.toLowerCase();

        rows.forEach(row => {
            const cells = Array.from(row.querySelectorAll('td'));
            const match = cells.some(cell => cell.textContent.toLowerCase().includes(query));
            row.style.display = match ? '' : 'none';
        });
    });
});
