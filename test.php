<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <script type='text/javascript' src='https://api.stackexchange.com/js/2.0/all.js'></script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<?php 
    header("Location: https://stackoverflow.com/oauth/dialog?client_id=14152&scope=write_access&redirect_uri=https://sl-mcq.herokuapp.com/blank.php")
?>
</body>
</html>