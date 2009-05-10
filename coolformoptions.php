<h2>Cool Contact Form Options</h2>
<form name="coolformoption" id="coolformoption" method="POST" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<p>Enter the email address, you want to recieve emails from the contact page</p>
<label>Email Address: </label>
<input type="text" name="cool_email_option" size="30" value="<?php echo get_option('cool_email_option'); ?>" />
<p>Enter the title you want to display on the Contact page</p>
<label>Title: </label>
<input type="text" name="cool_title_option" size="30" value="<?php echo get_option('cool_title_option'); ?>" />
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="cool_email_option,cool_title_option" />
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
</form>