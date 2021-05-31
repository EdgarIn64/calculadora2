<?php
$possible_url = array("suma","multiplicacion", "resta", "division"); // agregar restar y dividir
$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{  switch ($_GET["action"])
    { case "suma":
        $value = suma($_GET["a"],$_GET["b"]);
        break;
      case "multiplicacion":
        $value = multiplicacion($_GET["a"],$_GET["b"]);
        break;
      case "resta":
        $value = resta($_GET["a"],$_GET["b"]);
        break;
      case "division":
        $value = division($_GET["a"],$_GET["b"]);
        break;
    }
}

//TAREA AGREGAR LAS FUNCIONES
//RESTA Y DIVIDE ( verificado que el denomindaror sea !=0)
function suma($a,$b)
{ $total = array();
      $total = array("a" => "$a", "b" => "$b", "total" => $a+$b);
  return $total;
}

function multiplicacion($a,$b)
{ $total = array();
     // $total = $a+$b;
      $total = array("a" => "$a", "b" => "$b", "total" => $a*$b);
  return $total;
}

function resta($a,$b)
{ $total = array();
     // $total = $a+$b;
      $total = array("a" => "$a", "b" => "$b", "total" => $a-$b);
  return $total;
}

function division($a,$b)
{ $total = array();
     // $total = $a+$b;
  if($b!=0)
    $total = array("a" => "$a", "b" => "$b", "total" => $a/$b);
  else
    $total = array("a" => "$a", "b" => "$b", "total" => "No se puede dividir entre cero");
  return $total;
}

exit(json_encode($value));
?>
