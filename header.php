<head>
    <meta charset="UTF-8">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title><?php echo $title; ?></title>
</head>

<body class=" <?php echo $body; ?>">
    <header>
        <div class="header-inner"><a href="../index.php">
                <img id="logo" src="pictures/logo.jpg" alt="logo"></a>
            <nav>
                <ul class="navigation">
                    <?php
                    echo my_nav($nav);
                    ?>
                </ul>
            </nav>
        </div>
    </header>