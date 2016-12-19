<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important;">

<head>
    <meta charset="UTF-8">
    <title>UCLA Band - <?php global $post; echo $post->post_title;?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Mirza:400,600|Leckerli+One|Roboto:300" />
</head>

<body style="background-image: url(<?php bloginfo('template_directory'); echo "/images/background.jpeg)";?>" >

<?php include 'top.php'; ?>

<table align="center">
<tr>
<td>

<?php
    if ( is_home()){
        include 'homesliders.php';
    }else{
        include 'menu.php';
    }?>
</td></tr><tr><td>

        <div id="contentArea" align="left"></div>

</td></tr></table>

</body>
