<?php
require_once "connexion.php";
require_once "modification_t.php";

try {
    $modif = new modification_t();
    $immobilierList = $modif->getAllImmobilier();
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

if (empty($immobilierList)) {
    echo "Aucune donnée trouvée dans la base de données.";
    exit;
}

ob_start();
?>
<table class="table">
    <thead>
        <tr>
            <th>Référence</th>
            <th>Propriétaire</th>
            <th>Localité</th>
            <th>Nombre de pièces</th>
            <th>Domaine d'usage</th>
            <th>Nature</th>
            <th>Nombre d'étages</th>
            <th>Surface commune</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($immobilierList as $immobilier): ?>
            <tr>
                <td><?= htmlspecialchars($immobilier['reference'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($immobilier['proprietaire'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($immobilier['localite'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($immobilier['nbPieces'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($immobilier['domaineUsage'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($immobilier['Nature'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($immobilier['nbEtage'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($immobilier['surfaceCommune'] ?? 'N/A') ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Liste des biens immobilier";
include "layout.php";
?>