<?php
/**
 * @package Social Icons By Demoify
 * @version 1.0.0
 */
/*
Plugin Name:       Social Icons By Demoify
Plugin URI:        https://demoify.com/plugin/social-icons-by-demoify
Description:       This is a free WordPress plugin you can  insert socials icons in your website.
Author:            The Demoify
Version:           1.0.0
Author URI:        http://www.demoify.com
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain:       social-icons-by-demoify
*/

 function social_icons_scripts() 
   {
/* wp_register_style() */
wp_register_style('social-icons', plugins_url( 'css/social-icons-by-demoify.css', __FILE__ ) );
wp_enqueue_style('social-icons');
}

add_action( 'wp_enqueue_scripts', 'social_icons_scripts' );

/**
 * Adds Social Icons By Demoify widget.
 */

class Social_Icon extends WP_Widget {

/* Register widget with WordPress.   */
function __construct(){
parent::__construct(
                'Social_Icon',
                __('Social Icons By Demoify', 'Social_Icon_domain'), // Name
                array('description' => __('It helps to to add social icons', 'Social_Icon_domain'),)
        );

}

/* Creating widget front-end. */

public function widget($args, $instance) {

        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
        $linkedin = $instance['linkedin'];
        $youtube = $instance['youtube'];
        $google_plus = $instance['google_plus'];
        $pinterest = $instance['pinterest'];
        $instagram = $instance['instagram'];
        $github = $instance['github'];
        $rss = $instance['rss'];
        

        // social profile link
        $facebook_profile = '<a class="facebook" href="' . $facebook . '"><i class="fa fa-facebook"></i></a>';
        $twitter_profile = '<a class="twitter" href="' . $twitter . '"><i class="fa fa-twitter"></i></a>';
        $google_profile = '<a class="google" href="' . $google . '"><i class="fa fa-google-plus"></i></a>';
        $linkedin_profile = '<a class="linkedin" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a>';
        $youtube_profile = '<a class="youtube" href="' . $youtube . '"><i class="fa fa-youtube"></i></a>';
        $google_plus_profile = '<a class="google_plus" href="' . $google_plus . '"><i class="fa fa-google-plus"></i></a>';
        $pinterest_profile = '<a class="pinterest" href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a>';
        $instagram_profile = '<a class="instagram" href="' . $instagram . '"><i class="fa fa-instagram"></i></a>';
        $github_profile = '<a class="github" href="' . $github . '"><i class="fa fa-github"></i></a>';
        $rss_profile = '<a class="rss" href="' . $rss . '"><i class="fa fa-rss"></i></a>';
       


        echo $args['before_widget'];

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<div class="social-icons">';
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo (!empty($google) ) ? $google_profile : null;
        echo (!empty($linkedin) ) ? $linkedin_profile : null;
        echo (!empty($youtube) ) ? $youtube_profile : null;
        echo (!empty($google_plus) ) ? $google_plus_profile : null;
        echo (!empty($pinterest) ) ? $pinterest_profile : null;
        echo (!empty($instagram) ) ? $instagram_profile : null;
        echo (!empty($github) ) ? $github_profile : null;
        echo (!empty($rss) ) ? $rss_profile : null;
       
        echo '</div>';

        echo $args['after_widget'];
    }

/* Creating widget back-end. */

public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'My Social Icons' : null;

        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        isset($instance['youtube']) ? $youtube = $instance['youtube'] : null;
        isset($instance['google_plus']) ? $google_plus = $instance['google_plus'] : null;
        isset($instance['pinterest']) ? $pinterest = $instance['pinterest'] : null;
        isset($instance['instagram']) ? $instagram = $instance['instagram'] : null;
        isset($instance['github']) ? $github = $instance['github'] : null;
        isset($instance['rss']) ? $rss = $instance['rss'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('google_plus'); ?>"><?php _e('Google_plus:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('google_plus'); ?>" name="<?php echo $this->get_field_name('google_plus'); ?>" type="text" value="<?php echo esc_attr($google_plus); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo esc_attr($instagram); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('Github:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" type="text" value="<?php echo esc_attr($github); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e('RSS:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo esc_attr($rss); ?>">
        </p>

        <?php
    }

/* // Updating widget replacing old instances with new */

 public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
        $instance['youtube'] = (!empty($new_instance['youtube']) ) ? strip_tags($new_instance['youtube']) : '';
        $instance['google_plus'] = (!empty($new_instance['google_plus']) ) ? strip_tags($new_instance['google_plus']) : '';
        $instance['pinterest'] = (!empty($new_instance['pinterest']) ) ? strip_tags($new_instance['pinterest']) : '';
        $instance['instagram'] = (!empty($new_instance['instagram']) ) ? strip_tags($new_instance['instagram']) : '';
        $instance['github'] = (!empty($new_instance['github']) ) ? strip_tags($new_instance['github']) : '';
        $instance['rss'] = (!empty($new_instance['rss']) ) ? strip_tags($new_instance['rss']) : '';
       
        return $instance;
    }

} /* Class Social_Icon ends here */

/* Register and load the widget */

function register_Social_Icon() {
    register_widget('Social_Icon');
}

add_action('widgets_init', 'register_Social_Icon');
