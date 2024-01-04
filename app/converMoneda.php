<?php 

require '../vendor/autoload.php';
use Luecano\NumeroALetras\NumeroALetras;

$monto = $_POST['monto'];

$decimals = 2;
$currency = "balboas";
$cents = "centavos";

$formatter = number_format($monto,2);
$formatter = new NumeroALetras();
$formatter->apocope = true;

if(isset($monto)){
    echo $formatter->toString($monto, $decimals, $currency, $cents);
}

?>