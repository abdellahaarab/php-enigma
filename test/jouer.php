<?php

$resRand = 0;
$isPlayer =1;
function resultat($joueurs){
    $resRand = 0;
    $isPlayer =1;
    $GLOBALS['resRand'] = rand(1, 6);
    $GLOBALS['isPlayer'] = $joueurs;
    if($resRand == 5){
        $isPlayer == $joueurs;
    }

}

if(isset($_POST['j1'])){
    resultat(1);
    static $cpt = 0;
    $cpt= $cpt +1;
    echo "Cpt : ".$cpt;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Joureus</title>
</head>
<body>
<div class="container">
    <form method="post">
        <div>
                    <div>
                        <button class="btn btn-danger" name="j1">J1</button>
                        <button class="btn btn-secondary">J2</button>
                    </div>
                    <div>
                          <p class="mx-auto"><?php     echo $resRand;  ?></p>
                    </div>
                    <div>
                        <button class="btn btn-success">J3</button>
                        <button class="btn btn-info">J4</button>
                    </div>
        </div>
    </form>
</div>
</body>
</html>