import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import axios from 'axios';
import.meta.glob([
    '../img/**'
])
document.getElementById("mySubmit").addEventListener("click", function(event){
    return false;
});
repos: [];

