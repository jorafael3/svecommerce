{*
* 2010-2022 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through LICENSE.txt file inside our module
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to CustomizationPolicy.txt file inside our module for more information.
*
* @author Webkul IN
* @copyright 2010-2022 Webkul IN
* @license LICENSE.txt
*}

<div class="panel">
	<h3><i class="icon-cogs"></i>{l s='Configure your fee' mod='wkpaymentfee'}</h3>

	<div class="productTabs">
        <ul class="nav nav-tabs">
            <li class="tab-row active">
                <a class="tab-page" data-toggle="tab" id="fee_information" href="#information"><i class="icon-info"></i> {l s='Information' mod='wkpaymentfee'}</a>
            </li>
            <li class="tab-row">
                <a class="tab-page" data-toggle="tab" id="fee_condition" href="#condition"><i class="icon-random"></i> {l s='Conditions' mod='wkpaymentfee'}</a>
            </li>
            <li class="tab-row">
                <a class="tab-page" data-toggle="tab" id="fee_actions" href="#action"><i class="icon-wrench"></i> {l s='Actions' mod='wkpaymentfee'}</a>
            </li>
        </ul>
    </div>

    <form class="form form-horizontal clearfix" method="post" action="#">
    <div class="tab-content panel">
       <div id="information" class="tab-pane active">
            {include './informations.tpl'}
        </div>
        <div id="condition" class="tab-pane ">
            {include './condition.tpl'}
        </div>
        <div id="action" class="tab-pane">
            {include './action.tpl'}
        </div>
    </div>

    <div class="panel-footer">
        <a href="{$link->getAdminLink('AdminPaymentFee')|escape:'html':'UTF-8'}" class="btn btn-default">
            <i class="process-icon-cancel"></i>{l s='Cancel' mod='wkpaymentfee'}
        </a>
        <button type="submit" name="submitAddwk_paymentfee" class="btn btn-default pull-right" id="submitAddwk_paymentfee">
        <i class="process-icon-save"></i> {l s='Save' mod='wkpaymentfee'}
        </button>
        <button type="submit" name="submitAddwk_paymentfeeAndStay" class="btn btn-default pull-right">
            <i class="process-icon-save"></i> {l s='Save and stay' mod='wkpaymentfee'}
        </button>
        </div>
	</form>
</div>
{strip}
    {addJsDefL name=errorMessage}{l s='Maximum amount value must be greater than minimum amount' js=1 mod='wkpaymentfee'}{/addJsDefL}
{/strip}