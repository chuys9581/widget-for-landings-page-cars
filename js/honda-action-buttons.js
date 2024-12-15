document.addEventListener('DOMContentLoaded', function() {
    const brochureButton = document.querySelector('.brochure-button');
    const specsButton = document.querySelector('.specs-button');
    const configureButton = document.querySelector('.configure-button');

    function openPDF(url) {
        if (url) {
            window.open(url, '_blank');
        } else {
            console.error('URL del PDF no proporcionada');
        }
    }

    if (brochureButton) {
        brochureButton.addEventListener('click', function() {
            const pdfUrl = this.dataset.pdfUrl;
            openPDF(pdfUrl);
        });
    }

    if (specsButton) {
        specsButton.addEventListener('click', function() {
            const pdfUrl = this.dataset.pdfUrl;
            openPDF(pdfUrl);
        });
    }

    if (configureButton) {
        configureButton.addEventListener('click', function() {
            // Aquí puedes agregar la lógica para configurar el auto
            console.log('Botón de configurar clickeado');
            // Por ejemplo, podrías redirigir a una página de configuración:
            // window.location.href = '/configurar-auto';
        });
    }
});