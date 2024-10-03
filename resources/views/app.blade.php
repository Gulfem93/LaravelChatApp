<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{Auth::id()}}
    @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
</body>
<script>
    setTimeout(() => {
        window.Echo.private("private-channel.user.{{ Auth::id()}} ")
        .listen("testingEvent", (e)=>{
            console.log(e);
        })
    }, 200);
</script>
</html>
