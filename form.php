<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Form</title>
</head>
<body>
    <form method="POST" action="">
        <label>Nome </label>
        <input type="text" placeholder="votre nom" name="nome"><br>
        <label>Prenome </label>
        <input type="text" placeholder="votre prenome" name="prenome"><br>
        <label>Date De n </label>
        <input type="date" name="dateN"><br>
        <fieldset>
                <legend>Leou de lissance :</legend>
                <input type="radio" name="fes" value="fes" /><span>fes</span>
                <input type="radio" name="meknes" value="meknes" /><span>meknes</span>
                <input type="radio" name="ifrane" value="ifrane" /><span>ifrane</span>
        </fieldset>
        <label>Adresse postal : </label>
        <textarea name="adress"></textarea><br>
        <label>Adresse Numirique </label>
        <input type="text" placeholder="votre Adresse Numirique" name="ANque"><br>
        <label>Page Personell </label>
        <input type="text" placeholder="votre Page Personell" name="page"><br>
        <label>Tele</label>
        <input type="tel" name="tele" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>
        <label>Semester </label>
        <select name="semester">
            <option value="S1">S1</option>
            <option value="S1">S1</option>
            <option value="S1">S1</option>
            <option value="S1">S1</option>
        </select><br>
        <label>Nevou en HTML</label>
        <input type="range" name="nevou" min="0" max="100" value="20"/><br>
        <fieldset>
                <legend>Connessance :</legend>
                <input type="radio" name="HTML" value="HTML" /><span>HTML</span>
                <input type="radio" name="CSS" value="CSS" /><span>CSS</span>
                <input type="radio" name="JS" value="JS" /><span>JS</span>
                <input type="radio" name="PHP" value="PHP" /><span>PHP</span>
        </fieldset>

        <button type="submit"  name="envoyer">Envoyer</button>
        <button type="submit"  name="reinisialiser">Reinisialiser</button>
    </form>
</body> 
</html>

<?php

if(isset($_POST['reinisialiser'])){
    echo "Des Donne Reinisialiser ";
}

else if(isset($_POST['envoyer'])){
    $nome = $_POST['nome'];
    $prenome = $_POST['prenome'];
    $dateN = $_POST['dateN'];
    if($_POST['fes'] == "fes"){
        $city  = $_POST['fes'];
    }
    else if($_POST['meknes'] == "meknes" && !isset($_POST['fes'])){
        $city  = $_POST['meknes'];
    }else if($_POST['ifrane'] == "ifrane" && !isset($_POST['fes']) && !isset($_POST['meknes'])){
        $city  = $_POST['ifrane'];
    }
    $adress = $_POST['adress'];
    $ANque = $_POST['ANque'];
    $page = $_POST['page'];
    $tele = $_POST['tele'];
    $semester = $_POST['semester'];
    $nevou = $_POST['nevou'];

    $HTML = $_POST['HTML'];
    $CSS = $_POST['CSS'];
    $JS = $_POST['JS'];
    $PHP = $_POST['PHP'];


}


