<?php
$newTable = [];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $response = file_get_contents("produits.txt");
    $produits = json_decode($response,true);
    for($i=0; $i < count($produits) ; $i++){
        if ($id !== $produits[$i]['id']){
            $newTable[$i] =  $produits[$i];
            $myfile = fopen("produits.txt", "w") or die("Unable to open file!");
            fwrite($myfile, $newTable);
            fclose($myfile);
            header('Location:  http://localhost/pagination/');
            // die();
        }else{
            echo "Not found !!";
        }     
    }
}

var_dump($newTable);