<?php
$resultat = 0;
if(isset($_POST["Unset"])){
    $resultat = 1;
}else if(isset($_POST['x1']) && $_POST['x2']){
    $x1 = $_POST['x1'];
    $opiration = $_POST['opiration'];
    $x2 = $_POST['x2'];
    if($opiration == "+" ) $resultat = $x2 + $x1 ."  " ;
    if($opiration == "-" ) $resultat = $x2 - $x1 ."  " ;
    if($opiration == "x" ) $resultat = $x2 * $x1 ."  " ;
    
    if($opiration == "/" )
    {  
        if($x2 !== 0) $resultat = $x2 / $x1 ."  " ;
        if($x2 == 0)  $resultat  = 0 ;
    }
}


$index = 1;
while($index <= 200){
    echo $index . " - ";
    if($index == 19){
        echo ($index +1). "";
        break;
    }
    $index=$index+2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text"  name="x1" /> 
            <select name="opiration">
                <option value="+">+</option>
                <option value="/">/</option>
                <option value="-">-</option>
                <option value="x">x</option>
            </select>
        <input type="text"  name="x2" />
        <button type="submit">Confirme</button>
        <button type="submit" name="Unset">Unset</button>
    </form>
    <p>
        <?php 
            if($resultat !== 0 ){
                echo $resultat;
            }   
            else echo " Error !!, division par 0 " ;
            ?></p>
</body>
</html>

<!-- <?php 

for($i=1;$i <= 5; $i++){
    if($i == $i){
            for($j=1;$j <= $i; $j++){
                 echo " ".$i;
        }
    }
    echo "<br>";
}


?> -->



<!-- 
<select name="pr" id="pr-select">
    <?php
        for  ($i=0 ; $i <= 300 ; $i++){
            if($i%2==0){
                 echo "<option> Pr : ".$i . "</option>";
            }           
        }
    ?>
    </select><br>


<form method="post">
    <input type="text" name="index" placeholder="Inex .."/>
    <button type="submit" name="submit">Submit </button>
</form>
    
<table border="1">
    <?php
        $index = $_POST["index"];
        for  ($i=0 ; $i <= 10 ; $i++){
                echo "<tr>";
                    for  ($j=0 ; $j <= 10 ; $j++){
                        if( $index == $j){
                            echo "<td bgcolor='#FFFF00'>".$i*$j."</td>";
                        }
                        echo "<td>".$i*$j."</td>";
                    }
                echo "</tr>";
        }
    ?>
</table>

 -->
