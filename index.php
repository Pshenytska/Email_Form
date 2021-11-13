<?php
include('config.php');
include('includes/header.php'); ?>

<body>
    <?php echo $headline; ?>
    <?php
    $photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);
$selected_image = '' . $photos[$i] . '.jpg';
echo '<img src="images/' . $selected_image . '"  alt=" ' . $photos[$i] . '">';?>



    <?php include('includes/footer.php'); ?>