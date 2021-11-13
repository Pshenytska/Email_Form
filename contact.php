<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/form.css" type="text/css" rel="stylesheet">
    <style>
        form {
            width: 50%;
            margin: 50px auto;
            float: left;
            font-family: "Roboto", sans-serif;

        }

        input[type=text],
        input[type=email],
        select {
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=text]:focus {
            border: 3px solid #555;
        }

        fieldset {
            padding: 10px;
        }

        label {
            display: block;
        }

        .error {
            display: block;
            color: white;
            background-color: brown;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-top: 5px;
            font-style: italic;
        }

        aside {
            width: 40%;
            font-style: italic;
            background-color: lightgray;
            padding-left: 15px;
            margin: 50px auto;
        }

        .button,
        input[type="submit"] {
            width: 140px;
            height: 45px;
            margin-bottom: 10px;
            font-family: "Roboto", sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        } 

        input[type="submit"]:hover {
            color: black;
            background-color: yellow;
            box-shadow: 0px 15px 20px rgba(239, 243, 11, 0.4);
            transform: translateY(-7px);
        }

        a {
            text-decoration: none;
        }

        textarea {
            background-color: #f8f8f8;
            height: 20px;
            width: 300px;
        }

        li {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Welcome to the contact page!</h1>
    <?php 
include('includes/form.php'); ?>
    <aside>
        <p>Did you know there is a world outside of your small, all too familiar home? Travel is important to learn more about the world and to experience life in a different environment. So much can be learned and discovered during a trip overseas. It doesn’t matter where the individual travels as long as the desired location is not too close to home so that you can be immersed in another culture.</p>
        <iframe src="https://giphy.com/embed/toelXGUsYD6vtCN408" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
        <p><a href="https://giphy.com/gifs/travel-holiday-journey-toelXGUsYD6vtCN408">via GIPHY</a></p>
    </aside>
</body>
<?php include('includes/footer.php'); ?>