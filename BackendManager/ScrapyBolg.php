<?php
include ('simple_html_dom.php');

$html = file_get_html('https://www.sanook.com/horoscope/');


foreach($html->find('jsx-356486372 jsx-1733823188 category love') as $element){

    echo '<pre>';
    die(var_dump($element));
    // $urls = array();
    // foreach($element->find('a')as $element){
        
    // }
}

?>