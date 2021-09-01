<div class="wrap">

<h1 class="wp-heading-inline" style="margin-bottom: 10px;"><?php _e('WEBP Images Settings', 'webp-converter');?></h1>

<?php if (isset($GLOBALS['msg'])) {echo '<div class="updated notice notice-success webp-msg is-dismissible">' . esc_html($GLOBALS['msg']) . '</div>';}?>

<form name="f" method="post" action="">
<input type="hidden" name="option" value="apwebp_save_settings" />
<?php wp_nonce_field('apwebp_options_save_action', 'apwebp_options_save_action_field');?>
<table border="0" class="ap-table" width="100%">
  <tr>
    <td colspan="2">
     <div class="ap-tabs">
        <div class="ap-tab"><?php _e('General', 'webp-converter');?></div>
        <div class="ap-tab"><?php _e('Status', 'webp-converter');?></div>
    </div>

     <div class="ap-tabs-content">
        <div class="ap-tab-content">
        <table width="100%">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td valign="top" width="300"><strong><?php _e('Enable', 'webp-converter');?></strong></td>
            <td><label><input type="checkbox" name="apwebp_enable" value="yes" <?php echo get_option('apwebp_enable') == 'yes' ? 'checked="checked"' : ''; ?> /> <?php _e('Enable webp images', 'webp-converter');?></label></td>
           </tr>
           <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
           <tr>
          <tr>
            <td valign="top" width="300"><strong><?php _e('Convert only full size images', 'webp-converter');?></strong></td>
            <td><label><input type="checkbox" name="apwebp_dont_conv_image_sizes" value="yes" <?php echo get_option('apwebp_dont_conv_image_sizes') == 'yes' ? 'checked="checked"' : ''; ?> /> <?php _e('Don\'t convert different image sizes', 'webp-converter');?></label></td>
           </tr>
           <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="<?php _e('Save', 'webp-converter');?>" class="button button-primary button-large button-ap-large" /></td>
          </tr>
          </table>
        </div>
        <div class="ap-tab-content">
        <table width="100%">
          <tr>
            <td valign="top" width="300"><strong><?php _e('Plugin API Status', 'webp-converter');?></strong></td>
            <td><p><div id="key-status-webp" class="key-status">...</div><div style="clear:both;"></div></p></td>
          </tr>

          </table>
        </div>
    </div>
  </td>
  </tr>
</table>
</form>
</div>