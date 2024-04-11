<!-- resources/views/products/index.blade.php -->
<style>
    table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Style de l'en-tête du tableau */
th {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Style des cellules du tableau */
td {
    border: 1px solid #ddd;
    padding: 8px;
}

/* Style des lignes alternées (pour faciliter la lecture) */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style des boutons (par exemple pour Modifier et Supprimer) */
.action-button {
    background-color: #4CAF50;
    color: white;
    padding: 6px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.action-button:hover {
    background-color: #45a049;
}
</style>
<h1>Liste des produits</h1>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prix HT</th>
            <th>Date de création</th>
            <th>Dernière mise à jour</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->priceHt }}</td>
                <td>{{ $product->creationDate }}</td>
                <td>{{ $product->dateUpdate }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
