<form action="hotels.php" method="GET">
    <label>Mostra solo hotel con parcheggio:</label>
    <input type="radio" name="parking" id="parking-yes" value="1">

    <label for="parking-yes">Sì</label>
    <input type="radio" name="parking" id="parking-no" value="0">

    <label for="parking-no">No</label><br>
    <label for="vote">Numero minimo di stelle:</label>
    
    <input type="number" name="vote" id="vote" min="1" max="5"><br>
    <input type="submit" value="Cerca">
</form>