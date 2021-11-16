<?php


if  (isset($_POST["solicitar"])){




//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$NOMBRE = $_POST["nombre"] ;
$CORREO = $_POST["correo"];
$CELULAR = $_POST["celular"] ;
$DIRECCION = $_POST["direccion"] ;
$TAMALES = $_POST["tamales"] ;
$QUIMBOLITOS= $_POST["quimbolitos"] ; 


//verificamos la conexion a base datos
/* if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        } */
        //indicamos el nombre de la base datos
        $datab = "basededatos";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        $errores=array();

         if (isset($_POST['nombre'])) // validando que correo y clave tengan caracteres 
{
    $NOMBRE=$_POST["nombre"];
    if ($NOMBRE=="") {
        echo "mal";
    }
}
        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h1> Su pedido se ha registrado con exito!.</h1>" ;
        echo "<h1> Nos estaremos comunicando con usted.</h1>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO `pedidos`(`nombre`, `correo`, `celular`, `direccion`, `tamales`, `quimbolitos`)
        VALUES ('[$NOMBRE]','[$CORREO]','$CELULAR','$DIRECCION','$TAMALES','$QUIMBOLITOS')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);








} 

?>

