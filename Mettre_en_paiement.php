<button type = "button" value= "mettre_en_paiement" onclick = "payer()">Mettre en paiement</button>
<?php $time = $_GET(time())?>
<script>
function payer() {
<?php executeSQL($sql = "UPDATE etat SET libelle = 'Validé' WHERE nom_colonne = 'Remboursé', INSERT $time INTO 'dateModif' FROM 'fichefrais'")?>
}
</script> 