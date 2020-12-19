$(document).ready(function(){
    
    $('.login-incorrecto').on('click', function(){
        setTimeout(function () {
            // Redirigir con JavaScript
            window.location.href= '/login';
            });
    });
}) 