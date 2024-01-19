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
<div class="alert alert-info">
    <h4>{l s='The next block is for advance use. Please refer to documentation for detailed explanations.' mod='fabfacebookpixel'}</h4>
    <p>{l s='In some circumstances you may need to create the catalog csv file by steps (incremental catalog storage), for example:' mod='fabfacebookpixel'}</p>
    <ul>
        <li>{l s='Catalog is huge and storage process exceeds timeout or memory limit.' mod='fabfacebookpixel'}</li>
        <li>{l s='You may want to use the cronjob module, avoiding slow response when catalog is huge.' mod='fabfacebookpixel'}</li>
    </ul>
    <p>&nbsp;</p>
    <p>{l s='For each request to the storage URL (see previous block) a chunk of products is stored in the a temporary file.' mod='fabfacebookpixel'}</p>
    <p><strong>{l s='When the temporary file is completed with the entire product set, the csv file is created.' mod='fabfacebookpixel'}</strong></p>
</div>