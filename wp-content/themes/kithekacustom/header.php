<?php
/**
 * Contains the header
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <?php endif;?>
    <?php
        wp_head();
    ?>
    <title>Header file</title>
</head>
<body <?php body_class();?>>
<h1>HEADER</h1>