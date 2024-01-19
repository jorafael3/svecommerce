{if $notifications}
  <script type="text/javascript">
    $('.ajax-elementor-contact-xxx .send-response').html('<div class="alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}"><ul>{foreach $notifications.messages as $notif}<li>{$notif|escape:'htmlall':'UTF-8'}</li>{/foreach}</ul></div>');
  </script>
{/if}

{if $token}
  <script type="text/javascript">
    $('.ajax-elementor-contact-xxx [name=token]').val('{$token|escape:'htmlall':'UTF-8'}');
  </script>
{/if}

{if $email}
  <script type="text/javascript">
    $('.ajax-elementor-contact-xxx [name=from]').val('{$email|escape:'htmlall':'UTF-8'}');
  </script>
{/if}

{if $message}
  <script type="text/javascript">
    $('.ajax-elementor-contact-xxx [name=message]').val('{$message|escape:'htmlall':'UTF-8'}');
  </script>
{/if}