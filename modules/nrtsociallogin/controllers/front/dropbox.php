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

class NrtSocialLoginDropboxModuleFrontController extends ModuleFrontController {

	public function initContent()
	{
		parent::initContent();
		
		$desktop = 0;
		
		if(isset($_COOKIE['cookieSw']) && (int)$_COOKIE['cookieSw'] > 1199){
			$desktop = 1;
		}

		$platform = Tools::getValue('type');
		if ($platform == 'dropbox')
			$user_data = $this->dropboxLogin();

		if (empty($user_data))
			$user_data = $this->dropboxLogin();

		if (count((array)$user_data) > 0)
		{
			$social_data = array();
			$social_data['first_name'] = $user_data->name_details->familiar_name;
			$social_data['last_name'] = $user_data->name_details->surname;
			$social_data['email'] = $user_data->email;
			$social_data['gender'] = 0;
			$social_data['username'] = $user_data->display_name;

			$obj = new NrtSocialLogin();

			$result = $obj->addUser($social_data, 'Dropbox');
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
			echo '<script>window.close();</script>';
	}

	public function dropboxLogin()
	{
		$settings = Configuration::get('NRT_SOCIAL_LOGIN_CONFIG');
		$loginizer_data = unserialize($settings);
		$user = '';

		$client = new oauth_client_class;
		$client->server = 'Dropbox2';

		$client->debug = false;
		$client->debug_http = true;
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
			$custom_ssl_var = 1;

		if ((bool)Configuration::get('PS_SSL_ENABLED') && $custom_ssl_var == 1)
			$client->redirect_uri = $this->context->link->getModuleLink('nrtsociallogin', 'dropbox', array(), true);
		else
			$client->redirect_uri = $this->context->link->getModuleLink('nrtsociallogin', 'dropbox');

		$lang_str = '&id_lang='.$this->context->language->id;
		$client->redirect_uri = str_replace($lang_str, '', $client->redirect_uri);

		$lang_str = '/'.$this->context->language->iso_code.'/';
		$client->redirect_uri = str_replace($lang_str, '/', $client->redirect_uri);
		$client->client_id = $loginizer_data['dropbox']['client_id'];
		$client->client_secret = $loginizer_data['dropbox']['client_secret'];

		if (Tools::strlen($client->client_id) == 0 || Tools::strlen($client->client_secret) == 0)
			Tools::redirect($this->context->link->getModuleLink('nrtsociallogin', 'credentials'));

		/* API permissions
		 */
		$client->scope = '';
		if (($success = $client->Initialize()))
		{
			if (($success = $client->Process()))
			{
				if (Tools::strlen($client->access_token))
				{
					$success = $client->CallAPI(
					'https://api.dropbox.com/1/account/info', 'GET', array(), array('FailOnAccessError' => true), $user);
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
