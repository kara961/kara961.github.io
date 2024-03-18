<?php
$response = 'no'; // Set the response to "no"

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
    <title>No Page</title>
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
        <h1>Sorry to hear that you're not forgiving Vishal...</h1>
        <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExZDZnZDhhbDV0eDQ4dDFxaWZkb3lkaTJqNzM2Z3Jicmhkdzd1M2p3MyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/dIsQjjXQ1YAbjV2opK/giphy.gif" alt="Sad Dog">
    </div>
    <div>
    <audio autoplay loop>
            <source src="no.m4a" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
</body>
</html>
