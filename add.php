<?php
include "view/add.php";
require_once "immobilier.php";
require_once "modification_t.php";
$modif = new modification_t();

if (isset($_POST['ok'])) {
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $local = htmlspecialchars($_POST['local']);
    $nbP = htmlspecialchars($_POST['nbP']);
    $dU = htmlspecialchars($_POST['dU']);
    $nat = htmlspecialchars($_POST['nat']);
    $nbE = !empty($_POST['nbE']) ? htmlspecialchars($_POST['nbE']) : null;
    $surf = !empty($_POST['surf']) ? htmlspecialchars($_POST['surf']) : null;
}
$immo = new immobilier($ref, $prop, $local, $nbP, $dU, $nat, $nbE, $surf);
$res = $modif->add($immo);
