<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$broj1 = $_POST['broj1'];
	$broj2 = $_POST['broj2j'];
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$broj1 = $_GET['broj1'];
	$broj2 = $_GET['broj2'];
}


function funkcija($a, $b) {
     $rezultat = 0;
     $rezultat = $a *(2 + $b);
     return $rezultat; 

}


header("Content-type: application/json");
$test_array = array ('rezultat' => funkcija($broj1, $broj2));
echo json_encode($test_array);


?>