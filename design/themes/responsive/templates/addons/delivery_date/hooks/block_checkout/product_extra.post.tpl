<span class="ty-product-options clearfix">
    <span class="ty-product-options-name"> {__('delivery_date.desired_date')} </span>
    {$product|fn_print_r}
    <span class="ty-product-options-content"> {$product.delivery_timestamp|date_format} </span>
</span>