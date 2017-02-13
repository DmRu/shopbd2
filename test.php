<html>
<head>
   <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="//vk.com/js/api/openapi.js?137" type="text/javascript"></script>

    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
    <script src="js/telegram.js"></script>

    <script src="js/get-vk-id.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
    <link rel="stylesheet" href="assets/css/main/main.css">

    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyA_-JuzDXM7uVsKSIMUTcWIyk06eML-Vks",
            authDomain: "shopbd-ea7b0.firebaseapp.com",
            databaseURL: "https://shopbd-ea7b0.firebaseio.com",
            storageBucket: "shopbd-ea7b0.appspot.com",
            messagingSenderId: "1007213697561"
        };
        firebase.initializeApp(config);
    </script>


    <script src="js/typed.js"></script>

</head>


<body>
<div id="text">заполните форму</div>
<input id="senderName"></input>
<input id="senderHuman"></input>
<input id="message"></input>

<button  onclick="send()" id="sendMessage">Отправить</button><br>
<span id='id'></span>


<div style="bg-color: grey; margin: 0 auto;">
    <div style='margin: auto; background-color: #0b0b0b; width: 50px; height: 50px;'> </div>
    <div style='margin: auto; background-color: #0b0b0b; width: 50px; height: 50px;'> </div>
    <div style='margin: auto; background-color: #0b0b0b; width: 50px; height: 50px;'> </div>
</div>









</body>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('f5e7cebe1301a4166dc2', {
        encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        alert(data.message);
    });
</script>

<script type="text/javascript">
  //  $("#text").on("click", send());
</script>


<!-- Print
================================-->
<script>
    $(function(){
        $('#id').typed({
            strings: ["Доставка букетов По москве"],
            typeSpeed: 0
        });
    });
</script>

<!--================================-->


</html>