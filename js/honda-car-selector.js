document.addEventListener('DOMContentLoaded', () => {
    const carOptions = document.querySelectorAll('.car-option');
    const carImages = document.querySelectorAll('.car-image');
    const colorOptions = document.querySelectorAll('.color-option');
    const interiorColorSport = document.querySelector('.color-selector-interiores2.sport');
    const interiorColorTouring = document.querySelector('.color-selector-interiores.touring');

    // Función para mostrar la primera imagen de la opción seleccionada
    const showFirstImage = (type) => {
        // Ocultar todas las imágenes
        carImages.forEach(image => image.style.display = 'none');

        // Obtener las imágenes de la versión seleccionada
        const firstImage = document.querySelector(`.car-image.${type}`);
        if (firstImage) firstImage.style.display = 'block';
    };

    // Función para mostrar/ocultar colores interiores
    const toggleInteriorColors = (type) => {
        if (type === 'sport') {
            interiorColorSport.style.display = 'block';
            interiorColorTouring.style.display = 'none';
        } else {
            interiorColorSport.style.display = 'none';
            interiorColorTouring.style.display = 'block';
        }
    };

    // Cambiar entre Sport HEV y Touring HEV
    carOptions.forEach(option => {
        option.addEventListener('click', () => {
            const selectedType = option.getAttribute('data-type');

            // Marcar el botón activo
            carOptions.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');

            // Mostrar las opciones de colores correspondientes
            colorOptions.forEach(option => {
                if (option.classList.contains(selectedType)) {
                    option.style.display = 'flex';
                } else {
                    option.style.display = 'none';
                }
            });

            // Mostrar/ocultar colores interiores
            toggleInteriorColors(selectedType);

            // Mostrar la primera imagen por defecto
            showFirstImage(selectedType);
        });
    });

    // Cambiar la imagen según el color seleccionado
    colorOptions.forEach(option => {
        const button = option.querySelector('.color-button');
        button.addEventListener('click', () => {
            const selectedColor = button.getAttribute('data-color');

            // Ocultar todas las imágenes
            carImages.forEach(image => {
                image.style.display = 'none';
            });

            // Mostrar la imagen seleccionada
            const selectedImage = document.getElementById(selectedColor);
            if (selectedImage) selectedImage.style.display = 'block';
        });
    });

    // Activar Sport HEV por defecto y su primera imagen
    document.querySelector('.car-option[data-type="sport"]').click();
});