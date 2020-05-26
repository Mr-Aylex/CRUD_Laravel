<html>
    <a href="/">Menu</a>
<form action="nouveau" method="POST" class="">
    {{ csrf_field() }}
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
    </div>
    <input type="submit" value="Valider">
</form>


</html>