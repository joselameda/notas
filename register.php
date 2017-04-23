<?php
    session_start();
    include ("conect.php");
    
?>

<form  id ="myform" action="enviar_registro.php" method="post" class="registro"> 
<div><label>Email:</label> 
<input type="text" name="email"></div> 
<div><label>Repetir Email:</label> 
<input type="text" name="reusuario"></div> 
<div><label>Clave:</label> 
<input type="password" name="password"></div> 
<div><label>Repetir Clave:</label> 
<input type="password" name="repassword"></div> 
<div> 
<button type="button" id="enviar" name="enviar">REGISTRO</button></div> 
</form>


<script>
    document.getElementById('enviar').addEventListener("click", enviar);
    function enviar(){
        var formulario = document.getElementById("myform");	
	    var email = formulario[0];
        var password = formulario [2];
            console.log (email);
        if (email.value==formulario[1].value){
                if (password.value == formulario [3].value){
                    alert("Enviando");
                    formulario.submit();
                    return true;
                    }
                    else {
                        alert("Constraseña no son iguales");
                        return false;
                    }
        } 
        else {
            alert("Email no son iguales");
            return false;
        }
    } 
</script>

<style> 
        { 
            font-size: 14px; 
            font-family: sans-serif; 
        } 
        form.registro{ 
            background: none repeat scroll 0 0 #F1F1F1; 
            border: 1px solid #DDDDDD; 
            margin: 0 auto; 
            padding: 20px; 
            width: 278px; 
            box-shadow:0px 0px 20px black;  
            border-radius:10px;  
            position:relative; 
            top:30px; 
        } 
        form.registro div { 
            margin-bottom: 15px; 
            overflow: hidden; 
        } 
        form.registro div label { 
            display: block; 
            float: left; 
            line-height: 25px; 
        } 
        form.registro div input[type="text"], form.registro div input[type="password"] {
            border: 1px solid #DCDCDC; 
            float: right; 
            padding: 4px; 
        } 
        form.registro div input[type="submit"] { 
            background: none repeat scroll 0 0 #DEDEDE; 
            border: 1px solid #C6C6C6; 
            float: right; 
            font-weight: bold; 
            padding: 4px 20px; 
        } 
 </style>       