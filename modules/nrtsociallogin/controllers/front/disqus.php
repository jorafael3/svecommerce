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

class NrtSocialLoginDisqusModuleFrontController extends ModuleFrontController
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

		if ($platform == 'disqus')
			$user_data = $this->disqusLogin();

		if (empty($user_data))
			$user_data = $this->disqusLogin();

		if (count((array)$user_data) > 0)
		{
			$social_data = array();
			$social_data['first_name'] = $user_data->response->name;
			$social_data['last_name'] = $user_data->response->name;
			$social_data['email'] = $user_data->response->email;
			$social_data['gender'] = 0;
			$social_data['username'] = $user_data->response->username;
			$obj = new NrtSocialLogin();

			$result = $obj->addUser($social_data, 'Disqus');
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

	public function disqusLogin()
	{
		$settings = Configuration::get('NRT_SOCIAL_LOGIN_CONFIG');
		$loginizer_data = unserialize($settings);
		$user = '';
		$client = new oauth_client_class;
		$client->server = 'Disqus';

		$client->offline = true;

		$client->debug = false;
		$client->debug_http = true;
		$client->redirect_uri = $this->context->link->getModuleLink('nrtsociallogin', 'disqus');

		$lang_str = '&id_lang='.$this->context->language->id;
		$client->redirect_uri = str_replace($lang_str, '', $client->redirect_uri);

		$lang_str = '/'.$this->context->language->iso_code.'/';
		$client->redirect_uri = str_replace($lang_str, '/', $client->redirect_uri);

		$client->client_id = $loginizer_data['disqus']['client_id'];
		$client->client_secret = $loginizer_data['disqus']['client_secret'];

		if (Tools::strlen($client->client_id) == 0 || Tools::strlen($client->client_secret) == 0)
				Tools::redirect($this->context->link->getModuleLink('nrtsociallogin', 'credentials'));

		/* API permissions
		*/
		$client->scope = 'read,write,email';
		if (($success = $client->Initialize()))
		{
			if (($success = $client->Process()))
			{
				if (Tools::strlen($client->authorization_error))
				{
					$client->error = $client->authorization_error;
					$success = false;
				}
				elseif (Tools::strlen($client->access_token))
				{
					$success = $client->CallAPI(
						'https://disqus.com/api/3.0/users/details.json?api_key='.UrlEncode($client->client_id),
						'GET', array(), array('FailOnAccessError' => true), $user);
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
