<?php

$products = [
    [
      "title"=>"Tochiba","price"=>"2500","etat"=>"disponible" ,"image"=>"assets/pc1.jpg"
    ],
    [
      "title"=>"Dell","price"=>"1500","etat"=>"disponible" ,"image"=>"assets/pc2.jpg"
    ],
    [
      "title"=>"HP","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
    ],
    [
      "title"=>"HP4","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
    ],
    [
      "title"=>"HP5","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
    ],
    [
      "title"=>"HP5+","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
    ]
] ;
$index = 2;
if(isset($_POST['backproduct'])){
     $GLOBALS['index'] = 2;
     static $index = 2;

     echo "jo ".$index =+1;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Product</title>
</head>
<body>
<div class="container">
  <div class="d-flex p-2 m-3">
     <?php for ($i=0;$i<=$index ; $i++):
              echo "<div class='card m-3' style='width: 18rem;'>
                      <img src='".$products[$i]['image']."' class='card-img-top'/>
                      <p>".$products[$i]['title']."</p>
                      <p>".$products[$i]['price']."</p>
                      <p>".$products[$i]['etat']."</p>
              </div>";
      endfor; ?>
    </div>
    <div class="container">
      <form method="post">
          <div class="d-flex m-auto">
                    <button class="btn btn-primary m-2" type="submit" name="backpage"> << </button>
                    <button class="btn btn-primary m-2" type="submit" name="backproduct"> < </button>
                    <button class="btn btn-primary m-2" type="submit" name="nextproduct"> > </button>
                    <button class="btn btn-primary m-2" type="submit" name="nextpage"> >> </button>
          </div>
          </form>
    </div>
</div>
</body>
</html>