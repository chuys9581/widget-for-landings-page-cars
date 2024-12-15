// Función auxiliar para crear solicitudes JSONP
function jsonp(url, callback) {
    const callbackName = 'jsonp_callback_' + Math.round(100000 * Math.random());
    window[callbackName] = function(data) {
        delete window[callbackName];
        document.body.removeChild(script);
        callback(data);
    };

    const script = document.createElement('script');
    script.src = url + (url.indexOf('?') >= 0 ? '&' : '?') + 'callback=' + callbackName;
    document.body.appendChild(script);
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('hybrid-testDriveForm');
    const privacyLink = document.getElementById('hybrid-privacyLink');
    const selectCiudad = document.getElementById('hybrid-ciudad');
    const selectDistribuidor = document.getElementById('hybrid-distribuidor');

    const distribuidores = {
        'CDMX': ['Dalton Honda Polanco', 'Dalton Honda Mariano Escobedo'],
        'Guadalajara': ['Dalton Honda Excelencia Motors', 'Dalton Honda Colomos Country', 'Dalton Honda Acueducto', 'Dalton Honda Magno'],
        'San Luis Potosi': ['Dalton Honda Venustiano Carranza', 'Dalton Honda Carretera 57']
    };

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

    selectCiudad.addEventListener('change', updateDistribuidores);

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const dataToSend = {
            modelo: "Honda Civic Hybrid 2025",
            ...Object.fromEntries(formData)
        };

        const zapierUrl = 'https://hooks.zapier.com/hooks/catch/6778166/bn6gl04/';
        const queryString = '?data=' + encodeURIComponent(JSON.stringify(dataToSend));

        jsonp(zapierUrl + queryString, function(response) {
            if (response.status === 'success') {
                alert('Solicitud de prueba de manejo enviada con éxito');
                form.reset();
                updateDistribuidores();
            } else {
                alert('Error al enviar la solicitud de prueba de manejo');
            }
        });
    });

    privacyLink.addEventListener('click', function(e) {
        e.preventDefault();
        alert('Aviso de privacidad');
    });

    updateDistribuidores();
});

