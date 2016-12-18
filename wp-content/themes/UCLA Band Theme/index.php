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

<div align="right">
<table class="social">
    <tr>
        <td>
            <a href="https://www.youtube.com/user/UCLABandVideoProject" target="_blank">
                <img src="<?php bloginfo('template_directory');?>/images/icon-youtube.png">
            </a>
        </td>
        <td>
            <a href="https://www.facebook.com/uclabruinband/" target="_blank">
                <img src="<?php bloginfo('template_directory');?>/images/icon-facebook.png" >
            </a>
        </td>
        <td>
            <a href="https://www.instagram.com/uclabruinmarchingband/" target="_blank">
                <img src="<?php bloginfo('template_directory');?>/images/icon-instagram.png">
            </a>
        </td>
        <td>
            <a href="https://twitter.com/UCLABruinBand/" target="_blank">
                <img src="<?php bloginfo('template_directory');?>/images/icon-twitter.png">
            </a>
        </td>
    </tr>
</table>
</div>

<div align="center" style="margin-top: -3vw; margin-bottom: 4vmin;">
    <div style="width: 80vmin;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none;">
            <table style="margin:0;">
                <tr>
                    <td>
                        <img src="<?php bloginfo('template_directory');?>/images/logo-gold.png" style="width: 16vmin;" >
                    </td>
                    <td align="right">
                        <p class="top title" style="font-size: 8vmin;">Marching Band</p>
                        <p class="top flourish" style="font-size: 3.8vmin">"The Solid Gold Sound"</p>
                    </td>
                </tr>
            </table>
        </a>
    </div>
</div>


<?php
    if ( is_home()){
        include 'homepage.php';
    }else{
        include 'menu.php';
        include 'contentpage.php';
    }?>

</body>
