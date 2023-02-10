<?php 

//$response = file_get_contents("https://fakestoreapi.com/products");
//$produits = json_decode($response,true);
//file_put_contents("produits.txt",$response);
//print_r($produits);

$response = file_get_contents("produits.txt");
$produits = json_decode($response,true);
// print_r($produits);
$depart = 0;
$fin = $depart + 3;

if (isset($_GET["dep"])) {
    $depart = $_GET["dep"];
    if ($depart < 3) {
        $depart = 0;
        
    }else if ($depart > count($produits) - 3) {
        $depart = count($produits) - 3;
    }
    $fin = $depart + 3;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">

    <div class="row">

    
<?php 

for ($i=$depart; $i < $fin; $i++) { 
    ?>
    <div class="card col-4 col-sm-4 col-md-4 col-lg-4 m-4" style="width: 18rem;">
    <img src="<?=$produits[$i]['image'] ?>"  class="card-img-top">
    <div class="card-body">
        <h5 class="card-title"><?=$produits[$i]['title'] ?></h5>
        <p class="card-text"><?= substr($produits[$i]['description'],0,10) ?></p>
        <a href="#" class="btn btn-primary"><?=$produits[$i]['price'] ?> $</a>

        <br>

        <a href="update.php?id=<?=$produits[$i]['id'] ;?>" class="btn btn-primary">Modifier</a>

        <a href="supreme.php?id=<?=$produits[$i]['id'] ;?>" class="btn btn-danger">Supprimer</a>
    </div>
    </div>
<?php
}
?>
<div class="position-relative">
            </div class="d-flex position-absolute top-100 start-50 translate-middle mt-1">
                        <a class="btn btn-info" href="index.php?dep=0"><<</a>
                        <a class="btn btn-warning" href="index.php?dep=<?=$depart-3?>"><</a>
                        <a class="btn btn-warning" href="index.php?dep=<?=$depart+3?>">></a>
                        <a class="btn btn-info" href="index.php?dep=<?=count($produits)-3?>">>></a>
            </div>
</div>

</body>
</html>