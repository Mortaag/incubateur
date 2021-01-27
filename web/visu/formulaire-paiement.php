<?php 

echo '<form action="achatTermine.php" method=post>
Adresse Email : <input type="text" name="AdressEmail" required>
Nom : <input type="text" name=Nom>
Prénom : <input type="text" name=Prenom>
<input type="hidden" name=idDate value=',$_GET['idDate'],'>
<button type=submit> Payer </button>
</form>';