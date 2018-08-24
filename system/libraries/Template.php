<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 15/08/18
 * Time: 16:32
 */

class Template
{
    /**
     * Location of expected template
     *
     * @var string
     */
    private $folder;
    private $template;
    /**
     * Template constructor.
     *
     */
    function __construct(){
        $this->template = 'default.php';
        $this->set_folder( VIEW_PATH );
    }
    /**
     * Simple method for updating the base folder where templates are located.
     *
     * @param $folder
     */
    private function set_folder( $folder ){
        // normalize the internal folder value by removing any final slashes
        $this->folder = $this->folder = rtrim( $folder, '/' );
    }
    /**
     * Simple method for updating the base template used.
     *
     * @param $template
     */
    public function set_template( $template ){
        // set alternative template
        $this->template = $template.'.php';
    }
    /**
     * Find and attempt to render a template with variables
     *
     * @param $suggestions
     * @param $variables
     *
     * @return string
     */
    function render( $suggestions, $variables = array() ){
        $template = $this->find_template( $suggestions );
        $output = '';
        if ( $template ){
            $variables['content'] = $suggestions.'.php';
            $output = $this->render_template( $template, $variables );
        }
        print $output;
    }
    /**
     * Look for the first template suggestion
     *
     * @param $suggestions
     *
     * @return bool|string
     */
    private function find_template( $suggestions ){
        if ( !is_array( $suggestions ) ) {
            $suggestions = array( $suggestions );
        }
        $suggestions = array_reverse( $suggestions );
        $found = false;
        foreach( $suggestions as $suggestion ){
            $file = "{$this->folder}/{$suggestion}.php";
            if ( file_exists( $file ) ){
                $found = $file;
                break;
            }
        }
        return $found;
    }
    /**
     * Execute the template by extracting the variables into scope, and including
     * the template file.
     *
     * @internal param $template
     * @internal param $variables
     *
     * @return string
     */
    private function render_template( /*$template, $variables*/ ){
        ob_start();

        foreach ( func_get_args()[1] as $key => $value) {
            ${$key} = $value;
        }

        include VIEW_PATH.$this->template;

        return ob_get_clean();
    }
}