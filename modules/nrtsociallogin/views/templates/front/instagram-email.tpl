<div id="content" style="margin:40px;">
		<div style='padding: 10px;color: rgb(166, 124, 95);text-align: center;font-size: 20px;'>
                        {l s='Signup or login with Instagram' mod='nrtsociallogin'}
                </div>
    <section  style='text-align:-moz-center;'>
        <form method="post" name="loginizer_emailform" id="form" style ="padding: 10px;border: 1px solid #ccc;
              margin-top: 20px;border-radius: 6px;box-shadow: 0px 3px 8px 0px rgba(0,0,0,0.4);font-family: Helvetica,Arial,sans-serif;width: 350px; display:block !important;">
            
            <div style="padding: 15px;border-radius: 4px;box-sizing: border-box;color: #AC8163;text-align: justify;margin-bottom: 20px;/* font-weight: 400; */line-height: 1.4;background-image: linear-gradient(rgba(0,0,0,0),rgba(0, 0, 0, 0.05));font-size: 14px;">
                    {l s='Enter your Instagram Email id in order to proceed...' mod='nrtsociallogin'}
            </div>
		<div style="float:left;width:100%;">
                       <span style="color:red;margin-bottom: ">{if isset($errormsg)}{$errormsg|escape:'htmlall':'UTF-8'}{/if}</span>
                <input id="email" type='email' value='' required='required' name='login_email' placeholder='email@example.com' style='width:100%;background: none repeat scroll 0 0 #FFFFFF;border: 1px solid #CCCCCC; border-radius: 4px; margin-left: 0; margin-right: 0; padding: 0px; line-height:	2.5'/>
		<input type='submit' value='{l s='Proceed' mod='nrtsociallogin'}' class='btn btndefault' name='snslogin_email' style='cursor: pointer;width: 100%;color: white;font-size: 17px;background-color: #AC8163;margin-top: 5px;border-radius: 3px;border: 1px solid #816451;background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.05));'/>
		</div><div style="clear: both"></div><div style=' padding: 0px; text-align: center;position: relative;top: 10px;'><img src="{$modulepath|escape:'htmlall':'UTF-8'}nrtsociallogin/views/img/instagram-icon.png"></div></div> </form>
    </section>
</div>
