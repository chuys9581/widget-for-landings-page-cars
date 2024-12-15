document.addEventListener('DOMContentLoaded', function() {
    const dynamicCarImageContainer = document.querySelector('#dynamic-selected-car-image');
    const dynamicInteriorImageContainer = document.querySelector('#dynamic-selected-interior-image');
    const dynamicVersionButtons = document.querySelectorAll('.dynamic-version-button');
    const dynamicColorOptions = document.querySelectorAll('.dynamic-color-option');
    const dynamicInteriorColorOptions = document.querySelectorAll('.dynamic-interior-color-option');

    function updateDynamicCarImage(imageUrl) {
        if (imageUrl && dynamicCarImageContainer) {
            dynamicCarImageContainer.src = imageUrl;
        }
    }

    function updateDynamicInteriorImage(imageUrl) {
        if (imageUrl && dynamicInteriorImageContainer) {
            dynamicInteriorImageContainer.src = imageUrl;
        }
    }

    function showDynamicColorOptions(versionIndex) {
        // Ocultar todas las opciones primero
        document.querySelectorAll('.dynamic-color-options, .dynamic-interior-color-options').forEach(el => {
            el.style.display = 'none';
        });

        // Mostrar las opciones correspondientes a la versión seleccionada
        const colorOptions = document.querySelector(`.dynamic-color-options[data-version="${versionIndex}"]`);
        const interiorOptions = document.querySelector(`.dynamic-interior-color-options[data-version="${versionIndex}"]`);

        if (colorOptions) {
            colorOptions.style.display = 'flex';
            // Seleccionar el primer color por defecto
            const firstColorOption = colorOptions.querySelector('.dynamic-color-option');
            if (firstColorOption) {
                firstColorOption.click();
            }
        }

        if (interiorOptions) {
            interiorOptions.style.display = 'flex';
            // Seleccionar el primer color interior por defecto
            const firstInteriorOption = interiorOptions.querySelector('.dynamic-interior-color-option');
            if (firstInteriorOption) {
                firstInteriorOption.click();
            }
        }
    }

    // Event Listeners para los botones de versión
    dynamicVersionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const versionIndex = this.dataset.version;
            
            // Actualizar estado activo de los botones
            dynamicVersionButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Mostrar opciones de color para esta versión
            showDynamicColorOptions(versionIndex);
        });
    });

    // Event Listeners para las opciones de color exterior
    dynamicColorOptions.forEach(option => {
        option.addEventListener('click', function() {
            const imageUrl = this.dataset.imageUrl;
            
            // Actualizar estado activo y imagen
            dynamicColorOptions.forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
            updateDynamicCarImage(imageUrl);
        });
    });

    // Event Listeners para las opciones de color interior
    dynamicInteriorColorOptions.forEach(option => {
        option.addEventListener('click', function() {
            const interiorImageUrl = this.dataset.interiorImageUrl;
            
            // Actualizar estado activo y imagen
            dynamicInteriorColorOptions.forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
            updateDynamicInteriorImage(interiorImageUrl);
        });
    });

    // Inicializar con la primera versión
    if (dynamicVersionButtons.length > 0) {
        dynamicVersionButtons[0].click();
    }
});