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
    <?php
        wp_head();
    ?>
    <title>Header file</title>
</head>
<body <?php body_class();?>>
<h1>HEADER</h1>