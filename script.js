var buttons = document.querySelectorAll('.btn');

buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        this.classList.toggle('clicked');
    });
});
