$(function () {
    var validate = true;

    $('#singup .error').css({
        color: 'red',
        fontStyle: 'italic'
    });
    $('#singup .fa').css('cursor', 'pointer');

    /**
      *Show and hide password
    */
    $('#fa-eye, #fa-eye-slash').click(function () {

        if(this.id == 'fa-eye'){
            $('#password, #passwordConfirm').attr('type', 'text');
            $(this).hide();
            $('#fa-eye-slash').show();
        }else{
            $('#password, #passwordConfirm').attr('type', 'password');
            $(this).hide();
            $('#fa-eye').show();
        }
    });

    /**
     * form processing
     */
    function messageRequire(id){
       return $(id).next('.error').html('Your ' + $(id).attr('title') + ' is required');
    }
    function value(id) {
        return $(id).val();
    }


        var datas = ['#firstname', '#surname', '#email', '#password', '#passwordConfirm'];

    $('#singup').submit(function () {

        if(!value('#inlineRadio:checked')){
            $('#inlineRadio').css('color', 'red');
            validate = false;
        }
        for(var i = 0; i < datas.length; i++){
            if(value(datas[i]) == ''){
                messageRequire(datas[i]);
                validate = false;
            }
        }
       return validate;
    });


    $('#firstname').keyup(function () {

        if($(this).val().length < 4){
            $(this).next('.error').fadeIn('slow').html('Type at least 5 characters');
            validate = false;
        }else if(value('#firstname').match(/^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i)){
            $(this).next('.error').fadeOut();
            validate = true;
        }else{
            $(this).next('.error').fadeIn('slow').html($(this).attr('title') + ' not valid');
            validate = false;
        }
        return validate
    });

    $('#surname').keyup(function () {

        if($(this).val().length < 4){
            $(this).next('.error').fadeIn('slow').html('Type at least 5 characters');
            validate = false;
        }else if(value('#surname').match(/^[a-zA-Zéèêëíìîïñóòôöõúùûüýÿæ -]+$/i)){
            $(this).next('.error').fadeOut();
            validate = true;
        }else{
            $(this).next('.error').fadeIn('slow').html($(this).attr('title') + ' not valid');
            validate = false;
        }
        return validate
    });

    $('#singup #email').keyup(function () {

        if(value('#email').match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)){
            $(this).next('.error').fadeOut();
            validate = true;
        }else{
            $(this).next('.error').fadeIn('slow').html($(this).attr('title') + ' not valid');
            validate = false;
        }
        return validate
    });

    $('#singup #password').keyup(function () {

        if($(this).val().length < 8){
            $(this).next('.error').fadeIn('slow').html('Type at least 8 characters');
            validate = false;
        }else{
            $(this).next('.error').fadeOut();
            validate = true;
        }
        return validate
    });

    $(' #singup #passwordConfirm').keyup(function () {

        if($(this).val() != $('#password').val()){
            $(this).next('.error').fadeIn('slow').html('Your passwords are not identical');
            validate = false;
        }else{
            $(this).next('.error').fadeOut();
            validate = true;
        }
        return validate
    });


});