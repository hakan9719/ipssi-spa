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

Accueil :
    Description du site
    Liste animaux (court)
    Don

Page Animaux:
    filtre
    liste de tous les animaux

Page Animal:
    Tout les infos de l'animal
    Formulaire contact pour réserver

Inscription/Connexion Utilisateur

Paiement en ligne formulaire(fake)

Blog

Boutique de produits dérivé

Animal:
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
    String Nom
    String Prenom
    String Sexe
    Date DateNaissance
    String Email
    String Mdp
    int Status (??)

Produit: (Dérivé)
    String Nom
    String Type
    String Description
    Float Prix
    Int Stock

Article: (Blog)
    String Titre
    String Texte
    String Auteur
    Date Date

Payement : (Don/Frais de réservation)
    String Utilisateur
    Int Carte de crédit
    Int Cvc
    Date Date
    String Nom du titulaire
