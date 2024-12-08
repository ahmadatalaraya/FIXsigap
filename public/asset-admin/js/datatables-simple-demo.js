window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        const dataTable = new simpleDatatables.DataTable(datatablesSimple, {
            columns: [
                { select: 7, hidden: true } // Kolom ke-7 (dimulai dari 0) disembunyikan
            ]
        });
    }
});
