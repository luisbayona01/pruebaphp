<?php 
require_once('../autoload.php');
use Modelo\Modelo;
$modelo= new Modelo();
$datauser=$modelo->goodsU();

if(isset($_POST['Idgoods'])){
$datos= $modelo->editGoods();

//print_r($datos);
}

//Array ( [idGoods] => 3 [Name] => casa [Description] => casa de dos pisos [Value] => 30000 [Idusers] => 4 )
?>



<link rel="stylesheet" type="text/css" href="../css/main.css">

 <div class="container">
                   <form id="register-form"  role="form" >
									<input type="hidden" name="idGoods" id="idGoods" value="<?php if(isset($_POST['Idgoods'])){
											echo $_POST['Idgoods'];
										}?>">
									<div class="form-group">

										<input type="text" name="Name" id="Name" tabindex="1" class="form-control" placeholder="Name" value="<?php if(isset($datos['Name'])){
											echo $datos['Name'];
										}?>">
									</div>
									<div class="form-group">
										<textarea id="Description" rows = "5" cols = "50" class="form-control" placeholder="Descripcion .........">
										<?php if(isset($datos['Description'])){
											echo $datos['Description'];
										}   ?>
										</textarea>
									</div>
									<div class="form-group">
										<input type="text" name="Value" id="Value" tabindex="2" class="form-control" placeholder="Value" value="<?php if(isset($datos['Value'])){
											echo $datos['Value'];
										}?>">
									</div>
									<div class="form-group">
									<select id="Usuarios" class="form-control" name="Usuarios">
									<option value="">Seleccione  un usuario</option>
									<?php  foreach ($datauser as  $value) {
									
									if(isset($datos['Idusers'])){
                                     
									if($value['IdUsers']==$datos['IdUsers']){
									?>

									<option value="<?php  echo $value['IdUsers'] ?>"selected><?php  echo $value['Nombre'] ?> </option>
								<?php }}?>
									
									<option value="<?php  echo $value['IdUsers'] ?>"selected><?php  echo $value['Nombre'] ?> </option>
								<?php }?>

									</select>	

									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="button" name="register-submit" id="update-submit " onclick="updateGoods()" tabindex="4" class="form-control btn btn-register" value="Guardar">
											</div>
										</div>
									</div>
								</form>
</div>