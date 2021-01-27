<div class="control-group">
    <label class="control-label" for="date_holder">{__('delivery_date.choose_desired_date')}:</label>
    <div class="controls">
        {include file="common/calendar.tpl" date_id="date_holder" date_name="product_data[{$product.product_id}][delivery_timestamp]" date_val=$smarty.const.TIME start_year=$settings.Company.company_start_year}
    </div>
    <br>
</div>
{* :product_amount *}
{* :product_option_content *}
{* :options_advanced *}
{* :qty_description *}
{* :buttons_block *}