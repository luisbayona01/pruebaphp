<?php 
namespace Modelo;
use Main\Main;

  session_start();
 class Modelo extends Main
{ 
 public  function RegistrarUser(){
 	
 $Nombres=$_POST['Nombres'];  
 $password=$_POST['password'];   
 $Cedula=$_POST['Cedula']; 
 $Telefono= $_POST['Telefono'];  
 $Direccion=$_POST['Direccion'];   
 $email=$_POST['email']; 
$sql="INSERT INTO users (Nombre,Email,Password,Cedula,Telefono,Direccion) VALUES ('".$Nombres."','".$email."','".$password."','".$Cedula."','".$Telefono."','".$Direccion."')";
//echo $sql;
 


$query=$this->abredatabase($sql);
if ($query) {
echo "operacion exitosa";	

} else {
echo "Fallo el registro del usuario";
}

 
}
 
  public  function LoginUser(){

 $username=$_POST['username'];
 $password=$_POST['password'];	

$sql_login="select IdUsers,Nombre  from users where Email='".$username."'  and  Password='".$password."'";
$query_login=$this->abredatabase($sql_login);
$login= $this->numerodefilas($query_login);
if ($login!=0) {
$rows=$this->dregistro($query_login);
 $_SESSION['Idusser'] = $rows['IdUsers'];
 $_SESSION['Nombre'] = $rows['Nombre'];
$valor=1;	

} else {
$valor=0;	
}


return $valor;

}
public  function Listargoods(){
 	
$sqlusergoods="select  * from  usersGoods where  Iduser!= '".$_SESSION['Idusser']."'";

//echo $sqlusergoods;
$queryusergoods=$this->abredatabase($sqlusergoods);
while ($rowsUsersgoods=$this->dregistro($queryusergoods)) {
	
$datos[]=$rowsUsersgoods;	
}

return $datos;
}


public function goodsU(){
$sqlU="select IdUsers,Nombre from Users where IdUsers!= '". $_SESSION['Idusser']."' ";
$queryU=$this->abredatabase($sqlU);
 while($rowsU=$this->dregistro($queryU)){

$rows[]=$rowsU;

 }

return $rows;

}
public  function Deletegoods(){
 	
 $Idgoods=$_POST['Idgoods'];	
 $Deletegoods="delete from  Goods where Idgoods='".$Idgoods."'";
$querydeletegoods=$this->abredatabase($Deletegoods);
if ($querydeletegoods) {
	echo "operacion  exitosa";
} else {
		echo "operacion fallo";
}





}
 

public  function editGoods(){

$Idgoods=$_POST['Idgoods'];
$sqledits="select *  from  Goods  where  idGoods='".$Idgoods."'";
$queryEditgoods=$this->abredatabase($sqledits);
 return $rowsgoods=$this->dregistro($queryEditgoods);
	


return $columngoods;
}

 public  function deleteUser(){
     $IdUsers=$_POST['Iduser'];
 	 $deleteUser= "delete  from users where IdUsers='".$IdUsers."'";
     $querydeleteUser=$this->abredatabase($deleteUser);
  if ($querydeleteUser) {
  	echo " operacion  exitosa";
  } else {
  	echo "operacion  fallo";
  }
  

 }

public  function Updatetegoods(){
 $IdGoods=$_POST['IdGoods'];
 $name=$_POST['Name'];
 $Description=$_POST['Description'];
 $usuarios=$_POST['Usuarios'];
 $Value=$_POST['Value'];

$Updatetegoodsql="update goods set Name='".$name."',Description='".$Description."',Value='".$Value."',Idusers='".$usuarios."'where idGoods='".$IdGoods."' ";
 

$querygoods=$this->abredatabase($Updatetegoodsql);

if ($querygoods) {
	echo "operacion exitosa";
} else {
	echo "fallo  la operacion";
}

} 

public function UpdateUser(){
 $IdUsers=$_POST['IdUsers'];
$Nombres=$_POST['Nombres'];  
 $password=$_POST['password'];   
 $Cedula=$_POST['Cedula']; 
 $Telefono= $_POST['Telefono'];  
 $Direccion=$_POST['Direccion'];   
 $email=$_POST['email']; 
$sqlUpdateUser="update users  set Nombre='".$Nombres."',Password='".$password."', Cedula='".$Cedula."', Telefono='".$Telefono."',Direccion='".$Direccion."',email='".$email."' where IdUsers='".$IdUsers."'";

$queryupdateUser=$this->abredatabase($sqlUpdateUser);

if ($queryupdateUser) {
	echo "operacion  exitosa";
} else {
	echo "operacion Fallo";
}



}

public function validaUsers(){
 $Cedula=$_POST['Cedula']; 
$sqlvalidaUsuario="select cedula from users where Cedula='".$Cedula."'";
$queryValidaUsuario=$this->abredatabase($sqlvalidaUsuario);
$nUsers=$this->numerodefilas($queryValidaUsuario);
 return $nUsers;


}

public  function editUser(){
	$Iduser =$_POST['Iduser'];

$sqledituser="select * from users   where IdUsers='".$Iduser."'";
$queryedituser= $this->abredatabase($sqledituser);
$filas=$this->dregistro($queryedituser);
return $filas;

}

 

public  function Agregargoods(){
 $name=$_POST['Name'];
 $Description=$_POST['Description'];
 $usuarios=$_POST['Usuarios'];
 $Value=$_POST['Value'];	
 $sqlInsertGoods="INSERT INTO goods( Name, Description, Value, Idusers) VALUES ('".$name."','".$Description."','".$Value."','".$usuarios."')"; 

$querygoods=$this->abredatabase($sqlInsertGoods);
if($querygoods){
echo "operacion Exitosa";

}else{
echo "fallo  la operacion";

}

}

 


	
	}


?>