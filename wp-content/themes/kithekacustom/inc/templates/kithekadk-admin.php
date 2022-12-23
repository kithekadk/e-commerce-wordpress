<h1>Kitheka Theme Options</h1>
<?php settings_errors();?>
<?php 
    $firstname= esc_attr( get_option('first_name') );
    $lastname= esc_attr( get_option('last_name') );
    $fullname = $firstname . ' ' . $lastname;
    $description = esc_attr(get_option('user_description'));
?>

<div class="kitheka-general">
    <div class="kitheka-sidebar-preview">
        <div class="kitheka-sidebar">
            <h1 class="kitheka-username"><?php print $fullname; ?><h1>
            <h2 class="kitheka-description"><?php print $description;?><h2>
            <div class="icons-wrapper"><div>
        </div>
    </div>

    <form method="post" action="options.php" class="kitheka-general-form">
        <?php settings_fields('kitheka-settings-group');?>
        <?php do_settings_sections('kithekadk_theme');?>
        <?php submit_button(); ?>
    </form>
</div>