<button type = "button" value= "mettre_en_paiement" onclick = "payer()">Mettre en paiement</button>
<?php $time = $_GET(time())?>
<script>
function payer() {
<?php executeSQL($sql = "UPDATE etat SET libelle = 'Valid�' WHERE nom_colonne = 'Rembours�', INSERT $time INTO 'dateModif' FROM 'fichefrais'")?>
}
</script> 