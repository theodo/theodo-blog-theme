<?php


function join_us_renderer( $atts ){
    $html = "<hr />";
    $html .= "<p>You liked this article? You'd probably be a good match for our ever-growing tech team at Theodo. ";
    $html .= "</p><p style=\"text-align: center;\"><a id=\"join-us-post-button\" target=\"_blank\" href=\"//www.theodo.fr/jobs/developpeur\" class=\"button\"></i>Join Us</a></p>";
    return $html;
}

add_shortcode( 'joinus', 'join_us_renderer' );

function theodo_theme_enqueue()
{
    wp_enqueue_style( 'share-button-css', get_theme_root_uri() . '/theodo-blog-theme/css/share-button.min.css', null, null );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'share-button-js', get_theme_root_uri() . '/theodo-blog-theme/js/share-button.min.js', null, null );
    wp_enqueue_script( 'main-theodo', get_theme_root_uri() . '/theodo-blog-theme/js/main.js', null, null, true );
}

add_action( 'wp_enqueue_scripts', 'theodo_theme_enqueue' );

add_action('the_post', 'redirect_category_posts');

function redirect_category_posts() {
    global $post;
    if (is_single() && in_category(array('internal', 'admin', 'business-cases', 'hiring', 'progression', 'standards', 'sales', 'technical-gesture'), $post)) {
        echo '<script type="text/javascript">window.location = "http://blog.m33.network" + location.pathname.replace("/blog", "");</script>';
    }
}

add_action( 'admin_enqueue_scripts', 'warn_user_if_internal_or_private' );

function warn_user_if_internal_or_private( $hook ) {
    global $post;
    if ($hook == 'post.php' && ( get_post_status() == 'private' || in_category(array('internal', 'admin', 'business-cases', 'hiring', 'progression', 'standards', 'sales', 'technical-gesture'), $post) ) ) {
        echo '<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';
        echo '
<div id="m33-redirection-notice" title="The M33 internal blog has been moved!" style="display: none;">
  <p>It looks like you are editing an internal blog article. They have all been moved to <a href="http://blog.m33.network">blog.m33.network</a>.</p>
  <p><b>If some changes are missing on the new blog, please copy-paste them from here.</b></p>
</div>
<style>
.ui-dialog.ui-dialog-max-z-index {
  z-index: 1200 !important;
}
.ui-dialog-titlebar-close.corrected-position span.ui-icon-closethick {
  left: 0%;
  top: 0%;
  margin: 0px;
}
</style>
<script>
  $( function() {
    $( "#m33-redirection-notice" ).dialog({
      modal: true,
      closeText: "",
      width: 600,
      position: { my: "top+60", at: "top", of: window },
      resizable: false,
      classes: {
        "ui-dialog": "ui-dialog-max-z-index",
        "ui-dialog-titlebar-close": "corrected-position"
      },
      buttons: [
        {
          text: "Edit my article on the new blog",
          click: function() {
            window.location = "http://blog.m33.network" + location.pathname.replace("/blog", "") + location.search;
          }
        },
	      {
	        text: "Keep editing here",
	        click: function() {
	          $( this ).dialog( "close" );
	        }
	      }
      ]
    });
  } );
</script>
        ';
    }
}
