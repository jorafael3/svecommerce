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

require_once(_PS_MODULE_DIR_.'nrtsociallogin/libraries/http.php');
require_once(_PS_MODULE_DIR_.'nrtsociallogin/libraries/oauth_client.php');

class NrtSocialLoginYloginModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		parent::initContent();

		$desktop = 0;
		
		if(isset($_COOKIE['cookieSw']) && (int)$_COOKIE['cookieSw'] > 1199){
			$desktop = 1;
		}

		$platform = Tools::getValue('type');
		$platform = trim($platform);
		$flag = 0;
		if ($platform == 'yahoo')
			$user_data = $this->yahooLogin();
		if (Tools::isSubmit('oauth_token'))
			$user_data = $this->yahooLogin();

		if (Tools::isSubmit('login_email'))
		{
			$email = Tools::getValue('login_email');
			if (Customer::customerExists($email))
			{
				$errormsg = $this->module->l('Email already exist please choose another one');
				$this->context->smarty->assign('errormsg', $errormsg);
				if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
				$custom_ssl_var = 1;
				if ((bool)Configuration::get('PS_SSL_ENABLED') && $custom_ssl_var == 1)
					$module_dir = _PS_BASE_URL_SSL_.__PS_BASE_URI__.str_replace(_PS_ROOT_DIR_.'/', '', _PS_MODULE_DIR_);
				else
					$module_dir = _PS_BASE_URL_.__PS_BASE_URI__.str_replace(_PS_ROOT_DIR_.'/', '', _PS_MODULE_DIR_);
				$this->context->smarty->assign('modulepath', $module_dir);
				$this->setTemplate('module:nrtsociallogin/views/templates/front/yahoo-email.tpl');
			}
			else
			{
				$user_data = $this->yahooLogin();
				if (!empty($user_data))
				{
					$unique_id = $user_data->query->results->profile->guid;
					$sql = 'insert into '._DB_PREFIX_.'nrtsociallogin_mapping (email,unique_id) values ("'.pSQL($email).'","'.pSQL($unique_id).'")';
					Db::getInstance()->execute($sql);
					$social_data = array();
					if (isset($user_data->query->results->profile->givenName) && !empty($user_data->query->results->profile->givenName))
						$firstname = $user_data->query->results->profile->givenName;
					else
						$firstname = $user_data->query->results->profile->nickname;
					if (isset($user_data->query->results->profile->familyName) && !empty($user_data->query->results->profile->familyName))
						$lastname = $user_data->query->results->profile->givenName;
					else
						$lastname = $user_data->query->results->profile->nickname;
					$social_data = array();
					$social_data['first_name'] = $firstname;
					$social_data['last_name'] = $lastname;
					$social_data['email'] = $email;
					$social_data['gender'] = 0;
					$social_data['username'] = $firstname;
					$obj = new NrtSocialLogin();

					$result = $obj->addUser($social_data, 'Yahoo');
					if ($result == 1)
					{
						$settings = Configuration::get('NRT_SOCIAL_LOGIN_CONFIG');
						$loginizer_data = unserialize($settings);
						if ($loginizer_data['show_popup'] == 1 && $desktop)
						{
							if (isset($loginizer_data['redirect_url']) && $loginizer_data['redirect_url'] != '')
							{
								echo 	'<script type="text/javascript">
											window.opener.document.location.replace("'.$loginizer_data['redirect_url'].'");
											window.close();
										</script>';
							}else{
								echo 	'<script type="text/javascript">
											window.opener.location.reload(true);
											window.close();
										</script>';
							}
						}
						else
						{
							if (isset($loginizer_data['redirect_url']) && $loginizer_data['redirect_url'] != '')
							{
								if (!filter_var($loginizer_data['redirect_url'], FILTER_VALIDATE_URL) === false)
									Tools::redirect($loginizer_data['redirect_url']);
								else
									Tools::redirect('index.php');
							}
							else
								Tools::redirect('index.php');
						}
					}
					else
						Tools::redirect($this->context->link->getModuleLink('nrtsociallogin', 'error'));
				}
			}
		}
		else if (!empty($user_data))
		{
			$query = 'select email from '._DB_PREFIX_.'nrtsociallogin_mapping where unique_id="'.pSQL($user_data->query->results->profile->guid).'"';
			$result = Db::getInstance()->executeS($query);
			if (count($result) == 0)
				$flag = 1;
			if ($flag == 0)
			{
				$social_data = array();

				if (isset($user_data->query->results->profile->givenName) && !empty($user_data->query->results->profile->givenName))
					$firstname = $user_data->query->results->profile->givenName;
				else
					$firstname = $user_data->query->results->profile->nickname;
				if (isset($user_data->query->results->profile->familyName) && !empty($user_data->query->results->profile->familyName))
					$lastname = $user_data->query->results->profile->givenName;
				else
					$lastname = $user_data->query->results->profile->nickname;
				$social_data = array();
				$social_data['first_name'] = $firstname;
				$social_data['last_name'] = $lastname;
				$social_data['email'] = $result[0]['email'];
				$social_data['gender'] = 0;
				$social_data['username'] = $firstname;
				$uemail = $result[0]['email'];
				$obj = new NrtSocialLogin();
				$result = $obj->addUser($social_data, 'Yahoo');
				if ($result == 1)
				{
					$settings = Configuration::get('NRT_SOCIAL_LOGIN_CONFIG');
					$loginizer_data = unserialize($settings);
					if ($loginizer_data['show_popup'] == 1 && $desktop)
					{
						if (isset($loginizer_data['redirect_url']) && $loginizer_data['redirect_url'] != '')
						{
							echo 	'<script type="text/javascript">
										window.opener.document.location.replace("'.$loginizer_data['redirect_url'].'");
										window.close();
									</script>';
						}else{
							echo 	'<script type="text/javascript">
										window.opener.location.reload(true);
										window.close();
									</script>';
						}
					}
					else
					{
						if (isset($loginizer_data['redirect_url']) && $loginizer_data['redirect_url'] != '')
						{
							if (!filter_var($loginizer_data['redirect_url'], FILTER_VALIDATE_URL) === false)
								Tools::redirect($loginizer_data['redirect_url']);
							else
								Tools::redirect('index.php');
						}
						else
							Tools::redirect('index.php');
					}
				}
				else
					Tools::redirect($this->context->link->getModuleLink('nrtsociallogin', 'error'));
			}
			else
			{
				if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
				$custom_ssl_var = 1;
				if ((bool)Configuration::get('PS_SSL_ENABLED') && $custom_ssl_var == 1)
					$module_dir = _PS_BASE_URL_SSL_.__PS_BASE_URI__.str_replace(_PS_ROOT_DIR_.'/', '', _PS_MODULE_DIR_);
				else
					$module_dir = _PS_BASE_URL_.__PS_BASE_URI__.str_replace(_PS_ROOT_DIR_.'/', '', _PS_MODULE_DIR_);
				$this->context->smarty->assign('modulepath', $module_dir);
				$this->setTemplate('module:nrtsociallogin/views/templates/front/yahoo-email.tpl');
			}
		}
	}
	public function yahooLogin()
	{
		$settings = Configuration::get('NRT_SOCIAL_LOGIN_CONFIG');
		$loginizer_data = unserialize($settings);
		$user = '';

		$client = new oauth_client_class;
		$client->debug = false;
		$client->debug_http = true;
		$client->server = 'Yahoo';
		$client->redirect_uri = $this->context->link->getModuleLink('nrtsociallogin', 'ylogin');

		$lang_str = '&id_lang='.$this->context->language->id;
		$client->redirect_uri = str_replace($lang_str, '', $client->redirect_uri);

		$lang_str = '/'.$this->context->language->iso_code.'/';
		$client->redirect_uri = str_replace($lang_str, '/', $client->redirect_uri);

		$client->client_id = $loginizer_data['yahoo']['consumer_key'];
		$client->client_secret = $loginizer_data['yahoo']['consumer_secret'];

		if (Tools::strlen($client->client_id) == 0 || Tools::strlen($client->client_secret) == 0)
				Tools::redirect($this->context->link->getModuleLink('nrtsociallogin', 'credentials'));

		if (($success = $client->Initialize()))
		{
			if (($success = $client->Process()))
			{
				if (Tools::strlen($client->access_token))
				{
					$success = $client->CallAPI(
						'https://query.yahooapis.com/v1/yql',
						'GET', array(
							'q'=>'select * from social.profile where guid=me',
							'format'=>'json'
							), array('FailOnAccessError'=>true), $user);
					return $user;
				}
			}
			$success = $client->Finalize($success);
		}
		if ($client->exit)
			exit;
		if (Tools::strlen($client->authorization_error))
		{
			$client->error = $client->authorization_error;
			$success = false;
		}
	}
}
?>
