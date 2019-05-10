<?php 
//print_r($_POST);
require_once('../autoload.php');
use Modelo\Modelo;
$modeloU=new Modelo();
if(isset($_POST['Iduser'])){
$datos=$modeloU->editUser();
}

/*Array ( [IdUsers] => 1 [Nombre] => luis bayona [Email] => astaroth1988bayona3@gmail.com [Password] => 1024482240 [Cedula] => 1024482240 [Telefono] => 3127332852 [Direccion] => calle12 )*/
?>


<link rel="stylesheet" type="text/css" href="../css/main.css">

 <div class="container">
                   <form id="register-form"  role="form" >
									<input type="hidden" name="IdUsers" id="IdUsers" value="<?php if(isset($_POST['Iduser'])){
											echo $_POST['Iduser'];
										}?>">
									<div class="form-group">

										<input type="text" name="Nombres" id="Nombres" tabindex="1" class="form-control" placeholder="Nombres" value="<?php if(isset($datos['Nombre'])){
											echo $datos['Nombre'];
										}?>">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="<?php if(isset($datos['Email'])){
											echo $datos['Email'];
										}?>">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="Rpassword" tabindex="2" class="form-control" placeholder="Contraseña" value="<?php if(isset($datos['Password'])){
											echo $datos['Password'];
										}?>">
									</div>
									<div class="form-group">
										<input type="text" name="cedula" id="cedula" tabindex="2" class="form-control" placeholder="Cedula" value="<?php if(isset($datos['Cedula'])){
											echo $datos['Cedula'];
										}?>">
									</div>
									<div class="form-group">
										<input type="text" name="Telefono" id="Telefono" tabindex="2" class="form-control" placeholder="Telefono" value="<?php if(isset($datos['Telefono'])){
											echo $datos['Telefono'];
										}?>">
									</div>
									<div class="form-group">
									<input type="text" name="Direccion" id="Direccion" tabindex="2" class="form-control" placeholder="Direccion" value="<?php if(isset($datos['Direccion'])){
											echo $datos['Direccion'];
										}?>">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="button" name="register-submit" id="update-submit " onclick="updateUser()" tabindex="4" class="form-control btn btn-register" value="Guardar">
											</div>
										</div>
									</div>
								</form>
</div>