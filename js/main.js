(function() {

mostrardatos();


})();




var span = document.getElementsByClassName("close")[0];
var modal = document.getElementById('myModal');

function updateGoods(){
  
var hr = new XMLHttpRequest();
               
                var Name = document.getElementById("Name").value;
                var Description = document.getElementById("Description").value;
                var Value=document.getElementById("Value").value;
                var Usuarios=document.getElementById("Usuarios").value;
                var IdGoods=document.getElementById("idGoods").value;
                if(IdGoods==""){
                  var vars = "Name="+Name+"&Description="+Description+"&procesar=5&Usuarios="+Usuarios+"&Value="+Value;
                }else{
                  var vars ="Name="+Name+"&Description="+Description+"&procesar=6&Usuarios="+Usuarios+"&Value="+Value+"&IdGoods="+IdGoods;
             }
                
               var url = "http://localhost/pruebaphp/Controlador/controlador.php";
                 //var Iduser=document.getElementById("Direccion").value; 
              
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                alert(return_data);
                        mostrardatos();              }
                }
                
                hr.send(vars);
         



}


function mostrardatos(){


var formData = new FormData();
  formData.append('procesar','2')
fetch('http://localhost/pruebaphp/Controlador/controlador.php',{
  method: 'POST', // or 'PUT'
  body:formData,
 })
.then(response => response.json())
.catch(error => console.error('Error:', error))
.then(data =>{
//data
console.log(data);
var html="";
 for (var i=0; i < data.length; i++) {
      //console.log(data[i]['Username'])     
html+='<tr><td>'+data[i]['Username']+'</td>'
html+="<td>"+data[i]['Email']+"</td>"
html+="<td>"+data[i]['DireccionUsuario']+"</td>"
html+="<td>"+data[i]['Goods']+"</td>"
html+="<td>"+data[i]['Description']+"</td>"
html+="<td>"+data[i]['value']+"</td>"
html+="<td><button type='button' class='btninfo' onclick='EditarUsuario("+data[i]['Iduser']+")'> EditarUsuario </button> <button type='button' class='btninfo' onclick='EditarGoods("+data[i]['Idgoods']+")' > EditarGoods </button></td>"
html+="<td><button type='button' class='btndanger' onclick='ELiminarUsuario("+data[i]['Iduser']+")'> ELiminarUsuario </button> <button type='button' class='btndanger'onclick='ELiminarGoods("+data[i]['Idgoods']+")' > ELiminarGoods </button></td>"


if(document.getElementById("tbody")){

  document.getElementById("tbody").innerHTML=html;

}

          
       }

})



} 

function CreateGoods(){
modal.style.display = "block";

 var hr = new XMLHttpRequest();
               
          
                var url = "http://localhost/pruebaphp/Vista/EditGoods.php";
                 //var Iduser=document.getElementById("Direccion").value; 
                //var vars = "Iduser="+Iduser;
                hr.open("POST", url, true);


               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                document.getElementById("contenido").innerHTML = return_data;
                                     }
                }
                
                hr.send(); // Actually execute the request
                // "processing..."
document.getElementById("h2").innerHTML ="Crear Goods";


}

function ELiminarUsuario(IdUsers){
  var hr = new XMLHttpRequest();



  var url = "http://localhost/pruebaphp/Controlador/controlador.php";
            var  vars ="Iduser="+IdUsers+"&procesar=4" 
              
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                alert(return_data);
                                     }
                }
                
                hr.send(vars);
          mostrardatos();


}

function updateUser(){

var hr = new XMLHttpRequest();
               
                var Nombres = document.getElementById("Nombres").value;
                var password = document.getElementById("Rpassword").value;
                var email=document.getElementById("email").value;
                var cedula=document.getElementById("cedula").value;
                var Telefono=document.getElementById("Telefono").value;
                var Direccion=document.getElementById("Direccion").value; 
                var IdUsers=document.getElementById("IdUsers").value;
                if(IdUsers==""){
                  var vars = "Nombres="+Nombres+"&password="+password+"&procesar=0&Cedula="+cedula+"&Telefono="+Telefono+"&Direccion="+Direccion+"&email="+email;
                }else{
                 var vars = "Nombres="+Nombres+"&password="+password+"&procesar=3&Cedula="+cedula+"&Telefono="+Telefono+"&Direccion="+Direccion+"&email="+email+"&IdUsers="+IdUsers;
             }
                
               var url = "http://localhost/pruebaphp/Controlador/controlador.php";
                 //var Iduser=document.getElementById("Direccion").value; 
              
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                alert(return_data);
                mostrardatos();
                                     }
                }
                
                hr.send(vars);
          


}



function Createuser(){

modal.style.display = "block";

 var hr = new XMLHttpRequest();
               
          
                var url = "http://localhost/pruebaphp/Vista/EditUsers.php";
                 //var Iduser=document.getElementById("Direccion").value; 
                //var vars = "Iduser="+Iduser;
                hr.open("POST", url, true);


               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                document.getElementById("contenido").innerHTML = return_data;
                                     }
                }
                
                hr.send(); // Actually execute the request
                // "processing..."
document.getElementById("h2").innerHTML ="Crear User";




}

function EditarUsuario(Iduser){

  //alert(Iduser);
 modal.style.display = "block";

 var hr = new XMLHttpRequest();
               
             
                var url = "http://localhost/pruebaphp/Vista/EditUsers.php";
                 //var Iduser=document.getElementById("Direccion").value; 
                var vars = "Iduser="+Iduser;
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                document.getElementById("contenido").innerHTML = return_data;
                                     }
                }
                
                hr.send(vars); // Actually execute the request
                // "processing..."
document.getElementById("h2").innerHTML ="EditarUsuario"

}

if(span){
span.onclick = function() {
  modal.style.display = "none";
}
}

function EditarGoods(Idgoods){
if (Idgoods==null){
 alert('porfavor cree un registro en Goods para poder Editar');
return false 
}

 modal.style.display = "block";

 var hr = new XMLHttpRequest();
               
             
                var url = "http://localhost/pruebaphp/Vista/EditGoods.php";
                 //var Iduser=document.getElementById("Direccion").value; 
                var vars = "Idgoods="+Idgoods;
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                document.getElementById("contenido").innerHTML = return_data;
                                     }
                }
                
                hr.send(vars); // Actually execute the request
                // "processing..."
document.getElementById("h2").innerHTML ="EditarUsuario"

}
 function  ELiminarGoods(Idgoods){
 if (Idgoods==null){
 alert('No hay registros en Goods que eliminar porfavor inserte almenos un registro');
 return false;
}


var hr = new XMLHttpRequest();



  var url = "http://localhost/pruebaphp/Controlador/controlador.php";
            var  vars ="Idgoods="+Idgoods+"&procesar=7" 
              
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
                  if(hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                alert(return_data);
                                     }
                }
                
                hr.send(vars);
          mostrardatos();


 }
          
          var btnloginformlink =document.getElementById('login-form-link');
          var btnregisterformlink=document.getElementById('register-form-link');
          var formlogin=document.getElementById("login-submit");
          var formregister=document.getElementById("register-submit");
          if(btnregisterformlink){
          btnregisterformlink.onclick = function(){ mostrarR()};
          }
          if(btnloginformlink){
          btnloginformlink.onclick = function(){ LoginR()};
            }
          if(formregister){
          formregister.onclick=function(){
          ajax_post_registrousers();  
          }

          if(formlogin){
          formlogin.onclick=function(){
          ajax_post_loginUsers(); 
          }
		  }
          function mostrarR(){
          	document.getElementById("login-form").style.display="none";
          	document.getElementById("register-form").style.display="block";
          		
          }
		  }
          function LoginR(){

          document.getElementById("login-form").style.display="block";
          document.getElementById("register-form").style.display="none";

          } 
		 
          function ajax_post_registrousers(){
               
                var hr = new XMLHttpRequest();
               
             
                var url = "http://localhost/pruebaphp/Controlador/controlador.php";
                var Nombres = document.getElementById("Nombres").value;
                var password = document.getElementById("Rpassword").value;
                var email=document.getElementById("email").value;
                var cedula=document.getElementById("cedula").value;
                var Telefono=document.getElementById("Telefono").value;
                var Direccion=document.getElementById("Direccion").value; 
                var vars = "Nombres="+Nombres+"&password="+password+"&procesar=0&Cedula="+cedula+"&Telefono="+Telefono+"&Direccion="+Direccion+"&email="+email;
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
            	    if(hr.readyState == 4 && hr.status == 200) {
            		    var return_data = hr.responseText;
            			//document.getElementById("status").innerHTML = return_data;
            	     alert(return_data);
                   mostrardatos();
            	    }
                }
                
                hr.send(vars); 
            
                // Actually execute the request
                //document.getElementById("status").innerHTML = "processing...";
            }


            function ajax_post_loginUsers(){
               //alert("procesando..");
                var hr = new XMLHttpRequest();
               
             
                var url = "http://localhost/pruebaphp/Controlador/controlador.php";
                var username = document.getElementById("Username").value;
                var password = document.getElementById("password").value;
                var vars = "username="+username+"&password="+password+"&procesar=1";
                hr.open("POST", url, true);
               
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               
                hr.onreadystatechange = function() {
            	    if(hr.readyState == 4 && hr.status == 200) {
            		    var return_data = hr.responseText;
            		

               if(return_data==0){

            	alert('email o password incorrecto');
                  }

               if(return_data!=0){
             window.location.replace("http://localhost/pruebaphp/Vista/dashboard.php");
             
                  }




            	    }
                
             

                }
                
                hr.send(vars); 


            }