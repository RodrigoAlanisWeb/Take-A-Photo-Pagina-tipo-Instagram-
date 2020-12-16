$(document).ready(()=>{
    console.log('listo');
    let count = 1;

    $('.header__user-btn').click(()=>{
        count++;
        if (count > 2) {
            count = 1;
        }

        switch (count) {
            case 1 :
                $('.header__user-btn').removeClass('fa-angle-up');
                $('.header__user-btn').addClass('fa-angle-down');
                $('.header__user-list').animate({
                    marginTop: '-1000px',
                    opacity: '0',
                },'normal');
            break
            case 2 :
                $('.header__user-btn').addClass('fa-angle-up');
                $('.header__user-btn').removeClass('fa-angle-down');
                $('.header__user-list').animate({
                    marginTop: '0px',
                    opacity: '100%',
                },'normal');
            break 
        }
    })

    // Previsulaizacion de la imagen
    $('#file-input').change((e)=>{
        // Creamos el objeto de la clase FIleReader
        let reader = new FileReader();

        // Leer Archivo
        reader.readAsDataURL(e.target.files[0]);

        // Ejecutar el codigo interno

        reader.onload = function(){
            console.log('onload');
            let container = $('.main__aside-form-group--file');

            container.children().css('display','none');
            container.css('background-image',`url('${reader.result}')`)
            console.log();
        }
    });

    // Cambio de Formulario (login to register / register to login)

    $('#login').css('display','none');

    $('#to-login').click(()=>{
        Change('register','login')
    })

    $('#to-register').click(()=>{
        Change('login','register')
    })

    function Change(form,to) {
        $(`#${form}`).css('display','none');
        $(`#${to}`).css('display','block');
    }
})