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
    

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script>
        function sendData(data) {
            var XHR = new XMLHttpRequest();
            var urlEncodedData = "";
            var urlEncodedDataPairs = [];
            var name;

            // Turn the data object into an array of URL-encoded key/value pairs.
            for(name in data) {
                urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));
            }

            // Combine the pairs into a single string and replace all %-encoded spaces to 
            // the '+' character; matches the behaviour of browser form submissions.
            urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');

            alert(urlEncodedData);

            // Define what happens on successful data submission
            XHR.addEventListener('load', function(event) {
                alert('Yeah! Data sent and response loaded.');
            });

            // Define what happens in case of error
            XHR.addEventListener('error', function(event) {
                alert('Oops! Something goes wrong.');
            });

            // Set up our request
            XHR.open('POST', 'https://stackoverflow.com/oauth/access_token');

            // Add the required HTTP header for form data POST requests
            XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Finally, send our data.
            XHR.send(urlEncodedData);
        }

        alert("<?php echo $code; ?>");

        var data = {
            client_id: "14152",
            client_secret: "AMrLG*xYlOZJoGv5PMAFoA((",
            code: "<?php echo $code; ?>",
            redirect_uri: "https://sl-mcq.herokuapp.com/authenticated.php"
        };
        
        sendData(data);
    </script>
</body>
</html>