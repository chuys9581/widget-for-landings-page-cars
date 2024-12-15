document.addEventListener('DOMContentLoaded', function() {
    const imgCompleta = document.querySelector('.img-completa');
    const texts = document.querySelectorAll('.img-completa-text');

    if (imgCompleta) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    imgCompleta.classList.add('visible');
                    texts.forEach((text, index) => {
                        setTimeout(() => {
                            text.classList.add('visible');
                        }, 500 + (index * 200));
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        observer.observe(imgCompleta);
    }
});