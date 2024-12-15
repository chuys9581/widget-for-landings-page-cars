document.addEventListener('DOMContentLoaded', function() {
    const nomButton = document.querySelector('.nom-button');
    if (nomButton) {
        nomButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.open('/wp-content/uploads/nom.pdf', '_blank');
        });
    }
});