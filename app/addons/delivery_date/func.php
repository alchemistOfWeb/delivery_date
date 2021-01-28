<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_delivery_date_save_cart_content_before_save(
    $cart, 
    $user_id, 
    $type, 
    $user_type, 
    &$product_data
) 
{
    // fn_print_r('savesavesave_________');
    // fn_print_r($product_data);
    // fn_print_r($cart['products'][$product_data['item_id']]);
    
    // fn_print_r('savesavesave_________');
    $delivery_timestamp = @$cart['products'][$product_data['item_id']]['delivery_timestamp'];
    $product_data['delivery_timestamp'] = !empty($delivery_timestamp) ? $delivery_timestamp : 0;
    
}

function fn_delivery_date_add_product_to_cart_get_price(
    $product_data, 
    &$cart, 
    $auth, 
    $update, 
    $_id, 
    $data, 
    $product_id, 
    $amount, 
    $price, 
    $zero_price_action, 
    $allow_add
)
{
    // fn_print_r('addaddaddadd_________');
    // fn_print_r($cart['products'][$_id]['delivery_timestamp']);
    // fn_print_r('addaddaddadd_________');
    // $cart['products'][$_id]['delivery_timestamp'] = strtotime($product_data[$product_id]['delivery_timestamp']);
}

function fn_delivery_date_post_add_to_cart(
    $product_data, 
    &$cart, 
    $auth, 
    $update, 
    $ids
)
{
    foreach ($ids as $item_id => $product_id) {
        $cart['products'][$item_id]['delivery_timestamp'] = strtotime($product_data[$product_id]['delivery_timestamp']);
    }
}