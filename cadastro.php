<DOCTYPE! html>
<html>
<head>
<title>Usuario</title>

<meta http-equiv="content-type" content="text/html; charset="UTF-8">

<body>
<p>Login</p>

<form action="usuario" method="get">


Email:<br>
<input type="text" name="email" size="20" placeholder="E-MAIL"></input><br>

SENHA:<br>
<input type="password" name="senha" size="20" /><br>




<input type="submit" value="Log in">

<script language="javascript">
function check(form)
{

 if(form.email.value == "myemail" && form.senha.value == "mysenha")
  {
    window.open('home.html')
  }
 else
 {
   alert("Errado. Digite de novo por favor.")
  }
}

</body>
</html>


<!DOCTYPE html>
<html>
    
    <body>

        <form name="form1" method="post" action="enviar.php">
            <p>Nome: 
                <input name="nome" type="text" id="nome">
            </p>
            <p>Email: 
                <input name="email" type="text" id="email">
            </p>
            <p>Assunto: 
                <input name="assunto" type="text" id="assunto">
            </p>
            <p>Mensagem:<br>
                <textarea name="mensagem" id="mensagem"></textarea>
            </p>
            <p>
                <input type="submit" name="Submit" value="Enviar">
            </p>
        </form>
    </body>
    </html>
    
    
    
    
    <DOCTYPE! html>
<html>
<head>
<title>Usuario</title>



<meta http-equiv="contento-type" content="text/html; charset="UTF-8">

<body>
<p>Login</p>

<form action="usuario" method="get">

NOME:<br>
<input type="text" name="nome" size="20" placeholder="NOME"></input><br>

Email:<br>
<input type="text" name="email" size="20" placeholder="E-MAIL"></input><br>

SENHA:<br>
<input type="password" name="senha" size="20" /><br>

CONFIRMAR:<br>
<input type="password" name="confirmarsenha" size="20" /><br>

<p>SEXO:</p>
<input type="radio" name="sexo" value="feminino"/>Feminino<br>
<input type="radio" name="sexo" value="masculino"/>Masculino<br>
<br></br>

<input type="submit" value="Acesso">



</body>
</html>
