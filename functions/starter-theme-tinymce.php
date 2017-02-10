<?php

    class Starter_theme_Setup_TinyMCE
    {   
        private $hide_editor_on_templates = array(

        );
 
        /**
         * Constructor | Initialises post type/hooks etc.
         *
         * @return void      
         */

        public function __construct ()
        {
            add_action('load-page.php', array(&$this, 'hide_editor_on_pages'));
            add_filter('mce_css', array(&$this, 'add_tinymce_stylesheet'));
            add_filter('mce_buttons', array(&$this, 'add_formats_button'));
            add_filter('tiny_mce_before_init', array(&$this, 'add_formats_styles'));
        }

        /**
         * Removes Menu Items
         *
         * @return void      
         */

        public function hide_editor_on_pages ()
        {
            if (!isset( $_GET['post']))
            {
                return;
            }

            $template = get_post_meta($_GET['post'] , '_wp_page_template', true);

            if (in_array($template, $this->hide_editor_on_templates))
            {
                remove_post_type_support('page', 'editor');
            }                       
        }

        /**
         * Adds TinyMCE Stylesheet
         *
         * @return void      
         */

        public function add_tinymce_stylesheet ($url)
        {
            if (!empty($url))
            {
                 $url .= ',';   
            }

            $url .= get_bloginfo('template_directory') . '/css/admin-tinymce.css';

            return $url;                
        }

        /**
         * Adds Formats Button To TinyMCE
         *
         * @return void      
         */

        public function add_formats_button ($buttons)
        {
            array_push($buttons, 'styleselect');

            return $buttons;                
        }

        /**
         * Adds Formats Styles
         *
         * @return void      
         */

        public function add_formats_styles ($settings)
        {
            // Create array of new styles
            $new_styles = array(
                // array(
                //  'title' => __( 'Custom Elements', 'starter' ),
                //  'items' => array(
                //      array(
                //          'title'     => __('Grey Content Box','starter'),
                //          'block'     => 'div',
                //          'classes'   => 'content-block',
                //          'wrapper'   => true
                //      )                                                           
                //  )
                // ),
                // array(
                //  'title' => __( 'Typography Styling', 'starter' ),
                //  'items' => array(
                //      array(
                //          'title'     => __('Dark Purple','starter'),
                //          'selector'     => 'h1, h2, h3, h4, h5, p, li, a',
                //          'classes'   => 'color-dark-purple',
                //      ),
                //      array(
                //          'title'     => __('Light Purple','starter'),
                //          'selector'     => 'h1, h2, h3, h4, h5, p, li, a',
                //          'classes'   => 'color-light-purple',
                //      ),  
                //      array(
                //          'title'     => __('Dark Green','starter'),
                //          'selector'     => 'h1, h2, h3, h4, h5, p, li, a',
                //          'classes'   => 'color-dark-green',
                //      ),                                                                  
                //      array(
                //          'title'   => __('Small','starter'),
                //          'inline'  => 'small',
                //      )                                                                                   
                //  )
                // )                
            );

            // Merge old & new styles
            $settings['style_formats_merge'] = false;

            // Add new styles
            $settings['style_formats'] = json_encode($new_styles);

            // Return New Settings
            return $settings;           
        }                                       
    }

    $starter_theme_tidy_admin_menu = new Starter_theme_Setup_TinyMCE();
?>