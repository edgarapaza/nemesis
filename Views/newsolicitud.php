
<?php include "header.php";
#header("Refresh: 30; URL='newsolicitud.php'");
require_once "../Controllers/EncontradosController.php";

$fecha = '2016-02-11';

$encontrado = new Encontrados();
$data = $encontrado->SolicitudesDia($fecha);

?>
<script type="text/javascript">
	function agregar(id){

		var doc = document.getElementById(id).value;

		document.getElementById("num_solicitud").value = doc;
	}
</script>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Listado de solicitudes recientes</h2>
		</div>
		<div class="col-md-10">
			<h2>Listado de solicitudes</h2>
			<form>
				<input type="text" name="fecha" value="<?php echo $fecha; ?>">
				<table class="table">
					<tr>
						<td>Num Solicitud</td>
						<td>Usuario</td>
						<td>Busqueda</td>
						<td>No Existe</td>
						<td>Observacion</td>
					</tr>
					<?php
						$i=1;
						while ($fila = $data->fetch_assoc())
						{
							#echo $fila['idSol']." ";

					 ?>
					<tr>
						<td>
							<?php echo $fila['codSol']; ?>
							<input type="hidden" name="numsolicitud" id="numsol<?php echo $i;?>" value="<?php echo $fila['codSol']; ?>">
						</td>
						<td>
							<?php echo $fila['codUsu'];?>
						</td>
						<td>
							<?php echo $fila['codTipSol'];?>
						</td>
						<td>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#existe" data-whatever="@mdo" onclick="agregar(this.value='numsol<?php echo $i;?>')">
							Ingresar Encontrados</button></td>
						<td>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#noexiste" data-whatever="@fat">No Existe</button></td>
						<td>
							<textarea></textarea>
						</td>
					</tr>
					<?php $i++;}?>
				</table>
			</form>

			<div class="modal fade" id="existe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="exampleModalLabel">Datos Encontrados</h4>
			      </div>
			      <div class="modal-body">
			        <form action="../Controllers/EncontradosController.php">
			           <div class="form-group">
			            <label for="recipient-name" class="control-label">Num Solicitud:</label>
			            <input type="text" name="num_solicitud" id="num_solicitud" >
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Num Escritura:</label>
			            <input type="text" name="num_escritura" id="escritura" >
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Protocolo:</label>
			            <input type="text" name="num_protocolo" id="recipient-name">
			          </div>

			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Folio Inicial:</label>
			            <input type="text" name="ini_folio" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Folio Final:</label>
			            <input type="text" name="fin_folio" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Registro:</label>
			            <input type="text" name="num_registro" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Expediente:</label>
			            <input type="text" name="num_expediente" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Caja:</label>
			            <input type="text" name="num_caja" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Tomo:</label>
			            <input type="text" name="num_tomo" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Libro:</label>
			            <input type="text" name="num_libro" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Legajo:</label>
			            <input type="text" name="num_legajo" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Buscador:</label>
			            <input type="text" name="nom_buscador" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Observaciones:</label>
			            <input type="text" name="observaciones" id="recipient-name">
			          </div>

				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" name="btnGuardar" >Guardar</button>
				      </div>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="modal fade" id="noexiste" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
			        <h4 class="modal-title" id="exampleModalLabel">Datos Encontrados</h4>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Observacion:</label>
			            <textarea></textarea>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Guardar</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
		<div class="col-md-2">
			<h3>Opciones</h3>
		</div>
	</div>
</div>


<?php include_once "footer.php"; ?>