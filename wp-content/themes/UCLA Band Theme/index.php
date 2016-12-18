<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important;">

<head>
    <meta charset="UTF-8">
    <title>UCLA Band - <?php global $post; echo $post->post_title;?></title>
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/functions.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Mirza:400,600|Leckerli+One" />
</head>

<body style="background-image: url(<?php bloginfo('template_directory'); echo "/images/background.jpeg)";?>" >

<?php
    include 'top.php';
    
    if ( is_home()){
        include 'homepage.php';
    }else{
        include 'menu.php';
        include 'contentpage.php';
    }?>

</body>
