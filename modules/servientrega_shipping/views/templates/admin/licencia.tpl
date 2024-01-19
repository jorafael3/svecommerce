<div class="panel">
	<h3><i class="icon icon-truck"></i> {l s='servientrega_shipping' mod='servientrega_shipping'}</h3>
	<img src="{$module_dir|escape:'html':'UTF-8'}/logo.png" id="payment-logo" class="pull-right" />
	
	<br />
	<p>	
		{l s='Antes de pasar a la configuración de su modulo necesitas ingresar la licencia' mod='servientrega_shipping'}
	</p>
</div>

<div class="panel">
	<form action="" method="post">
	  <div class="form-group row">
	    <label class="col-sm-3 col-form-label" for="textLicencia">Ingrese la Licencia</label>
	     
	    <div class="col-sm-4">
	      <input type="text" value="" class="form-control" id="textLicencia" name="textLicencia" required>
	    </div> 
	  </div>

	  <button type="submit" name="btnGuardarLicencia" class="btn btn-primary">Guardar</button>
	</form>
</div>