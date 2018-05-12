<?php

/**
 * Bunjouchi Status
 */
function bunjouchiStatus($status) {
    if(!$status) {
        return '分譲中';
    }

    return '完売御礼';
}

function getDayDB($time) {
    if($time) {
        return explode(" ", $time)[0];
    } else {
        return '';
    }
}