<!-- resources/views/product/edit.blade.php -->
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

/* Style du bouton Modifier */
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

/* Style du champ de date de création (lecture seule) */
#creationDate {
    background-color: #f2f2f2;
    cursor: not-allowed;
}
</style>
<h1>Modifier le produit</h1>

<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" placeholder="Nom du produit" value="{{ $product->name }}" required><br>

    <label for="priceHt">Prix HT :</label>
    <input type="number" id="priceHt" name="priceHt" placeholder="Prix HT" value="{{ $product->priceHt }}" required><br>

    <label for="creationDate">Date de création :</label>
    <input type="text" id="creationDate" name="creationDate" value="{{ $product->creationDate }}" readonly><br>

    <input hidden type="text" id="dateUpdate" name="dateUpdate" value="{{ $product->dateUpdate }}"><br>

    <button type="submit">Modifier</button>
</form>
