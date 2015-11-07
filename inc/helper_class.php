<?php
/**
 * Created by PhpStorm.
 * User: Jamie
 * Date: 28/10/2015
 * Time: 20:38
 */

namespace testTheme;

class Helper
{
    private $version = 1;
    private $name = "testTheme";

    public function sanitize_integer($input)
    {
        if (is_numeric($input)) {
            return intval($input);
        }
    }

    public function sanitize_choices($input, $setting)
    {
        global $wp_customize;

        $control = $wp_customize->get_control($setting->id);

        if (array_key_exists($input, $control->choices)):
            return $input;
        else:
            return $setting->default;
        endif;
    }

    public function get_version(){
        return $this->version;
    }

    public function get_name(){
        return $this->name;
    }
}