<?php

function is_shop_manager() {
    $user = wp_get_current_user();

    if ( isset( $user->roles[0] ) && $user->roles[0] == 'shop_manager' ) {
        return true;    // when user is shop manager
    } else {
        return false;   // when user is not shop manager
    }
}

if ( is_shop_manager() ) {
    // write code for shop_manager here
}
