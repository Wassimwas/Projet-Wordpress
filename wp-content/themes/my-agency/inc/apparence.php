<?php

//Remove span contac form 7 

add_filter('wpcf7_form_elements', function ($content) {
    //$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\ /\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    $content = str_replace('<p>', '', $content);
    $content = str_replace('</p>', '', $content);
    return $content;
});
