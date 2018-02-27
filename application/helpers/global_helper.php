<?php

function debuger($data){
    echo '<pre style="background: #f9f9f9; padding:11px; font-size:11px; margin: 30px 10px">';
    echo '<div style="margin-bottom:10px; border-bottom:#ccc 1px solid; font-weight:bold; padding-bottom:5px; font-size:12px">Debug</div>';
    print_r($data);
    echo '</pre>';
}