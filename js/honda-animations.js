document.addEventListener('DOMContentLoaded', () => {
    const handleScroll = () => {
        const images = [
            'civic',
            'interiores',
            'sistema',
            'sistemac',
            'auto',
            'velocimetro',
            'velocimetroimages',
            'velocimetroimages2',
            'senal',
            'civic-four',
            'interiores-five',
            'interiores-fiveI'
        ];

        images.forEach(id => {
            const img = document.getElementById(id);
            if (img) {
                const position = img.getBoundingClientRect().top;
                const screenHeight = window.innerHeight;

                if (position < screenHeight - 100) {
                    img.classList.add('active');
                }
            }
        });
    };

    // Escuchar el evento de scroll
    window.addEventListener('scroll', handleScroll);

    // Ejecutar una vez al cargar la página
    handleScroll();
});