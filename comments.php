  <?php

    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
      die ('Please do not load this page directly. Thanks!');

    if ( post_password_required() ) { ?>
      This post is password protected. Enter the password to view comments.
    <?php
      return;
    }
  ?>

  <?php if ( have_comments() ) : ?>
    
    <h4 id="comments" class="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?></h4>

    <ol class="commentlist">
       <?php $args = array(
        'avatar_size'       => 160
      ); ?>
      
       <?php wp_list_comments( $args, $comments ); ?> 
    </ol>
    
   <?php else : // this is displayed if there are no comments so far ?>

    <?php if ( comments_open() ) : ?>
      <!-- If comments are open, but there are no comments. -->

     <?php else : // comments are closed ?>

    <?php endif; ?>
    
  <?php endif; ?>

  <?php if ( comments_open() ) : ?>

  <div id="respond" class="respond">

    <h4><?php comment_form_title( 'Leave your comment', 'Relpy to %s!' ); ?></h4>

    <div class="cancel-comment-reply">
      <?php cancel_comment_reply_link('&otimes; cancel reply'); ?>
    </div>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
      <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

      <?php if ( is_user_logged_in() ) : ?>

        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

      <?php else : ?>

        <div>
          <p>
            <label for="author">Name <?php if ($req) echo "(required)"; ?></label><br>
            <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="30" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>/>
          </p>
        </div>

        <div>
          <p>
            <label for="email">Mail <?php if ($req) echo "(required)"; ?></label><br>
            <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="30" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>/>
          </p>
        </div>

        <div>
          <p>
            <label for="url">Website</label><br>
            <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="30" tabindex="3"/>
          </p>
        </div>

      <?php endif; ?>

      <!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

      <div>
        <p>
          <label for="url">Comment</label><br>
          <textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" placeholder="Write your message here..."></textarea>
        </p>
      </div>

      <div>
        <p>
          <input name="submit" type="submit" id="submit" class="btn" tabindex="5" value="Submit" />
          <?php comment_id_fields(); ?>
        </p>
      </div>
      
      <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>
    
  </div>

  <?php endif; ?>