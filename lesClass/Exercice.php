<?php

class Client
{
    private $cin;
    private $nom;
    private $tel;

    public function __construct($cin="BH6542",$nom="Abdellah Aarab",$tel="54654564"){
         $this->cin = $cin;
         $this->nom = $nom;
         $this->tel = $tel;
         
         
         
         $content = '{"CIN ": "'.$this->cin.'", "Nom ":"'.$this->nom.'"," Tel" : "'.$this->tel.'" },';
        $data = file_get_contents("lesClass/data.json");
        $data = json_decode($data);
        array_push($data, $content);
        $data = json_encode($data);
        $fp = fopen("lesClass/data.json", "w");
        fwrite($fp, $data);
        fclose($fp);
    }

    public function afficher(){
        // echo 'CIN : '.$this->cin . ' Nom : '. $this->nom .' Tel : '.$this->tel; 
        $fp = file_get_contents("lesClass/data.json");
        $fp = json_decode($fp);
        var_dump($fp);
    }
}


// $client1 = new Client();
// $client1->afficher();
// $client1 = new Client("tfik","doigoisp","oqidspgopi");
// $client1->afficher();


class Compte{
    private $solde;
    private $code ;
    public function __construct($solde,){
        $this->solde = $solde;
    }
}




