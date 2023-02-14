Correction :
//ex 1
file : salarie.class.php
class salarie
{
    private int $matricule;
    private string $nomComplet;
    private float $salaire;
    public static float $tauxCS = 20;

    public function __construct(int $matricule = 0, string $nomComplet = "", float $salaire = 0)
    {
        $this->matricule = $matricule;
        $this->nomComplet = $nomComplet;
        $this->salaire = $salaire;
    }
    public function setMatricule(int $matricule): void
    {
        $this->matricule = $matricule;
    }
    public function getMatricule(): int
    {
        return $this->matricule;
    }
    public function setNomComplet(string $nomComplet): void
    {
        $this->nomComplet = $nomComplet;
    }
    public function getNomComplete(): string
    {
        return $this->nomComplet;
    }
    public function setSalaire(float $salaire): void
    {
        $this->salaire = $salaire;
    }
    public function getSalaire(): float
    {
        return $this->salaire;
    }
    public function afficher()
    {
        echo "Salarié => Marticule: $this->matricule, Nom complet : $this->nomComplet, Salaire: $this->salaire";
    }
    public function calculerSalaireNet(): float
    {
        return $this->salaire - $this->salaire * self::$tauxCS / 100;
    }
}

file : main.php
require_once("salarie.class.php");

$s1 = new salarie();
$s1->afficher();
echo "<br>";
echo "Salaire Net de S1: " . $s1->calculerSalaireNet() . " Dhs";
echo "<br>";

//
$s2 = new salarie(245, "Ahmed Alaoui", 3000);
$s2->afficher();
echo "<br>";
echo "Salaire Net de S2: " . $s2->calculerSalaireNet() . " Dhs";
echo "<br>";
//
$s3 = new salarie(nomComplet: "Sara Alaoui", salaire: 4500);
$s3->afficher();
echo "<br>";
echo "Salaire Net de S3: " . $s3->calculerSalaireNet() . " Dhs";
echo "<br>";


//ex 2 
file : client.class.php
class client
{
    private $cin;
    private $nom;
    private $prenom;
    private $tel;

    public function getcin()
    {
        return $this->cin;
    }
    public function setcin($cin)
    {
        $this->cin = $cin;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
    }
    public function getprenom()
    {
        return $this->prenom;
    }
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public function __construct($cin = "", $nom = "non définie", $prenom = "", $tel = "0")
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }
    public function afficher()
    {
        echo "cin : $this->cin nom:$this->nom prenom : $this->prenom tel:$this->tel ";
    }
}

file : compte.class.php
require_once("client.class.php");
class compte
{
    private $code;
    private $solde;
    private client $client;
    private static $nb = 0;

    public static function getNbre()
    {
        return self::$nb;
    }

    public function __construct($solde = 0, $client = new client())
    {
        self::$nb++;
        $this->code = self::$nb;
        $this->solde = $solde;
        $this->client = $client;
    }

    public function getcode()
    {
        return $this->code;
    }
    public function setsolde($solde)
    {
        $this->solde = $solde;
    }
    public function getsolde()
    {
        return $this->solde;
    }
    public function setclient($client)
    {
        $this->client = $client;
    }
    public function getclient()
    {
        return $this->client;
    }
    public function crediter($somme, $compte2 = null)
    {
        if ($compte2 != null) {
            $ancienSolde = $compte2->getsolde();
            $compte2->setsolde($ancienSolde - $somme);
        }
        $this->solde += $somme;
    }
    public function debiter($somme, $compte2 = null)
    {
        if ($compte2 != null) {
            $ancienSolde = $compte2->getsolde();
            $compte2->setsolde($ancienSolde + $somme);
        }
        $this->solde -= $somme;
    }

    public function __toString()
    {
        return "Le compte => code: $this->code, Nom complet: " . $this->client->getnom() . " " . $this->client->getprenom() . ", Solde : $this->solde";
    }
}

file : main.php
require_once("compte.class.php");
$c1 = new client("CD020202", "Bennani", "ahmed", "063256589");
$c1->afficher();
echo "<br>";

$compte1 = new compte(100, $c1);
$compte1->crediter(500);

echo "Le client numéro " . $compte1->getcode() . " " . $compte1->getclient()->getnom() . " a le solde : " . $compte1->getsolde() . "<br>";

$compte2 = new compte(800, new client(cin: "CD12345", nom: "alaoui"));
echo "Le client numéro " . $compte2->getcode() . " " . $compte2->getclient()->getnom() . " a le solde : " . $compte2->getsolde() . "<br>";

echo "Le nombre des comptes crées : " . compte::getNbre();
echo "<hr>";
$compte1->crediter(300, $compte2);
echo "Le client numéro " . $compte1->getcode() . " " . $compte1->getclient()->getnom() . " a le solde : " . $compte1->getsolde() . "<br>";
echo "Le client numéro " . $compte2->getcode() . " " . $compte2->getclient()->getnom() . " a le solde : " . $compte2->getsolde() . "<br>";
echo "<hr>";
$compte1->debiter(800);
echo "Le client numéro " . $compte1->getcode() . " " . $compte1->getclient()->getnom() . " a le solde : " . $compte1->getsolde() . "<br>";
echo "<hr>";
$compte1->debiter(100, $compte2);

// echo "Le client numéro " . $compte1->getcode() . " " . $compte1->getclient()->getnom() . " a le solde : " . $compte1->getsolde() . "<br>";
// echo "Le client numéro " . $compte2->getcode() . " " . $compte2->getclient()->getnom() . " a le solde : " . $compte2->getsolde() . "<br>";

echo $compte1;
echo "<br>";
echo $compte2;