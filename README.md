Projet de Test en Ligne - Izichange
Ce projet contient les exercices réalisés pour le test en ligne chez Izichange.

Installation
Cloner le dépôt :
git clone https://github.com/BachirouDev/Backend-Developer.git

Installer les dépendances :
composer install

Configurer le fichier .env :
Copiez le fichier .env.example et renommez-le en .env.
Configurez les informations de la base de données (nom, utilisateur, mot de passe).
Assurez-vous que la variable DB_DATABASE est définie sur "izidb".

Exécuter les migrations:
php artisan migrate

Utilisation
Une fois le projet installé, vous pouvez accéder aux différentes fonctionnalités via les URL suivantes :

Liste des produits : http://localhost:8000/product
Ajouter un nouveau produit : http://localhost:8000/product/new
Modifier un produit existant : http://localhost:8000/product/edit/{id}
Supprimer un produit : http://localhost:8000/product/delete/{id}


