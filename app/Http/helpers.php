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