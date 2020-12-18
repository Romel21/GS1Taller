$(document).ready(function(){
    
    $('.enviar-registro').on('click', function(){
        console.log("Hola");
        const formData = parseData();
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });

        $.ajax({
            url: '/usuario',
            method: 'post',
            data: formData
        }).done(()=>{
            Swal.fire({
                title: '¡Bien!',
                text: 'Se ha eliminado el registro',
                type: 'success'
            })
        }).fail(()=>{
            Swal.fire({
                title: 'Error!',
                text: 'No se ha podido consultar el registro',
                type: 'warning'
            })
        })
    });
}) 
 