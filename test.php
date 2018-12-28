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

    <script type='text/javascript'>
        $.ajax({
            type: 'POST',
            url: "https://stackoverflow.com/oauth",
            data: JSON.stringify({
                client_id: "14149",
                scope: "write_access",
                redirect_uri: 'https://sl-mcq.herokuapp.com/blank.html',
                success: function(response) {
                    alert(response);
                }
            })
        });

        // SE.init({
        //     clientId: 14149,
        //     key: 'm5Bn*VdRSV5*2M4RSElm6A((',
        //     channelUrl: 'https://gauravbpunjabi.000webhostapp.com/overflow/blank.php',
        //     complete: function (data) {
        //         SE.authenticate({
        //             success: function(data) { 
        //                 alert('Success : ' + success);
        //             },
        //             error: function(data) { 
        //                 alert('Error : ' + data);
        //             },
        //             scope: ['read_inbox'],
        //             networkUsers: true
        //         });
        //     }
        // });
    


    </script>
</body>
</html>