document.addEventListener('DOMContentLoaded', function() {
    const downloadButton = document.getElementById('hybrid-downloadButton');
    const specButton = document.getElementById('hybrid-specButton');

    if (downloadButton) {
        downloadButton.addEventListener('click', function(e) {
            e.preventDefault();
            // Aquí puedes agregar la lógica para descargar el archivo
            alert('Descargando brochure...');
            // La URL real se establecerá dinámicamente desde PHP
            if (this.href) {
                window.location.href = this.href;
            }
        });
    }

    if (specButton) {
        specButton.addEventListener('click', function(e) {
            e.preventDefault();
            // La URL real se establecerá dinámicamente desde PHP
            if (this.href) {
                window.location.href = this.href;
            }
        });
    }
});