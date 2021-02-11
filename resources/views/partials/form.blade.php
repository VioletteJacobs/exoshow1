<div class="container">
    <form action="/add_ingredient" method="POST">
        @csrf
        <label for="">Nom: 
            <input type="text" name="nom">
        </label>
        <label for="">Poids: 
            <input type="text" name="quantite">
        </label>
        <label for="">Image: 
            <input type="text" value=".jpeg" name="photo">
        </label>
        <button  class="btn btn-dark" type="submit">Ajouter</button>
    </form>
</div>