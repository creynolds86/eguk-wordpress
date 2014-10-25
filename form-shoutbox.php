<form id="shoutbox-form" name="shoutbox" method="post">
  <div class="form-group">
    <label for="shout" class="sr-only"><?php _e('Post a message to the shoutbox', '_egukbasetheme'); ?></label>
      <textarea name="message" class="form-control" placeholder="<?php _e('Post a message', '_egukbasetheme'); ?>..." required></textarea>
    </div>
    <button type="submit" class="btn btn-primary"><?php _e('Shout', '_egukbasetheme'); ?></button>
    <?php wp_nonce_field( 'ajax-shoutbox-nonce', 'security' ); ?>
  </div>
</form>