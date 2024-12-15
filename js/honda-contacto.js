document.addEventListener('DOMContentLoaded', function() {
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

    // Poblar el select de estados
    const estados = [
        'Aguascalientes', 'Baja California', 'Baja California Sur', 'Campeche', 'Chiapas',
        'Chihuahua', 'Ciudad de México', 'Coahuila', 'Colima', 'Durango', 'Estado de México',
        'Guanajuato', 'Guerrero', 'Hidalgo', 'Jalisco', 'Michoacán', 'Morelos', 'Nayarit',
        'Nuevo León', 'Oaxaca', 'Puebla', 'Querétaro', 'Quintana Roo', 'San Luis Potosí',
        'Sinaloa', 'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz', 'Yucatán', 'Zacatecas'
    ];

    const estadoSelect = document.getElementById('estadoSelect');
    estados.forEach(estado => {
        const option = document.createElement('option');
        option.value = estado;
        option.textContent = estado;
        estadoSelect.appendChild(option);
    });

    // Manejar el envío del formulario
    const form = document.getElementById('contactoForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const dataToSend = {
            modelo: "Honda Civic Hybrid 2025",
            ...Object.fromEntries(formData)
        };

        const zapierUrl = 'https://hooks.zapier.com/hooks/catch/6778166/2i5olr8/';
        const queryString = '?data=' + encodeURIComponent(JSON.stringify(dataToSend));

        jsonp(zapierUrl + queryString, function(response) {
            if (response && response.status === 'success') {
                alert('Mensaje enviado con éxito');
                form.reset();
            } else {
                alert('Error al enviar el mensaje');
            }
        });
    });
});