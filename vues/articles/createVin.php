<main class="container">
    <p class="h2">Entrer vos informations</p>
    <br>
    <form method="post" action="index.php?entite=vin&action=create">
        <label for="region">Region : </label>
        <input type="text" id="region" name="idRegion">
        <br>
        <label for="cepage">Cepage :</label>
        <input type="text" id="cepage" name="idCepage">
        <br>
        <label for="milesime">Milesime :</label>
        <input type="text" id="milesime" name="idMilesime">
        <br>
        <label for="robe">Robe  : </label>
        <input type="text" id="robe" name="idRobe">
        <br> 
        <label for="nom">Nom  : </label>
        <input type="text" id="nom" name="idNom">
        <br>
        <label for="image"> Image  : </label>
        <input type="text" id="image" name="idImage">
        <br>
        <label for="update"> Update: </label>
        <input type="date" id="update" name="idUpdate">
        <br>
        <label for="prix"> Prix  : </label>
        <input type="text" id="prix" name="idPrix">
        <br>
        <button>Envoyer</button>
    </form>
</main>