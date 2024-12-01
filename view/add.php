<?php
ob_start();
?>
<link rel="stylesheet" href="../bootstrap.css">
<form action="../add.php" method="post" class="form-control">
    <label for="">Référence</label><input type="text" name="ref" class="form-control" id=""></br>
    <label for="">Proprietaire</label><input type="text" name="prop" class="form-control" id=""></br>
    <label for="">Localite</label><input type="text" class="form-control" name="local" id=""></br>
    <label for="">Nombre de Piece</label><textarea name="nbP" class="form-control" id=""></textarea></br>
    <label for="">Domaine Usage</label><input type="text" name="dU" class="form-control" id=""></br>
    <label for="">Nature</label><input type="text" class="form-control" name="nat" id=""></br>
    <label for="">Nombre d'étages</label><input type="text" class="form-control" name="nbE" id=""></br>
    <label for="">Surface Commune</label><input type="text" class="form-control" name="surf" id=""></br>
    <input type="submit" value="Ajouter" name="ok" class="btn btn-success btn-lg">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Ajout d'un produit";
include "../../Atelier6/layout.php"; ?>