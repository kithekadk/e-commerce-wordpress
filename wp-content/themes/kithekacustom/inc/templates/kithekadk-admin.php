<h1>Kitheka Theme Options</h1>
<?php settings_errors();?>
<form method="post" action="options.php">
    <?php settings_fields('kitheka-settings-group');?>
    <?php do_settings_sections('kithekadk_theme');?>
    <?php submit_button(); ?>
</form>