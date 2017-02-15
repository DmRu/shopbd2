 //$("#sendMessage").on('click', function SendGet(){
// $("#text").on("click", send());

 function send() {

 	var name = $('#senderName').val();
    var phone = $('#senderPhone').val();
    var text= $('#message').val();

    $.get( "../php/telegram.php", { name: name, phone: phone, text: text });


  //  $$a({
    //	type : 'get',
    //	url : 'telegram.php',            // указываем URL и
    //	data : {'name':name,'phone':phone, 'text':text}
        //success : function (data)
    	//response:'text',
    	//success : function (data) {aletr('Данные успешно отправлены')}
    //	});
//    	setTimeout($('input, button').hide(200), 1000);

//    	$('#success').show(200);


    //alert('Отправили сообщение');


    $('#contactForm').hide(200).delay(1000);
   // $('#sendingMessage').show(200).delay(1000);
    //$('#sendingMessage').hide(200).delay(2000);
    $('#successMessage').show(200).delay(4000);


    // $('#dialog').show(200);
        // $("#dialog").dialog('open');
	 };


  function show_pupup() {
  	$('#popup').show(200);
  };

