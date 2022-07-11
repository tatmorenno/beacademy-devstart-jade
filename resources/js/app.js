import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



$(document).ready(function() {
    $('#birth-date').mask('00/00/0000');
    $('#phone-number').mask('0000-0000');
});