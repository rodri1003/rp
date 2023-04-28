<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loteria.php" method= "POST">
        <label>Numero a comprar</label>
        <br>
        <input type="text" name= "numeroComprado" >
        <br>
           <label>Precio de compra</label>
        <br>
        <input type="text" name="precioCompra" >
        <br>
        <input type= "submit" value="jugar" >
        <br>
        <br>
    </form>
</body>
</html>

<?php
class Loteria {
    public $numeroComprado;
    public $precioCompra;
    public $numeroGanador;

    function __construct($_numeroComprado, $_precioCompra, $_numeroGanador)
    {
        $this->numeroComprado = $_numeroComprado;
        $this->precioCompra = $_precioCompra;
        $this->numeroGanador = $_numeroGanador;

    }

    function comenzarJuego(){
        if($this->numeroComprado== $this->numeroGanador ) {
            echo "HAS GANADO $". (($this->precioCompra * 4)* 17);
        }else {
            echo "HAS PERDIDO";
        }
    }
}
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $jugada= new Loteria ($_POST['numeroComprado'],$_POST['precioCompra'], 20);
    $jugada -> comenzarJuego();
}
?>