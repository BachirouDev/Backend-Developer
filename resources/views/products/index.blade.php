<!-- resources/views/products/index.blade.php -->

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
