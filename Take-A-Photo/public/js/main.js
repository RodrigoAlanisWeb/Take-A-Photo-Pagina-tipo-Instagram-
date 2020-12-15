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
})