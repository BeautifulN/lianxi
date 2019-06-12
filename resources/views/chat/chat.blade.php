<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dumose</title>
</head>
<body>
    <input type="text" id="msg">
    <input type="button" value="SEND" id="send">

<script src="js/jquery/jquery-1.12.4.min.js"></script>
<script>
    var ws_server='ws://vm.server.com:9502/';
    var ws=new WebSocket(ws_server);

    ws.onopen=function(){

        $("#send").click(function (e) {
            var msg = $("#msg").val();
//
//            var data = {
//                type : 'message',
//                text : msg,
//                id : 1,
//                date:Date.now()
//            }
            ws.send(msg);
        });
    }

    ws.onmessage=function(d){
        console.log(d.data)
        alert(d.data);
    }
    console.log(ws);
</script>
</body>
</html>
