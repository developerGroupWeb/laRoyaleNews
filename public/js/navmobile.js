$(function(){
	$('.fa-times, #fa-times-lectureBox').hide();

    $('.humbeger, #bars-lectureBox').click(function () {
        $('.sidenavLeft, #sideNav-lectureBox').width(260);
        $('.humbeger, #bars-lectureBox').hide();
        $('.fa-times, #fa-times-lectureBox').show();
    });

    $('.fa-times, #fa-times-lectureBox').click(function () {
        $('.sidenavLeft ,#sideNav-lectureBox').width(0);
        $('.fa-times, #fa-times-lectureBox').hide();
        $('.humbeger, #bars-lectureBox').show();
    });

    $(window).click(function(e) {

        // Si ce n'est pas div ni un de ses enfants
        if(!$(e.target).is('.humbeger') && !$.contains($('.sidenavLeft')[0],e.target) ) {
            $('.sidenavLeft').width(0);
            $('.fa-times').hide();
        	$('.humbeger').show();
        }
    });

    // Declaration the variables


    /**
     * show the box message
     */
    var help = $('#helpMsg, #helpMsgToo');

    help.click(function() {

        if(this.id == 'helpMsg'){

            $('#help').stop().animate({
                position: 'fixed',
                bottom: '-10px',
                width: '400px',
            }, 1000);
                /*bottom: '-100px',
            ), 1000, 'linear',
                function () {
                 $('<li></li>').html('<span style="color:orange" id="cache">Hello, puis-je vous aider ?</span>').appendTo(chat);
                });
            );*/

            $(this).hide();

            $('#helpMsgToo').show();


        }else{

            $('#help').stop().animate({
                position: 'fixed',
                bottom: '-142px',
                width: '250px',
                bottom: '-372px',
            }, 1000, 'linear');

            $(this).hide();

            $('#helpMsg').show();

           // $('#cache').css('display', 'none');
        }

    });


    /**
     * script of instant message
     */

        // Declaration the variables

    var divHelp    = $('#help');
    var contentMsg = divHelp.find('#contentMsg');
    var chat       = contentMsg.find('#chat');
    var send       = divHelp.find('#send');
    var textarea   = divHelp.find('#textarea');
    var admin      = chat.find('li');

    send.click(function () {

        var message = textarea.val().trim();
        var height     = contentMsg.height();
        textarea.val('');
        textarea.focus();

        if(message.length > 0){

            $('<li></li>').html('<img src="../images/student-865073_1920.jpg" id="profile"/> <span>' + message + '</span>').appendTo(chat);

            contentMsg.stop().animate({
                'scrollTop': '+=' + height,
            }, 'slow', 'linear');

            //alert(message.length)
        }

    });

    /**
     * script button send with touch enter windows
     */
    textarea.keypress(function (e) {

        if(e.which == 13 || e.keyCode == 13){

            e.preventDefault();
            send.click();
        }
    });

    //send.trigger('click');  //test de click automatique


    /**
     * show the box message
     */
    var help = $('#helpMsg, #helpMsgToo');

    help.click(function() {

        if(this.id == 'helpMsg'){

            $('#help').stop().animate({
                    position: 'fixed',
                    bottom: '-100px',
                }, 1000, 'linear',
                function () {
                  /*
                  if(!admin.hasClass('admin')){

                      $('<li></li>').html('<span style="color:orange" class="admin">Hello, puis-je vous aider ?</span>').appendTo(chat);
                  }*/

                }
            );

            $(this).hide();

            $('#helpMsgToo').show();

        }else{

            $('#help').stop().animate({
                position: 'fixed',
                bottom: '-372px',
            }, 1000, 'linear');

            $(this).hide();

            $('#helpMsg').show();

            // $('#cache').css('display', 'none');
        }

    });

    /**--------------------------------**/

    $(".settingBox").hide();
    $(".setting").click(function () {
        $(".settingBox").slideToggle(500);
    });

    /**-----------------------------------**/

    $(".btn-chevron i").hide();

    $(".btn-chevron .btn").hover(function () {
        $(this).css(
            "background-color", "rgba(0,0,0,0.4)"
        ).find("i").show();
        
    }, function() {
        $(this).css(
            "background-color", "rgba(0,0,0,0)"
        ).find("i").hide();
    });
    
    $( "#btnLeft" ).click(function() {
      $( "#lectureBox-fistpage" ).animate({
        
      });
    });

});