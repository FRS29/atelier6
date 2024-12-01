<?php
require_once "immobilier.php";
require_once "connexion.php";
class modification_t
{
    private $pdo;
    public function  __construct()
    {
        $connexion = new connexion();
        $this->pdo = $connexion->getConnexion();
    }
    function add(immobilier $immobilier)
    {
        $ref = $immobilier->getRef();
        $prop = $immobilier->getProprietaire();
        $local = $immobilier->getLocalite();
        $nbP = $immobilier->getNbPiece();
        $dU = $immobilier->getDomaineUsage();
        $nat = $immobilier->getNature();
        $nbE = $immobilier->getNbEtage();
        $surf = $immobilier->getSurfaceCommune();
        $nbE = is_null($nbE) ? "NULL" : $nbE;
        $surf = is_null($surf) ? "NULL" : $surf;
        $sql = "insert into immobilier values($ref,'$prop','$local',$nbP,'$dU','$nat',$nbE,$surf)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    public function  delete($id)
    {
        $sql = "delete from produit  where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    public function getAllImmobilier()
    {
        $sql = "select * from immobilier";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
