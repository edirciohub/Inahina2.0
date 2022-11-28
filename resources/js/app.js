import './bootstrap';
import '../js/dataTables.min';
import '../js/jquery-3.6.1.min';
import '../js/lib/wow/wow.min.js';
import '../js/lib/easing/easing.min.js';
import '../js/lib/waypoints/waypoints.min.js';
import '../js/lib/owlcarousel/owl.carousel.min.js';
import './main.js';

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);


let el = document.getElementById("wrapper");
let toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    el.classList.toggle("toggled");
};



