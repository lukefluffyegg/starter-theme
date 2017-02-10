<?php

$themename = 'Starter Theme';
$shortname = 'starter';
$settings_list = array(
    'custom_logo_url',
    'header_text',
    'email_address',
    'telephone',
    'facebook_link',
    'twitter_link',
    'youtube_link',
);

function StarterTheme_add_admin() {
    global $themename, $shortname, $settings_list;
     if(!empty($_GET['page'])) {
    if($_GET['page'] == basename(__FILE__)) {
        if('save' == $_REQUEST['action']) {
            foreach($settings_list as $value) {
                update_option($shortname . '_' . $value,$_REQUEST[$value]);
            }
            header("Location: themes.php?page=settings.php&saved=success");
            die();
        }
    }

}

   add_theme_page($themename." Settings", $themename. " Settings", 'edit_themes', basename(__FILE__), 'theme_admin');
}

function theme_admin() {
    global $themename, $shortname, $settings_list;
    if($_REQUEST['saved']) echo '<div id="message" class="updated fade"><p><strong>'. $themename .' settings sved.</strong></p>';
    if($_REQUEST['reset']) echo '<div id="message" class="updated fade"><p><strong>'. $themename .' settings reset</strong></p>';
 ?>
 <style>
    table { border:none; }
    td { padding: 5px;  }
    .ss_text {width: 350px;}
 </style>
  <div class="wrap">
    <h2><?= $themename; ?> Theme Options</h2>
     <form method="post">
        <table>
        <tr>
            <td>Logo URL</td>
            <td><input type="text" name="custom_logo_url" class="ss_text" value="<?php echo stripcslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>"><br><small><a href="<?php bloginfo('url'); ?>/wp-admin/media-new.php" target="_blank">Upload a new Logo</a>(300px x 100px)</small></td>
        </tr>
         <tr>
            <td>Home page Header</td>
            <td><input type="text" name="header_text" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_header_text',''))); ?>"></td>

        </tr>
        <tr>
          <td>Email Address:</td>
          <td><input type="email" name="email_address" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_email_address'))); ?>"></td>
        </tr>
        <tr>
          <td>Telephone Number:</td>
          <td><input type="text" name="telephone" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_telephone'))); ?>"></td>
        </tr>
        <tr>
            <td>Facebook Link:</td>
            <td><input type="text" name="facebook_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_facebook_link',''))); ?>"></td>
        </tr>
        <tr>
            <td>Twitter link:</td>
            <td><input type="text" name="twitter_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_twitter_link')));  ?>"></td>
        </tr>
        <tr>
            <td>Youtube Link:</td>
            <td><input type="text" name="youtube_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_youtube_link'))); ?>"></td>
        </tr>
        </table>
          <p class="submit">
            <input name="save" type="submit" value="Save Changes">
            <input type="hidden" name="action" value="save">
         </p>
     </form>
   </div>
<?php
}
add_action('admin_menu', 'StarterTheme_add_admin');
?>