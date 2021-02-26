<?php

$a = $_POST['num_a'];
$b = $_POST['num_b'];

$op = $_POST['operacion'];

sleep(1);
switch ($op) {
    case 'suma':
        $res = $a+$b;
        break;
    case 'resta':
        $res = $a-$b;
        break;
    case 'multiplicacion':
        $res = $a*$b;
        break;
    case 'division':
        $res = $a/$b;
        break;
}

echo json_encode(array("num_a"=>$a,"num_b"=>$b,"resultado"=>$res));


?>