<?php
    $code = "";
    if(isset($_GET["code"])) {
        $code = $_GET["code"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="https://stackoverflow.com/oauth/access_token" method="POST">
        <input type="text" name="client_id" value="14150">
        <input type="text" name="client_secret" value="gB2HO2LZdAjRrwfKH)7B*A((">
        <input type="text" id="code" name="code" value="<?php echo $code; ?>">
        <input type="text" name="redirect_uri" value="https://sl-mcq.herokuapp.com/blank.php">
        <button type="submit">CLick me please</button>
    </form>       

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script>
        var code = $('#code').attr('value');
        $.ajax({
            type: "POST",
            url: "https://stackoverflow.com/oauth/access_token",
            contentType="application/x-www-form-urlencoded",
            data: {
                client_id: "14150",
                client_secret: "gB2HO2LZdAjRrwfKH)7B*A((",
                code: code,
                redirect_uri: "https://sl-mcq.herokuapp.com/blank.php"
            },
            success: function(response) {
                alert(response);
            }
        });
    </script>
</body>
</html>