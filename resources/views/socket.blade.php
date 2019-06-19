<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>

<script>
    var socket = io(':6001');


    socket.on('message',function(data){
        console.log('from server',data);
    })
</script>
</body>
</html>
