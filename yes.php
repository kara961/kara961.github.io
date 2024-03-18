<?php
$response = 'yes'; // Set the response to "yes"

$ip = $_SERVER['REMOTE_ADDR']; // Get the IP address of the client

// Save the IP address and response to a file named "response"
$file = fopen("response.txt", "a"); // Open the file in append mode
fwrite($file, "IP: $ip - Response: $response\n"); // Write IP and response to the file
fclose($file); // Close the file

// Display the content to the user (you can customize this)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yes Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #333;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .gif-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .gif-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank you for forgiving Vishal!</h1>
        <p>You're awesome!</p>
        
        <div class="gif-container">
            <img src="https://media1.tenor.com/m/_4xCiEhhoZsAAAAd/dog-smile.gif" alt="Happy Dance">
        </div>
        <audio autoplay loop>
            <source src="yes.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <!-- You can add more content here as needed -->
    </div>
</body>
</html>
