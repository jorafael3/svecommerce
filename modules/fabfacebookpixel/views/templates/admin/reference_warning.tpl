{*
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi.petruso@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}
{if $useReference}
<div id="reference_warning_alert" class="alert alert-warning clearfix" role="alert">
  {l s='Since version 2.5.3 the feature "use reference as id" was removed.' mod='fabfacebookpixel'}
  {l s='If you used to export the catalog using product\'s reference please consider to export it again and substitute to the previous one.' mod='fabfacebookpixel'}</p>
  <button id="reference_warning" type="button" class="btn btn-tertiary-outline pull-right" data-token="{$token|escape:'htmlall':'UTF-8'}">{l s='Discard this message' mod='fabfacebookpixel'}</button>
</div>
{/if}