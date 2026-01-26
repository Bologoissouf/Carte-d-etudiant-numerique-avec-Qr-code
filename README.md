<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
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
>>>>>>> 8a92bc912233b40e13abbaca76459e92b28d22c0
