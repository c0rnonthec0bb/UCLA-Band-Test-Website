<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important;"
<?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobi') !== false) {
        echo 'class="mobileHtml"';
    }
    ?>
>

<?php the_post(); ?>

<head>
    <meta charset="UTF-8">
<title>UCLA Band - <?php if(is_home()){echo 'Home';}else{the_title();}?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Leckerli+One|Roboto:300,700" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/ucla-band-theme/css/font.css" />
</head>

<body
<?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobi') !== false) {
        echo 'class="mobileBody"';
    }
    ?>
>

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

</td></tr><tr><td align="center">

        <div id="contentArea" align="left">
            <p class="title" style='color: white; text-align:center'>Loading page content...</p>
<h1 style='color: white; text-align:center; font-size:2vh;'>If the page does not load within a few seconds, your browser may not have JavaScript enabled.</h1>
</div>

</td></tr>

<tr><td id="foot" align="center">
    <p class="title">Copyright ©<?php echo date("Y")?> UC Regents, UCLA Bands</p>
    <p class="title">Website by Adam Cobb and Adam Jones</p>
</td></tr>

</table>

</body>
