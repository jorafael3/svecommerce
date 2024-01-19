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

class NrtSocialLoginInstagramModuleFrontController extends ModuleFrontController
{

	public function initContent()
	{
		parent::initContent();
		
		$desktop = 0;
		
		if(isset($_COOKIE['cookieSw']) && (int)$_COOKIE['cookieSw'] > 1199){
			$desktop = 1;
		}

		$flag = 0;
		$platform = Tools::getValue('type');
		$platform = trim($platform);
		if ($platform == 'insta')
			$user_data = $this->instagramLogin();
		if (Tools::isSubmit('code'))
			$user_data = $this->instagramLogin();
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
				$this->setTemplate('module:nrtsociallogin/views/templates/front/instagram-email.tpl');
			}
			else
			{
				$user_data = $this->instagramLogin();
				if (!empty($user_data))
				{
					$unique_id = $user_data->data->id;
					$sql = 'insert into '._DB_PREFIX_.'nrtsociallogin_mapping (email,unique_id) values ("'.pSQL($email).'","'.pSQL($unique_id).'")';
					Db::getInstance()->execute($sql);
					$name = explode(' ', $user_data->data->full_name);
					$lastname = '';
					$name_size = count($name);
					if (count($name) > 1)
					{
						for ($namelength = 1; $namelength < $name_size; $namelength++)
						{
							if ($lastname == '')
								$lastname = $name[$namelength];
							else
								$lastname = $lastname.' '.$name[$namelength];
						}
					}
					$social_data = array();
					$social_data['first_name'] = $name[0];
					if ($lastname == '')
						$lastname = $name[0];
					$social_data['last_name'] = $lastname;
					$social_data['email'] = $email;
					$social_data['gender'] = 0;
					$social_data['username'] = $user_data->data->username;
					$obj = new NrtSocialLogin();
					$result = $obj->addUser($social_data, 'Instagram');
					if ($result == 1)
					{
						$settings = Configuration::get('NRT_SOCIAL_LOGIN_CONFIG');
						$loginizer_data = unserialize($settings);
						if ($loginizer_data['show_popup'] == 1 && $desktop)
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
		else if (!empty($user_data))
		{
			$query = 'select email from '._DB_PREFIX_.'nrtsociallogin_mapping where unique_id="'.pSQL($user_data->data->id).'"';
			$result = Db::getInstance()->executeS($query);
			if (count($result) == 0)
				$flag = 1;
			if ($flag == 0)
			{
				$name = explode(' ', $user_data->data->full_name);
				$lastname = '';
				$name_size = count($name);
				if (count($name) > 1)
				{
					for ($namelength = 1; $namelength < $name_size; $namelength++)
					{
						if ($lastname == '')
							$lastname = $name[$namelength];
						else
							$lastname = $lastname.' '.$name[$namelength];
					}
				}
				$social_data = array();
				$social_data['first_name'] = $name[0];
				if ($lastname == '')
						$lastname = $name[0];
				$social_data['last_name'] = $lastname;
				$social_data['email'] = $result[0]['email'];
				$social_data['gender'] = 0;
				$social_data['username'] = $user_data->data->username;
				$useremail = $result[0]['email'];
				$obj = new NrtSocialLogin();

				$result = $obj->addUser($social_data, 'Instagram');
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
				$this->setTemplate('module:nrtsociallogin/views/templates/front/instagram-email.tpl');
			}
		}
		else
			echo '<script>window.close();</script>';
	}

	public function instagramLogin()
	{
		$settings = Configuration::get('NRT_SOCIAL_LOGIN_CONFIG');
		$loginizer_data = unserialize($settings);
		$user = '';

		$client = new oauth_client_class;
		$client->debug = false;
		$client->debug_http = true;
		$client->server = 'Instagram';
		$client->redirect_uri = $this->context->link->getModuleLink('nrtsociallogin', 'instagram');

		$lang_str = '&id_lang='.$this->context->language->id;
		$client->redirect_uri = str_replace($lang_str, '', $client->redirect_uri);

		$lang_str = '/'.$this->context->language->iso_code.'/';
		$client->redirect_uri = str_replace($lang_str, '/', $client->redirect_uri);

		$client->client_id = $loginizer_data['insta']['client_id'];
		$client->client_secret = $loginizer_data['insta']['client_secret'];

		if (Tools::strlen($client->client_id) == 0 || Tools::strlen($client->client_secret) == 0)
				Tools::redirect($this->context->link->getModuleLink('nrtsociallogin', 'credentials'));

		/* API permissions
		*/
		$client->scope = 'basic';
		if (($success = $client->Initialize()))
		{
			if (($success = $client->Process()))
			{
				if (Tools::strlen($client->access_token))
				{
					$success = $client->CallAPI('https://api.instagram.com/v1/users/self/', 'GET', array(), array('FailOnAccessError'=>true), $user);
					return $user;
				}
			}
			$success = $client->Finalize($success);
		}
		if ($client->exit)
			exit;
	}
}
?>
