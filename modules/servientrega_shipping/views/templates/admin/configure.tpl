{*
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{* <div class="panel">
	
	<h3><i class="icon icon-truck"></i>  {l s='servientrega_shipping' mod='servientrega_shipping'} {if $activado} Licencia Verificada  {/if}</h3>
	<img src="{$module_dir|escape:'html':'UTF-8'}/logo.png" id="payment-logo" class="pull-right" />
	
	<br />
	<p>	
		{l s='Complete los datos para la configuración del modulo' mod='servientrega_shipping'}
	</p>
</div> *}

{* 
<div class="panel">
	<h3> PEDIDOS </h3>
	


	<div class="table-responsive pt-5">
		<h3 class="text-center ">Tabla de Registros</h3>
	  <table class="table">

	  	<thead>
		    <tr>
		      <th>Pedido</th>
		      <th>Fecha</th>
		      <th>Estado</th>
		      <th>Total</th>
		      <th>Rastreo de Envio</th>
		      <th>Generar Stikers Servientrega</th>
		    </tr>
		 </thead>
		 <tbody>
		 	

		      {foreach $pedidos as $value}


		 		<tr>
		 			<td>
		 				{l s=$value.pedido|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.fecha|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.estado|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.total|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.rastreoEnvio|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			

		 			<td>
				      	<button  type="button" class="btn btn-info" data-toggle="modal" >
							Generar Stikers
						</button>

				      </td>

		 		</tr>

		 	{/foreach}

		    </tr>
		 </tbody>
	   
	  </table>
	</div>


</div> *}




<div class="panel">
	<h3><i class="icon icon-cogs"></i>  SETTINGS</h3>

	{if $validarCredenciales == 1}
		<div class="bootstrap">
			<div class="my-5 alert module_confirmation conf confirm alert-success" >
			  
			  <button type="button" class="close" data-dismiss="alert" >
			    <span aria-hidden="true">&times;</span>
			  </button>
			  Credenciales correctas y guardadas
			</div>
		</div>
	{/if}

	{if $validarCredenciales == 0}
		<div class="bootstrap">
			<div class="my-5 alert module_confirmation conf confirm alert-danger" >
			  
			  <button type="button" class="close" data-dismiss="alert" >
			    <span aria-hidden="true">&times;</span>
			  </button>
			  Las Credenciales no son Correctas por favor verifique
			</div>
		</div>
	{/if}
	
	<form action="" method="post">
	  <div class="form-group row">
	    <label class="col-sm-3 col-form-label">Información Cuenta Servientrega:</label>
	     
	    <div class="col-sm-4">

	      	<div class="form-check">
			  <input class="form-check-input" type="radio" name="modoConfiguracion" id="exampleRadios1" value="0" {if $dataConfigCredenciales.0.modoConfiguracion == 0 }
			  checked {/if} />
			  <label class="form-check-label" for="exampleRadios1">
			    Pruebas
			  </label>
			  <input class="form-check-input" type="radio" name="modoConfiguracion" id="exampleRadios2" value="1" {if $dataConfigCredenciales.0.modoConfiguracion == 1 }
			  checked {/if} />
			  <label class="form-check-label" for="exampleRadios2">
			    Producción
			  </label>
			</div>

	    </div> 
	  </div>

	  <div class="form-group row">
	  	<label for="usuario" class="col-sm-2 col-form-label"><i class="icon icon-user"></i> Usuario:</label>

	    <div class="col-sm-4">
	      <input type="text" class="form-control" name="usuario" id="usuario" required {if $dataConfigCredenciales.0.usuario}
			  value="{l s=$dataConfigCredenciales.0.usuario|escape:'html':'UTF-8' mod='servientrega_shipping'}" {/if} />
	    </div>
	  </div>

	  <div class="form-group row">
	  	<label for="pass" class="col-sm-2 col-form-label"><i class="icon icon-key"></i> Contraseña:</label>

	    <div class="col-sm-4">
	      <input type="password" class="form-control" name="pass" id="pass" required 
	      {if $dataConfigCredenciales.0.pass}
			  value="{l s=$dataConfigCredenciales.0.pass|escape:'html':'UTF-8' mod='servientrega_shipping'}" {/if} />
	    </div>
	  </div>

	  <div class="form-group row">
	  	<label for="codigoFacturacion" class="col-sm-2 col-form-label"> Código Facturación</label>

	    <div class="col-sm-4">
	      <input type="text" class="form-control" name="codigoFacturacion" id="codigoFacturacion" required {if $dataConfigCredenciales.0.codigoFacturacion}
			  value="{l s=$dataConfigCredenciales.0.codigoFacturacion|escape:'html':'UTF-8' mod='servientrega_shipping'}" {/if} />
	    </div>
	  </div>

	  <div class="form-group row">
	  	<label for="nitClienteNit" class="col-sm-2 col-form-label">ID cliente o NIT</label>

	    <div class="col-sm-4">
	      <input type="number" class="form-control" name="nitClienteNit" id="nitClienteNit" required {if $dataConfigCredenciales.0.nitClienteNit}
			  value="{l s=$dataConfigCredenciales.0.nitClienteNit|escape:'html':'UTF-8' mod='servientrega_shipping'}" {/if} />
	    </div>
	  </div>

	  <div class="form-group row">
	  	<label for="cuidadRemitente" class="col-sm-2 col-form-label">Cuidad Remitente: </label>
	  	
	  	<div class="col-sm-4">
	  		<input type="text" class="form-control" name="cuidadRemitente" id="cuidadRemitente" required {if $dataConfigCredenciales.0.cuidadRemitente}
			  value="{l s=$dataConfigCredenciales.0.cuidadRemitente|escape:'html':'UTF-8' mod='servientrega_shipping'}" {/if} />
	    </div>

	  </div>

	  <div class="form-group row">
	  	<label for="formaPago" class="col-sm-2 col-form-label">Forma de Pago: </label>

	  	<div class="col-sm-4">
		    <select  class="form-control" id="formaPago" name="formaPago" required>
		      <option value="2">crédito</option>
		      <option value="4">COD Pago contra entrega</option>
		    </select>
		</div>
		    
	  </div>

	  <div class="form-group row">
	  	<label for="tipoProducto" class="col-sm-2 col-form-label">Tipo de Producto: </label>

	  	<div class="col-sm-4">
		    <select  class="form-control" id="tipoProducto" name="tipoProducto" required>
		      <option value="1">DOCUMENTO UNITARIO</option>
		      <option value="2">MERCANCIA PREMIER</option>
		      <option value="6">MERCANCIA INDUSTRIAL</option>
		      <option value="7">TULA DE SEGURIDAD</option>
		      <option value="8">VALIJA DE SEGURIDAD</option>
		      <option value="9">MERCANCIA VALORES</option>
		      <option value="11">ENTREGA PERSONALIZADA</option>
		    </select>
		</div>
		    
	  </div>

	  <div class="form-group row">
	    <label class="col-sm-3 col-form-label"> La cuenta logística de recuado:</label>
	     
	    <div class="col-sm-4">
	      	<div class="form-check">
			  <input class="form-check-input" type="radio" name="cuentaLogistica" id="cuentaLogistica1" value="1" {if $dataConfigCredenciales.0.cuentaLogistica == 1} checked {/if} />
			  <label class="form-check-label" for="cuentaLogistica1">
			    SI
			  </label>

			  <input class="form-check-input" type="radio" name="cuentaLogistica" id="cuentaLogistica2" value="0" {if $dataConfigCredenciales.0.cuentaLogistica == 0} checked {/if} />
			  <label class="form-check-label" for="cuentaLogistica2">
			    NO
			  </label>
			</div>

	    </div> 
	  </div>

	  <div class="form-group row">
	    <label class="col-sm-3 col-form-label">Generar guias cuando el envio es gratuito:</label>
	     
	    <div class="col-sm-4">
	      	<div class="form-check">

			  <input class="form-check-input" type="radio" name="guiaGratuitaEnvio" id="guiaGratuitaEnvio1" value="1" {if $dataConfigCredenciales.0.guiaGratuitaEnvio == 1 }
			  checked {/if} />
			  <label class="form-check-label" for="cuentaLogistica1">
			    SI
			  </label>

			  <input class="form-check-input" type="radio" name="guiaGratuitaEnvio" id="guiaGratuitaEnvio2" value="0" {if $dataConfigCredenciales.0.guiaGratuitaEnvio == 0 }
			  checked {/if} />
			  <label class="form-check-label" for="guiaGratuitaEnvio2">
			    NO
			  </label>
			</div>

	    </div> 
	  </div>

	  <div class="form-group text-center pt-3">
	  	<button type="submit" name="btnGuardarConfiguracion" class="btn btn-primary">Guardar</button>
	  </div>

	</form>

</div>


<div class="panel">
	<h3><i class="icon icon-dollar"></i> Liquidación y Valores de trayectos</h3>
	
	<form action="" method="post">
		<div class="row">
		    <div class="col-md-2">
		      
		      <h5>Liquidación kg</h5>
		      <input type="number" name="liquidacion1" class="form-control" value="{l s=$dataLiquidacion.0.liquidacion|escape:'html':'UTF-8' mod='servientrega_shipping'}"  /></br>
		      
		      <input type="number" name="liquidacion2" class="form-control" value="{l s=$dataLiquidacion.1.liquidacion|escape:'html':'UTF-8' mod='servientrega_shipping'}"  /><br>

		      <input type="text" name="liquidacion3" class="form-control" placeholder="Kilo Adicional" value="{l s=$dataLiquidacion.2.liquidacion|escape:'html':'UTF-8' mod='servientrega_shipping'}" />

		    </div>

		    <div class="col-md-2">
		    	<h5>Precio Trayecto Nacional <i class="icon icon-dollar"></i></h5>

		      <input type="text" class="form-control" name="PrecioNacional1" value="{l s=$dataLiquidacion.0.PrecioNacional|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>
		      
		      <input type="text" class="form-control" name="PrecioNacional2" value="{l s=$dataLiquidacion.1.PrecioNacional|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>

		      <input type="text" class="form-control" name="PrecioNacional3" value="{l s=$dataLiquidacion.2.PrecioNacional|escape:'html':'UTF-8' mod='servientrega_shipping'}" />

		    </div>

		    <div class="col-md-2">
		    	<h5>Precio Trayecto Zonal <i class="icon icon-dollar"></i></h5>

		      <input type="text" class="form-control" name="precioZonal1" value="{l s=$dataLiquidacion.0.precioZonal|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>
		      
		      <input type="text" class="form-control" name="precioZonal2" value="{l s=$dataLiquidacion.1.precioZonal|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>

		      <input type="text" class="form-control" name="precioZonal3" value="{l s=$dataLiquidacion.2.precioZonal|escape:'html':'UTF-8' mod='servientrega_shipping'}" />

		    </div>

		    <div class="col-md-3">

		      <h5>Precio Trayecto Urbano<i class="icon icon-dollar"></i></h5>

		      <input type="text" class="form-control" name="precioUrbano" value="{l s=$dataLiquidacion.0.precioUrbano|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>
		      
		      <input type="text" class="form-control" name="precioUrbano2" value="{l s=$dataLiquidacion.1.precioUrbano|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>

		      <input type="text" class="form-control" name="precioUrbano3" value="{l s=$dataLiquidacion.2.precioUrbano|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>

		    </div>

		    <div class="col-md-3">
		    	<h5>Precio Trayecto Especial <i class="icon icon-dollar"></i></h5>

		      <input type="text" class="form-control" name="precioEspecial" value="{l s=$dataLiquidacion.0.precioEspecial|escape:'html':'UTF-8' mod='servientrega_shipping'}" /></br>
		      
		      <input type="text" class="form-control" name="precioEspecial2" value="{l s=$dataLiquidacion.1.precioEspecial|escape:'html':'UTF-8' mod='servientrega_shipping'}" /><br>

		      <input type="text" class="form-control" name="precioEspecial3" value="{l s=$dataLiquidacion.2.precioEspecial|escape:'html':'UTF-8' mod='servientrega_shipping'}" />

		    </div>
		    
		</div>

		<div class="row">
			<div class="form-group text-center pt-3">
			  	<button type="submit" name="btnGuardarLiquidacionTrayecto" class="btn btn-primary">Guardar Cambios</button>
			</div>
		</div>

	</form>

</div>

<div class="panel">
	<h3><i class="icon icon-dollar"></i>  Envíos</h3>

	<form action="" method="post">

		<div class="form-group row">
	    	<label class="col-sm-3 col-form-label ">Costo de Envio:</label>

		    <div class="col-sm-4">

		      	<div class="form-check">
				  <input class="form-check-input" type="radio" name="costoEnvio" id="costoEnvio1" value="0" {if $dataEnvio.0.opcionCosto == '0'} checked {/if}  />
				  <label class="form-check-label" for="costoEnvio1">
				    GRATIS
				  </label><br>

				  <input class="form-check-input" type="radio" name="costoEnvio" id="costoEnvio2" value="1" {if $dataEnvio.0.opcionCosto == '1'} checked {/if} />
				  <!--este se calcula atravez de el peso y la ubicacion selecionada automatico por serviEntrega-->
				  <label class="form-check-label" for="costoEnvio2">
				    Costo calculados tarifa Servientega
				  </label><br>

				  <input class="form-check-input" type="radio" name="costoEnvio" id="costoEnvio3" value="2" {if $dataEnvio.0.opcionCosto == '2'} checked {/if}  />
				  <label class="form-check-label" for="costoEnvio3">
				    Costo Basado en un precio fijo
				  </label><br>

				  <input type="number" class="form-control" name="precioFijoManual" id="precioFijoManual"  {if $dataEnvio.0.opcionCosto != '2'} style="display:none;" {/if} value="{$dataEnvio.0.precioFijo}" />
				</div>

		    </div> 
	  </div>

	  <div class="form-group text-center pt-3">
		<button type="submit" name="btnGuardarCostoEnvios" id="btnGuardarCostoEnvios" class="btn btn-primary">Guardar Cambios</button>
	  </div>


	</form>

</div>

{* 
<div class="panel">
	<h3><i class="icon icon-calendar"></i>  Horarios</h3>

	<form action="" method="post">

		<div class="form-group row">
			<div class="col-sm-3">
				<label>Día:</label>
	    	</div>
	     
		    <div class="col-sm-2">
				<label>Hora Inicio:</label>
		    	 	
		    </div> 

		    <div class="col-sm-2">
				<label>Hora fin:</label>
		    </div>
		</div>

	  	<div class="form-group row">
     
		    <div class="col-sm-3">
		    	<select  class="form-control" id="dia" name="dia">
		    	  <option value="lunes">Lunes</option>
			      <option value="martes">Martes</option>
			      <option value="miercoles">Miercoles</option>
			      <option value="jueves">Jueves</option>
			      <option value="viernes">Viernes</option>
			      <option value="sabado">Sabado</option>
			      <option value="domingo">Domigno</option>
			    </select> 	
		    </div> 

		    <div class="col-sm-2">
		    	<input type="text" class="form-control" name="horaInicio" id="horaInicio">   	
		    </div> 

		    <div class="col-sm-2">
		    	<input type="text" class="form-control" name="horaFin" id="horaFin">	
		    </div>

	  	</div>

	  	<div class="form-group text-center pt-3">
			<button type="submit" name="btnGuardarHorarios" id="btnGuardarHorarios" class="btn btn-primary">Guardar Horario</button>
		</div>

	</form>

	<div class="table-responsive pt-5">
	  <table class="table">

	  	<thead>
		    <tr>
		      <th>Día</th>
		      <th>Hora Inicio</th>
		      <th>Hora Fin</th>
		      <th>Borrar</th>
		    </tr>
		 </thead>
		 <tbody>

		 	{foreach $dataHorarios as $value}

		 		<tr>
		 			<td>
		 				{l s=$value.dia|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.horaInicio|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.horaFin|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>

		 				<button onclick="pasarIdHorario('{l s=$value.id_vex_servientrega_shipping_horario|escape:'html':'UTF-8' mod='servientrega_shipping'}')" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHorarios">
						  Borrar
						</button>

		 			</td>

		 		</tr>

		 	{/foreach}

		 </tbody>
	   
	  </table>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="modalHorarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Eliminar Horario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <h4 class="text-center">Deseas Eliminar este horario?</h4>
	        <form class="text-center" action="" method="post">
	        	<input type="hidden" name="idHorario" id="idHorario" />

	        	<button type="submit" name="btnEliminarHorario" id="btnEliminarHorario" class="btn btn-success">SI</button>

	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> 
	      </div>
	    </div>
	  </div>
	</div>


</div> *}

<div class="panel">
	<h3><i class="icon icon-calendar"></i> Dias Feriados</h3>

	<form action="" method="post">
		<div class="form-group row">
	    	<label class="col-sm-3 col-form-label float-right">Día:</label>
	     
		    <div class="col-sm-2">
		    	<input type="date" class="form-control" name="fechaDiaFeriado" id="fechaDiaFeriado">   	
		    </div> 
	  	</div>

	  	<div class="form-group row">
	    	<label class="col-sm-3 col-form-label float-right">Descripción:</label>
	     
		    <div class="col-sm-5">
		    	<textarea id="descripcion" name="descripcion" placeholder="Ingresa la descripción del día Feriado" class="form-control"></textarea> 
		    </div> 
	  	</div>

	  	<div class="form-group text-center pt-3">
			<button type="submit" name="btnGuardarDiasFeriados" id="btnGuardarDiasFeriados" class="btn btn-primary">Guardar Feriado</button>
		</div>

	</form>

	<div class="table-responsive pt-5">
	  <table class="table">

	  	<thead>
		    <tr>
		      <th>Fecha</th>
		      <th>Descripción</th>
		      <th>Borrar</th>
		    </tr>
		 </thead>
		 <tbody>

		 	{foreach $dataferiados as $value}

		 		<tr>
		 			<td>
		 				{l s=$value.fechaDiaFeriado|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.descripcion|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>

		 			<td>

		 				<button onclick="pasarIdFeriado('{l s=$value.id_vex_servientrega_shipping_diasFeriados|escape:'html':'UTF-8' mod='servientrega_shipping'}')" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
						  Borrar
						</button>

		 			</td>

		 		</tr>

		 	{/foreach}

		 </tbody>
	   
	  </table>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Eliminar Fecha</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <h4 class="text-center">Deseas Eliminar esta fecha?</h4>
	        <form class="text-center" action="" method="post">
	        	<input type="hidden" name="idFecha" id="idFecha" />

	        	<button type="submit" name="btnEliminarFechaFeriado" id="btnEliminarFechaFeriado" class="btn btn-success">Borrar</button>

	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        
	      </div>
	    </div>
	  </div>
	</div>

</div>



<div class="panel">
	<h3> Almacenes de Recogida</h3>
	<form action="" method="post">
		<div class="form-group row">
			<label class="col-sm-3 col-form-label float-right">Ciudad:</label>
	     
		    <div class="col-sm-5">
		    	<input type="text" class="form-control" name="almacenesCudiad" id="almacenesCudiad"> 
		    </div> 
		</div>

		<div class="form-group row">
			<label class="col-sm-3 col-form-label float-right">Dirección 1:</label>
	     
		    <div class="col-sm-5">
		    	<input type="text" class="form-control" name="almacenesDireccion1" id="almacenesDireccion1"> 
		    </div> 
		</div>

		<div class="form-group row">
			<label class="col-sm-3 col-form-label float-right">Dirección 2:</label>
	     
		    <div class="col-sm-5">
		    	<input type="text" class="form-control" name="almacenesDireccion2" id="almacenesDireccion2"> 
		    </div> 
		</div>

		<div class="form-group row">
			<label class="col-sm-3 col-form-label float-right">Referencia del Comercio:</label>
	     
		    <div class="col-sm-5">
		    	<input type="text" class="form-control" name="almacenesRefeComercio" id="almacenesRefeComercio"> 
		    </div> 
		</div>

		<div class="form-group row">
			<label class="col-sm-3 col-form-label float-right">Nombre del Contacto:</label>
	     
		    <div class="col-sm-5">
		    	<input type="text" class="form-control" name="almacenesNombreContacto" id="almacenesNombreContacto"> 
		    </div> 
		</div>

		<div class="form-group row">
			<label class="col-sm-3 col-form-label float-right">Teléfono del Contacto:</label>
	     
		    <div class="col-sm-5">
		    	<input type="number" class="form-control" name="almacenesTlfContacto" id="almacenesTlfContacto"> 
		    </div> 
		</div>

		<div class="form-group float-right pt-3">
			<button type="submit" name="btnGuardarAlmacen" id="btnGuardarAlmacen" class="btn btn-primary">Guardar Almacen</button>
		</div>

	</form>


	<div class="table-responsive pt-5">
		<h3 class="text-center ">Almacenes Registrados</h3>
	  <table class="table">

	  	<thead>
		    <tr>
		      <th>Ciudad</th>
		      <th>Dirección 1</th>
		      <th>Dirección 2</th>
		      <th>Referencia del Comercio</th>
		      <th>Nombre del Contacto</th>
		      <th>Teléfono del Contacto</th>
		      <th>Editar</th>
		      <th>Borrar</th>
		    </tr>
		 </thead>
		 <tbody>
		 	<tr>
		      <td>Bogotá</th>
		      <td>Dirección 1</td>
		      <td>Dirección 2</td>
		      <td>Referencia del Comercio</td>
		      <td>José yabiku</td>
		      <td>300 1234567</td>

		      <td>
		      	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#almacenModalEditar">
					Editar
				</button>

		      </td>


		      <td>
		      	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#almacenModal">
				  Borrar
				</button>

		      </td>

		      {foreach $dataAlmacenes as $value}

		      	{capture assign=datos}{$value.id_vex_servientrega_shipping_almacenes}||{$value.almacenesCudiad}||{$value.almacenesDireccion1}||{$value.almacenesDireccion2}||{$value.almacenesRefeComercio}||{$value.almacenesNombreContacto}||{$value.almacenesTlfContacto}{/capture} 

		 		<tr>
		 			<td>
		 				{l s=$value.almacenesCudiad|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.almacenesDireccion1|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.almacenesDireccion2|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.almacenesRefeComercio|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.almacenesNombreContacto|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>
		 			<td>
		 				{l s=$value.almacenesTlfContacto|escape:'html':'UTF-8' mod='servientrega_shipping'}
		 			</td>

		 			<td>
				      	<button onclick="pasarDataAlmacen('{l s=$datos|escape:'html':'UTF-8' mod='servientrega_shipping'}')"  type="button" class="btn btn-info" data-toggle="modal" data-target="#almacenModalEditar">
							Editar
						</button>

				      </td>


				      <td>
				      	<button onclick="pasarIdAlmacen('{l s=$value.id_vex_servientrega_shipping_almacenes|escape:'html':'UTF-8' mod='servientrega_shipping'}')" type="button" class="btn btn-danger" data-toggle="modal" data-target="#almacenModal">
						  Borrar
						</button>

				      </td>

		 		</tr>

		 	{/foreach}

		    </tr>
		 </tbody>
	   
	  </table>
	</div>


	<!-- Modal elminar almacen -->
	<div class="modal fade" id="almacenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Eliminar Almacen</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <h4 class="text-center">Deseas Eliminar este Almacen?</h4>
	        <form class="text-center" action="" method="post">
	        	<input type="hidden" name="idAlmacen" id="idAlmacen" />

	        	<button type="submit" name="btnEliminarAlmacen" id="btnEliminarAlmacen" class="btn btn-success">Borrar</button>

	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        
	      </div>
	    </div>
	  </div>
	</div>



	<!-- Modal Editar almacen -->
	<div class="modal fade" id="almacenModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Editar Almacen</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <!--<h4 class="text-center">Deseas Eliminar este Almacen?</h4>-->


	        <form action="" method="post">

	        	<input type="hidden" name="idAlmacenEdit" id="idAlmacenEdit" />

				<div class="form-group row">
					<label class="col-sm-3 col-form-label float-right">Ciudad:</label>
			     
				    <div class="col-sm-5">
				    	<input type="text" class="form-control" name="almacenesCudiadEdit" id="almacenesCudiadEdit"> 
				    </div> 
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label float-right">Dirección 1:</label>
			     
				    <div class="col-sm-5">
				    	<input type="text" class="form-control" name="almacenesDireccion1Edit" id="almacenesDireccion1Edit"> 
				    </div> 
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label float-right">Dirección 2:</label>
			     
				    <div class="col-sm-5">
				    	<input type="text" class="form-control" name="almacenesDireccion2Edit" id="almacenesDireccion2Edit"> 
				    </div> 
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label float-right">Referencia del Comercio:</label>
			     
				    <div class="col-sm-5">
				    	<input type="text" class="form-control" name="almacenesRefeComercioEdit" id="almacenesRefeComercioEdit"> 
				    </div> 
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label float-right">Nombre del Contacto:</label>
			     
				    <div class="col-sm-5">
				    	<input type="text" class="form-control" name="almacenesNombreContactoEdit" id="almacenesNombreContactoEdit"> 
				    </div> 
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label float-right">Teléfono del Contacto:</label>
			     
				    <div class="col-sm-5">
				    	<input type="number" class="form-control" name="almacenesTlfContactoEdit" id="almacenesTlfContactoEdit" /> 
				    </div> 
				</div>

				<div class="form-group float-right pt-3">
					<button type="submit" name="btnActualizarAlmacen" id="btnActualizarAlmacen" class="btn btn-primary">Actualizar</button>
				</div>

			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        
	      </div>
	    </div>
	  </div>
	</div>



</div>



<script type="text/javascript">
	$("#costoEnvio1").click(function(){
		document.getElementById('precioFijoManual').style.display = "none";
	});
	$("#costoEnvio2").click(function(){
		document.getElementById('precioFijoManual').style.display = "none";
	});
	$("#costoEnvio3").click(function(){
		document.getElementById('precioFijoManual').style.display = "";
	});


	$(document).ready(function(){
	    $('#horaInicio').timepicker({});
	    $('#horaFin').timepicker({});

	});



	//js para seccion de horarios

		function pasarIdHorario(idHorario){
			$("#idHorario").val(idHorario);
		}
	//###########################

	//js para seccion de feriados
		function pasarIdFeriado(idFeriado){
			$("#idFecha").val(idFeriado);
		}
	//###########################

	//js para seccion de almacenes
		function pasarIdAlmacen(idAlmacen){
			$("#idAlmacen").val(idAlmacen);
		}

		function pasarDataAlmacen(datos){
			almacen = datos.split('||');
			//console.log(almacen);

			$("#idAlmacenEdit").val(almacen[0]);
			$("#almacenesCudiadEdit").val(almacen[1]);
			$("#almacenesDireccion1Edit").val(almacen[2]);
			$("#almacenesDireccion2Edit").val(almacen[3]);
			$("#almacenesRefeComercioEdit").val(almacen[4]);
			$("#almacenesNombreContactoEdit").val(almacen[5]);
			$("#almacenesTlfContactoEdit").val(almacen[6]);
		}
	//############################

</script>



