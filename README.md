# Projet de cours : driving-fast

Projet e-commerce de vente de véhicules de luxe.

## Connexion

Pour le formulaire de connexion, suivez les étapes suivantes :

1. Créer un formulaire de connexion avec les champs nom d'utilisateur et mot de passe.
2. Afficher le bouton "Me connecter" uniquement si les champs nom d'utilisateur et mot de passe sont remplis.
3. En cliquant sur "Me connecter", chercher l'utilisateur correspondant dans un fichier json.
4. Si l'utilisateur correspond, enregistrer son id dans un cookie de session.
5. Si aucun utilisateur ne correspond, afficher un message d'erreur correspondant en popup (popup qui disparaît en cliquant dessus).

## Afficher une liste d'articles

Pour afficher une liste d'articles, suivez les étapes suivantes :

1. Afficher une liste d'articles avec une photo, un titre, une catégorie et un prix pour chaque article.
2. Permettre d'afficher uniquement les articles correspondant à un prix maximum ou minimum.
3. Afficher uniquement les articles des catégories sélectionnées.
4. Afficher uniquement les articles dont le titre contient un terme recherché.
5. Toutes ces recherches sont complémentaires et les filtres sont dynamiques (click sur une catégorie, terme à rechercher dans le titre, etc.).

## Remplir le panier

Pour remplir le panier, suivez les étapes suivantes :

1. Chaque article est lié à deux boutons "+" ou "-" permettant d'incrémenter ou diminuer le nombre d'articles présents dans le panier.
2. Le panier est sauvé dans un ou plusieurs cookies.
3. Un bouton permet d'afficher le panier à tout moment : liste des articles, quantité de chaque article + prix total.
4. Un bouton permet d'envoyer le contenu du panier au back-end qui vérifie si assez d'articles sont disponibles pour répondre à la commande.
5. Si le back-end renvoie un succès, vider le panier. Sinon, afficher le message d'erreur.

# Côté technique

Le projet doit respecter les critères suivants :

1. Compréhension des demandes.
2. Architecture du code (arborescence des fichiers).
3. Bonne utilisation des techniques vues au cours.
4. Indentation et clarté du code.
5. Graphisme et ergonomie.
