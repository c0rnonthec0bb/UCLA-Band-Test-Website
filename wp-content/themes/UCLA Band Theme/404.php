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

<?php include 'menu.php';?>

</td></tr><tr><td align="center">

<div style="width: 80vw;"><div class="card">
<p class="title">Error 404 (Page Not Found)</p>
<p>Yikes!  Unfortunately it appears the page you're looking for doesn't exist.</p>
</div></div>

</td></tr>

<tr><td id="foot" align="center">
<p class="title">Copyright ©<?php echo date("Y")?> UC Regents, UCLA Bands</p>
<p class="title">Website by Adam Cobb and Adam Jones</p>
</td></tr>

</table>

</body>
