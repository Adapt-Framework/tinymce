<?php

namespace extensions\tinymce;
use \frameworks\adapt as adapt;

/* Prevent direct access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];

/*
 * Include  css & javascript
 */
$adapt->dom->head->add(new adapt\html_script(array('type' => 'text/javascript', 'src' => '/adapt/extensions/tinymce/static/js/tinymce.min.js')));
$adapt->dom->head->add(
    new html_script(
        "tinymce.init({
            selector: 'textarea.tinymce',
            plugins: 'table link image textcolor',
            menubar: false,
            toolbar: 'undo redo | styleselect | bold italic underline strikethrough forecolor | alignleft aligncenter alignright alignjustify | bullist numlist | table | link image',
            statusbar: false
        });",
        array('type' => 'text/javascript')
    )
);

?>