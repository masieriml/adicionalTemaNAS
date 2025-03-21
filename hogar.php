<?php
$recibido = getdate();
$nombre = $_GET['persona'];
echo "<h1>Comprobante de solicitud recibida</h1>";
echo "<h2><u>Ha sido recibido en el hogar...</u></h2><br/>";
echo "Una solicitud de titularidad de la habitación a nombre de: " . $nombre . "<br/>";
echo "<br/>";
echo "<u>Lo anterior se ha registrado en fecha:</u>" . "<br/>";
print_r($recibido);
?>