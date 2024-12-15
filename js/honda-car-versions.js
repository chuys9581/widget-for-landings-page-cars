document.addEventListener('DOMContentLoaded', function() {
    const carImageContainer = document.querySelector('.car-image-container img');
    const versionButtons = document.querySelectorAll('.version-button');
    const colorOptions = document.querySelectorAll('.color-option');

    function updateCarImage(imageUrl) {
        carImageContainer.src = imageUrl;
    }

    function showColorOptions(versionIndex) {
        document.querySelectorAll('.color-options').forEach(el => el.style.display = 'none');
        document.querySelector(`.color-options[data-version="${versionIndex}"]`).style.display = 'flex';
    }

    versionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const versionIndex = this.dataset.version;
            versionButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            showColorOptions(versionIndex);
            
            // Seleccionar el primer color de la versión por defecto
            const firstColorOption = document.querySelector(`.color-options[data-version="${versionIndex}"] .color-option`);
            if (firstColorOption) {
                updateCarImage(firstColorOption.dataset.imageUrl);
            }
        });
    });

    colorOptions.forEach(option => {
        option.addEventListener('click', function() {
            const imageUrl = this.dataset.imageUrl;
            updateCarImage(imageUrl);
            
            colorOptions.forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Inicializar con la primera versión y color
    if (versionButtons.length > 0) {
        versionButtons[0].click();
    }
});