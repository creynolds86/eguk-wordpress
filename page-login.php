<?php

  /**
   * The template for displaying thhe login form.
   *
   * This is the template that displays all pages by default.
   * Please note that this is the WordPress construct of pages
   * and that other 'pages' on your WordPress site will use a
   * different template.
   *
   * @package _egukbasetheme
   * Template Name: Login form
   */

  get_header(); ?>

  <section id="login" role="region">
    
    <form method="post" action="<?php bloginfo('url') ?>/wp-login.php" role="form">

      <div class="form-group">
        <label for="username" class="sr-only"><?php _e('User name'); ?></label>
        <input type="text" class="form-control" id="username" name="log" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password" class="sr-only"><?php _e('Password'); ?></label>
        <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
      </div>

      <div class="checkbox">
        <label>
          <input type="checkbox" name="rememberme" value="forever"> Remember me
        </label>
      </div>

      <?php do_action('login_form'); ?>

      <input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>">
      <input type="hidden" name="user-cookie" value="1">

      <button type="submit">Sign in</button>
    </form>

  </section>

  <?php get_footer(); ?>
