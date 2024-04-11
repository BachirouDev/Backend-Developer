<!-- resources/views/product/new.blade.php -->
<style>
    form {
    max-width: 400px;
    margin: 0 auto;
}

/* Style des étiquettes des champs */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Style des champs de saisie */
input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Style du bouton Ajouter */
button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

/* Style du message d'erreur */
.error-message {
    color: red;
    margin-top: 5px;
}
h1 {
    text-align: center;
}
</style>
<h1>Ajouter un nouveau produit</h1>

<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" placeholder="Nom du produit" required><br>

    <label for="priceHt">Prix HT :</label>
    <input type="number" id="priceHt" name="priceHt" placeholder="Prix HT" required><br>

    <label for="creationDate" hidden>Date de création :</label>
    <input type="hidden" id="creationDate" name="creationDate" value="{{ now() }}"><br>

    <button type="submit">Ajouter</button>
</form>
