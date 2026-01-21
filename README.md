# Carte-d-etudiant-numerique-avec-Qr-code
Plateforme web pour la gestion et la consultation de carte d'etudiant
Université Joseph Ki-Zerbo
UFR/SEA
Enseignant : Lionel Marcus G. KABORET
Lundi 12 Janvier 2026
Projet- Programmation Web et Framework
Carte d’Étudiant Numérique avec QR Code
Cahier des charges
Vous devez réaliser une application web permettant la gestion et la consultation de cartes
d’étudiants numériques accessibles via un QR Code. L’application devra simuler un système
réel utilisé dans un établissement universitaire pour l’identification des étudiants.
Les fonctionnalités attendues sont les suivantes :
— Authentification (Administrateur) : Implémentation d’un système d’authentification
sécurisé permettant à un administrateur d’accéder à l’interface de gestion;
— Gestion des étudiants : L’administrateur doit pouvoir créer, modifier et supprimer des
étudiants avec les informations suivantes :
— INE (unique);
— Nomet prénom;
— Filière;
— Niveau;
— Année académique;
— Photo de l’étudiant.
— Carte d’étudiant numérique : Chaque étudiant possède une carte numérique unique
contenant :
— Unnuméro de carte;
— UnQRCode généré automatiquement;
— Unstatut (active, suspendue ou expirée);
— Une date de création et une date d’expiration.
— Page publique via QR Code : Le scan du QR Code doit rediriger vers une page
publique affichant uniquement :
— Nomet prénom de l’étudiant;
— Photo;
— Filière;
— Statut de la carte (valide ou non).
— Gestion du statut de la carte : L’administrateur doit pouvoir activer, suspendre ou
expirer une carte d’étudiant;
— Séparation des accès : Les pages d’administration doivent être protégées et inaccessibles
au public;
— Toute autre fonctionnalité pertinente et justifiée pourra être ajoutée.
Travail à faire
En vous basant sur vos connaissances en PHP, Laravel, HTML, CSS, MySQL et JavaScript, vous
devez concevoir et développer cette application web fonctionnelle.
1
Indications
— Ce projet est un travail à réaliser en groupe restreint (2 personnes maximum, excep
tionnellement 3);
— L’utilisation d’outils d’intelligence artificielle est autorisée uniquement à des fins
d’apprentissage (compréhension d’erreurs, documentation). Chaque groupe devra être
capable d’expliquer et de justifier son code lors d’une présentation;
— Date limite de remise : 31/01/2026 à 23h59mn;
— Mode de remise :
— Leprojet doit obligatoirement être déposé sur GitHub;
— Ledépôt peut être public ou privé (dans ce cas, l’enseignant devra être invité);
— LeliendudépôtGitHubdevraêtrecommuniquéparmailàl’adresse marcus.kaboret@ukz.bf
(au plus tard le 31/01/2026)
— Contenu obligatoire du dépôt GitHub :
— Lecode source complet de l’application;
— Unfichier README.md décrivant :
— le sujet du projet;
— les membres du groupe;
— les étapes d’installation;
— les fonctionnalités principales;
— Des commits réguliers reflétant l’évolution réelle du travail.
