<?php


$table = [];
$products  = [
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
function getTabele($products, $i,$end){
  // $GLOBALS['products'] = [
  //   [
  //     "title"=>"Tochiba","price"=>"2500","etat"=>"disponible" ,"image"=>"assets/pc1.jpg"
  //   ],
  //   [
  //     "title"=>"Dell","price"=>"1500","etat"=>"disponible" ,"image"=>"assets/pc2.jpg"
  //   ],
  //   [
  //     "title"=>"HP","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
  //   ],
  //   [
  //     "title"=>"HP4","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
  //   ],
  //   [
  //     "title"=>"HP5","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
  //   ],
  //   [
  //     "title"=>"HP5+","price"=>"25200","etat"=>"indisponible" ,"image"=>"assets/pc3.jpg"
  //   ]
  //   ] ;
    static $cpt = 0;
    for ($i;$i<=$end ; $i++):
    $GLOBALS['table'][$cpt]  = "<div class='card m-3' style='width: 18rem;'>
                    <img src='".$products[$i]['image']."' class='card-img-top'/>
                    <p>".$products[$i]['title']."</p>
                    <p>".$products[$i]['price']."</p>
                    <p>".$products[$i]['etat']."</p>
                </div>";$cpt++;
    endfor; 
}

$indedx = 0;
if(isset($_POST['index'])){
  $indedx = $_POST['index'];
}


if(isset($_POST['backproduct'])){
      $indedx -- ;
      echo count($products).'<br>';
      echo $indedx.'<br>';
      if( $indedx >= 0 ){
         getTabele($products,0+$indedx ,2+$indedx);
      }
      getTabele($products,0,2);
      $indedx = 0;
}else if(isset($_POST['nextproduct'])){
    $indedx ++;
    echo count($products).'<br>';
    echo $indedx.'<br>';
    getTabele($products,0+$indedx ,2+$indedx);
    if( $indedx >= 0 ){
      getTabele($products,0+$indedx ,2+$indedx);
   }
   getTabele($products,0,2);
   $indedx = 0;
}else{
    getTabele($products,0,2);
    $indedx = 0;
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
     <?php   
    for ($j=0;$j<=2 ; $j++):
      echo $table[$j]; 
    endfor; 
    ?>
    </div>
    <div class="container">
      <form method="post" action="">
          <div class="d-flex m-auto">
                    <button class="btn btn-primary m-2" type="submit" name="backpage"> << </button>
                    <button class="btn btn-primary m-2" type="submit" name="backproduct"> < </button>
                    <button class="btn btn-primary m-2" type="submit" name="nextproduct"> > </button>
                    <button class="btn btn-primary m-2" type="submit" name="nextpage"> >> </button>
                    <input type="hidden" name="index" value="<?php echo $indedx;?>"
          </div>
          </form>
    </div>
</div>
</body>
</html>
