



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/dashboard.css" rel="stylesheet">

</head>
<body>

<?php 
session_start();

if(isset($_SESSION['Nombre'])){
 //[Nombre] => luis bayona

?>
<div class="header">
  <a href="#default" class="logo">Welcome <?php echo $_SESSION['Nombre']; ?></a>
  <div class="header-right">
    <a  href="#Agregar"onclick="CreateGoods()">Create Goods</a>
    <a  href="#Agregar"onclick="Createuser()">Create Users</a>
    
  </div>
</div>

<P id="P1"></P>
<div style="padding-left:20px">
  <h1 align="center">Goods Users </h1>
  </div>
 <div  class="container"> 
<div style="overflow-x:auto; overflow-y:auto;">
  <table>
  <thead>
  <tr>
  <th>Username</th>
  <th>Email </th>
  <th>DireccionUsuario</th>
  <th>Goods</th>
  <th>Description</th>
  <th>value</th>
  <th>Editar</th>
  <th>Eliminar</th>	
  </tr>	
 </thead>	
<tbody id="tbody">
	
</tbody>
</table>
</div>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 id="h2"></h2>
    </div>
    <div class="modal-body">
     <div id="contenido">
     	


     </div> 
 </div>
    <div class="modal-footer">
 
    </div>
  </div>

</div>






<script src="../js/main.js"></script>
</body>
</html>
<?php } else{  header('Location: http://localhost/pruebaphp/Vista/view.html'); } ?>