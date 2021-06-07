# SPA

LES ADOPTIONS RESPONSABLES

## Projet par groupe de ~4

Vous créez un site pour une association qui aide les animaux à trouver un nouveau foyer.

Sur la page d'accueil => description du site, quelques animaux qui sont présentés, un encart don

Il y a une page qui présente tous les animaux, on peut filtrer par catégorie (chien, chat, ...) et d'autres filtres (age, localisation)

Une page de l'animal, avec formulaire de contact pour le réserver.

Inscription/ connexion de l'utilisateur

Paiement en ligne des frais de réservation

Boutique pour vente de produits pour les animaux (nourriture, laisses, ...)

Un blog (actualités de l'asso, infos sur les derniers animaux récupérés).

On stocke en BDD

# Résumé simplifié

1. Accueil :
    Description du site
    Liste animaux (court)
    Don

2. Page Animaux:
    filtre
    liste de tous les animaux

3. Page Animal:
    Tout les infos de l'animal
    Formulaire contact pour réserver

4. Inscription/Connexion Utilisateur

5. Paiement en ligne formulaire(fake)

6. Blog:
    liste des articles

7. Article de blog
    un article de blog

8. Boutique de produits dérivé
    liste des produits

9. Produit dérivé
    une page produit

Animal:
    Int id
    String Nom
    String Espece
    String Taille
    String Race
    String Sexe
    Date DateNaissance
    String Couleurs
    String Description
    String Localisation
    Bool Urgence
    Int Status (0: pas actif, 1: dispo en adoption, 2: adopter, 3: urgent) (pas sur pour le status)

Utilisateur:
    Int id
    String Nom
    String Prenom
    String Sexe
    Date DateNaissance
    String Email
    String Mdp
    Int Status (??)

Produit: (Dérivé)
    Int id
    String Nom
    String Type
    String Description
    Float Prix
    Int Stock

Article: (Blog)
    Int id
    String Titre
    String Texte
    String Auteur
    Date Date

Paiement : (Don/Frais de réservation)
    Utilisateur id
    Int Numero Carte de crédit
    Int Cvc
    Date Date
    String Nom du titulaire

Arborescence :
    App
        Animals
        Utilisateur
        Content

    templates
        indexView.php

        blogView.php
        articleView.php

        animauxView.php
        animalView.php

        produitDeriveView.php
        produitView.php

    Vendor
        autoload
