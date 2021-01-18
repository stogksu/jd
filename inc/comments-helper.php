<?php
if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment">
        <div class="img-thumbnail d-none d-sm-block">
            <?php echo get_avatar($comment,$size='80',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
        </div>
        <div class="comment-block">
            <div class="comment-arrow"></div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.','jd') ?></em>
                    <br />
                <?php endif; ?>
                
                <span class="comment-author">
                    <strong><?php echo get_comment_author() ?></strong>
                    <span class="comment-reply">
                        <span> - <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
                    </span>
                </span>
                <br>
                <span class="comment-date"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s, at %2$s' , 'jd'), get_comment_date(),  get_comment_time()) ?></span>
            <p> <?php comment_text() ?></p>
        </div>
    </div>

<?php
        }
endif;
?>