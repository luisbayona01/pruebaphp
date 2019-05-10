<?php 

require_once('../autoload.php');

use Modelo\Modelo;

//print_r($_POST);

$procesar=$_POST['procesar'];
 $modelo= new Modelo();
 switch ($procesar) {
 	case 0:
 //
 $nusuarios=$modelo->validaUsers();
 if($nusuarios==0){
$modelo->RegistrarUser();

 }else{
echo "este usuario ya esta registrado"; 	
 }		
 		break;
 	
 	case 1:
  echo $modelo->LoginUser();	

 		break;

 case   2:
 echo json_encode($modelo->Listargoods());
 break;

case 3:
 			
 	$modelo->UpdateUser();		
 			break; 

 case 4:
 $modelo->deleteUser();		
 				break;					
 

case 5:
$modelo->Agregargoods();
break;

case 6:
$modelo->Updatetegoods();
	break;
	case 7:
		$modelo->Deletegoods();
		break;
 }

?>