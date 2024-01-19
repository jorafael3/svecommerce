<?php
/*
* 2017 AxonVIP
*
* NOTICE OF LICENSE
*
*  @author AxonVIP <axonvip@gmail.com>
*  @copyright  2017 axonvip.com
*   
*/

class NrtSocialLoginCredentialsModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		parent::initContent();
		$account_link = $this->context->link->getPageLink('my-account', 'true');
		$this->context->smarty->assign('acc_link', $account_link);
		$this->setTemplate('module:nrtsociallogin/views/templates/front/error_cre.tpl');
	}
}
?>
