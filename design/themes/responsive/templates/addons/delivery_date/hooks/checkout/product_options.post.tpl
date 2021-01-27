<div class="control-group">
    <label class="control-label ty-control-group__label ty-product-options__item-label" for="date_holder_{$product.product_id}">{__('delivery_date.desired_date')}</label>
    <div class="controls">
        {include file="common/calendar.tpl" date_id="date_holder_`$product.product_id`" date_name="product_data[delivery_timestamp]" date_val=$product.deliver|default:$smarty.const.TIME start_year=$settings.Company.company_start_year}
    </div>
    <br>
</div><h1>Test</h1>{$product|fn_print_r}