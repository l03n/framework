<?php

function dd($parameter = 'Inform a parameter') {
    echo '<pre>';
    var_dump($parameter);
    echo '</pre>';
    die();
}
