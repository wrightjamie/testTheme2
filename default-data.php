<?php
require_once "Lorem.php";

function createContent($args = array())
{
    $lorem = new \joshtronic\LoremIpsum();
    $default_args = array(
        'repeat' => 1,
        'element' => 'section',
        'class' => 'item',
        'id' => NULL,
        'h' => TRUE,
        'h level'=>'2',
        'h length'=> array(3, 8),
        'p' => TRUE,
        'p number' => 1,
        'p length' => array(3,6),
        'img' => FALSE,
        'width' => 400,
        'height' => 300,
        'img top' => TRUE
    );

    $args = array_replace_recursive($default_args, $args);

    for($x = 1; $x <= $args['repeat']; $x++) {
        $headerText = $lorem->words(checkNumber($args['h length']));
        $header = $args['h'] ? sprintf("<h%1\$u>%2\$s</h%1\$u>", $args['h level'], $headerText) : "";

        $img = $args['img'] ? sprintf("<img src='http://placehold.it/%dx%d'>", $args['width'], $args['height']) : "";

        $content="";
        for($y = 1; $y <= checkNumber($args['p number']); $y++ ) {
            $content .= $args['p'] ? "<p>" . $lorem->sentences(checkNumber($args['p length'])) . "</p>" : "";
        }

        $id = (!is_null($args['id']) ? " id='" . $args['id'] . "'" : "");
        $class = (!is_null($args['class']) ? " class='" . $args['class'] . "'" : "");
        $element = $args['element'];

        $output .= "<" . $element . $id . $class . ">" . ($args['img top'] ? $img . $header : $header . $img) . $content . "</" . $element . ">";
    }
    echo $output;
}

function checkNumber($input = 1){
    if(is_array($input)){
        $bottom = $input[0];
        $top = $input[1];
        $input = mt_rand($bottom,$top);
    }elseif(is_numeric($input)){
        $input = round($input);
    }else{
        $input = 1;
    }
    return $input;
}


?>