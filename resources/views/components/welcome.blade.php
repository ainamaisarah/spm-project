<?php
$background_image_url = 'work-1.jpg';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP for Background Image</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('<?php echo $background_image_url; ?>');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(218, 202, 150, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to your PHP-backed Background Image!</h1>
        <p>
            This is an example of using PHP to dynamically insert a background image in an HTML document.
        </p>
    </div>
</body>

</html>
