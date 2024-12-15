document.addEventListener('DOMContentLoaded', function() {
    // Existing cotizador elements
    const sportBtn = document.getElementById('cotizador-honda-sportBtn');
    const touringBtn = document.getElementById('cotizador-honda-touringBtn');
    const sportPrice = document.getElementById('cotizador-honda-sportPrice');
    const touringPrice = document.getElementById('cotizador-honda-touringPrice');
    const engancheSlider = document.getElementById('cotizador-honda-engancheSlider');
    const engancheValue = document.getElementById('cotizador-honda-engancheValue');
    const engancheMonto = document.getElementById('cotizador-honda-engancheMonto');
    const plazoSlider = document.getElementById('cotizador-honda-plazoSlider');
    const plazoValue = document.getElementById('cotizador-honda-plazoValue');
    const plazoMensualidad = document.getElementById('cotizador-honda-plazoMensualidad');
    const engancheResult = document.getElementById('cotizador-honda-engancheResult');
    const plazoResult = document.getElementById('cotizador-honda-plazoResult');
    const mensualidadResult = document.getElementById('cotizador-honda-mensualidadResult');
    const catResult = document.getElementById('cotizador-honda-catResult');
    const validityNote = document.getElementById('cotizador-honda-validityNote');

    // New form elements
    const form = document.getElementById('cotizador-honda-form');
    const selectCiudad = document.getElementById('cotizador-honda-ciudad');
    const selectDistribuidor = document.getElementById('cotizador-honda-distribuidor');
    const privacyLink = document.getElementById('cotizador-honda-privacyLink');

    let currentPrice = 684900; // Precio base del CIVIC HYBRID SPORT HEV
    const tasaBase = 0.0999; // 9.99% tasa base anual
    const seguroVida = 1000; // Placeholder para el costo del seguro de vida (ajustar según sea necesario)
    const seguroDanos = 2000; // Placeholder para el costo del seguro de daños (ajustar según sea necesario)
    const comisionApertura = 0.01; // 1% de comisión por apertura de crédito (ajustar según sea necesario)

    const distribuidores = {
        'CDMX': ['Dalton Honda Polanco', 'Dalton Honda Mariano Escobedo'],
        'Guadalajara': ['Dalton Honda Excelencia Motors', 'Dalton Honda Colomos Country', 'Dalton Honda Acueducto', 'Dalton Honda Magno'],
        'San Luis Potosi': ['Dalton Honda Venustiano Carranza', 'Dalton Honda Carretera 57']
    };

    function updateCalculations() {
        const enganche = currentPrice * (engancheSlider.value / 100);
        const plazo = parseInt(plazoSlider.value);
        const montoFinanciar = currentPrice - enganche;
        const tasaMensual = tasaBase / 12;

        // Cálculo de la mensualidad
        const mensualidad = (montoFinanciar * tasaMensual) / (1 - Math.pow(1 + tasaMensual, -plazo));

        // Cálculo del CAT (Costo Anual Total)
        const costoTotal = (mensualidad * plazo) + enganche + seguroVida + seguroDanos + (montoFinanciar * comisionApertura);
        const cat = ((Math.pow((costoTotal / montoFinanciar), (1 / (plazo / 12))) - 1) * 12) * 100;

        engancheValue.textContent = `${engancheSlider.value}%`;
        engancheMonto.textContent = `$${enganche.toLocaleString('es-MX', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        plazoValue.textContent = `${plazo} meses`;
        plazoMensualidad.textContent = `$${mensualidad.toLocaleString('es-MX', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;

        if (engancheResult) engancheResult.textContent = `${engancheSlider.value}% $${enganche.toLocaleString('es-MX', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        if (plazoResult) plazoResult.textContent = `${plazo} meses`;
        if (mensualidadResult) mensualidadResult.textContent = `$${mensualidad.toLocaleString('es-MX', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        if (catResult) catResult.textContent = `${cat.toFixed(1)}%`;

        if (validityNote) validityNote.textContent = "Vigencia del 01 al 30 de noviembre de 2024 o hasta agotar existencias. No incluye accesorios del vehículo.";
    }

    function updateActiveVersion(isHybridSport) {
        if (isHybridSport) {
            currentPrice = 684900;
            sportBtn.classList.add('cotizador-honda-active');
            touringBtn.classList.remove('cotizador-honda-active');
            sportPrice.style.display = 'block';
            touringPrice.style.display = 'none';
        } else {
            currentPrice = 724900;
            touringBtn.classList.add('cotizador-honda-active');
            sportBtn.classList.remove('cotizador-honda-active');
            touringPrice.style.display = 'block';
            sportPrice.style.display = 'none';
        }
        // Restablecer los sliders a los valores iniciales
        engancheSlider.value = 20;
        plazoSlider.value = 12;
        updateSliderBackground(engancheSlider);
        updateSliderBackground(plazoSlider);
        updateCalculations();
    }

    sportBtn.addEventListener('click', function() {
        updateActiveVersion(true);
    });

    touringBtn.addEventListener('click', function() {
        updateActiveVersion(false);
    });

    function updateSliderBackground(slider) {
        const value = slider.value;
        const min = slider.min;
        const max = slider.max;
        const percentage = ((value - min) / (max - min)) * 100;
        slider.style.background = `linear-gradient(to right, #001A3F ${percentage}%, #d3d3d3 ${percentage}%)`;
    }

    function handleSliderLabelClick(event) {
        if (event.target.classList.contains('cotizador-honda-slider-label')) {
            const value = event.target.dataset.value;
            const sliderId = event.target.closest('.cotizador-honda-option-section').querySelector('.cotizador-honda-slider').id;
            const slider = document.getElementById(sliderId);
            slider.value = value;
            updateSliderBackground(slider);
            updateCalculations();
        }
    }

    function updateDistribuidores() {
        const selectedCiudad = selectCiudad.value;
        selectDistribuidor.innerHTML = '<option value="" disabled selected>Distribuidor</option>';

        if (selectedCiudad in distribuidores) {
            distribuidores[selectedCiudad].forEach(distribuidor => {
                const option = document.createElement('option');
                option.value = distribuidor;
                option.textContent = distribuidor;
                selectDistribuidor.appendChild(option);
            });
        }
    }

    engancheSlider.addEventListener('input', function() {
        updateSliderBackground(this);
        updateCalculations();
    });

    plazoSlider.addEventListener('input', function() {
        updateSliderBackground(this);
        updateCalculations();
    });

    // Add click event listeners to slider labels
    document.querySelectorAll('.cotizador-honda-slider-labels').forEach(labelContainer => {
        labelContainer.addEventListener('click', handleSliderLabelClick);
    });

    selectCiudad.addEventListener('change', updateDistribuidores);

    // Inicializar valores por defecto
    engancheSlider.value = 20;
    plazoSlider.value = 12;

    // Inicializar cálculos y versión activa
    updateActiveVersion(true);
    updateSliderBackground(engancheSlider);
    updateSliderBackground(plazoSlider);

    // Initialize distribuidor options
    updateDistribuidores();

    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        // Add Honda Civic Hybrid 2025 at the beginning
        const dataToSend = {
            modelo: "Honda Civic Hybrid 2025",
            version: document.querySelector('.cotizador-honda-version-btn.cotizador-honda-active').textContent,
            precio: currentPrice,
            enganche: engancheValue.textContent,
            plazo: plazoValue.textContent,
            mensualidad: plazoMensualidad.textContent,
            cat: catResult ? catResult.textContent : 'N/A'
        };

        // Add form data to dataToSend
        for (let [key, value] of formData.entries()) {
            dataToSend[key] = value;
        }

        // Send data to Zapier
        fetch('https://hooks.zapier.com/hooks/catch/6778166/2i5m9vt/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dataToSend)
        })
        .then(response => {
            if (response.ok) {
                alert('Cotización enviada con éxito');
                form.reset();
                updateDistribuidores(); // Reset distribuidor options
            } else {
                throw new Error('Error en la respuesta del servidor');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al enviar la cotización');
        });
    });

    // Handle privacy link click
    privacyLink.addEventListener('click', function(e) {
        e.preventDefault();
        // Implement privacy notice logic here
        alert('Aviso de privacidad');
    });
});