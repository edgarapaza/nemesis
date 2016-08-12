
<?php include "header.php";
header("Refresh: 30; URL='newsolicitud.php'");
require_once "../Controllers/EncontradosController.php";

$fecha = '2016-02-11';
$data = SolicitudesDia($fecha);
echo $fecha."<br>";
?>
<script type="text/javascript">
	function agregar(id){

		var doc = document.getElementById(id).value;

		document.getElementById("numEscrituraModal").value = doc;
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
							<input type="text" name="numsolicitud" id="numsol<?php echo $i;?>" value="<?php echo $fila['codSol']; ?>">
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
			        <form>
			           <div class="form-group">
			            <label for="recipient-name" class="control-label">Num Solicitud:</label>
			            <input type="text" id="numEscrituraModal" >
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Num Escritura:</label>
			            <input type="text" id="escritura" >
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Protocolo:</label>
			            <input type="text" id="recipient-name">
			          </div>

			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Folio Inicial:</label>
			            <input type="text" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Folio Final:</label>
			            <input type="text" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Registro:</label>
			            <input type="text" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Caja:</label>
			            <input type="text" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Tomo:</label>
			            <input type="text" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Libro:</label>
			            <input type="text" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="control-label">Legajo:</label>
			            <input type="text" id="recipient-name">
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

			<div class="modal fade" id="noexiste" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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