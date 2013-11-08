Deal1
=====

L’objectif de ce projet est la création d’un site Web commercial dédié à la vente de deals. Deux types 

d’utilisateurs peuvent accéder au site : des clients et des administrateurs. 

Ce projet devra répondre au cahier des charges décrit dans les sections suivantes.

Le cahier des charges pour l’application Web

Dans cette section, nous présentons les spécifications du projet : les fonctionnalités qui doivent être 

offertes par le site Web aux clients et aux administrateurs et les technologies qui doivent être utilisées 

pour le développement du site Web.

1. Les fonctionnalités attendues pour les clients

A. Navigation : 

La navigation correspond au processus de visite (consultation) du site web. Le site Web doit être 

composé d’un ensemble de pages (dont la page d'accueil) qui peuvent être consultées en suivant des 

hyperliens à l'intérieur du site. Une visite du site peut commencer par n'importe quelle page.

B. Consultation du catalogue: 

Les clients doivent être capables de consulter les produits mis en vente dans le site. Un certain nombre 

de pages (minimum 3 pages) doit être dédié aux produits vendus. Les catégories des produits sont 

choisies librement par les étudiants.

C. Panier : 

Un panier permet aux clients, pendant la consultation du site, d’ajouter des produits qu’ils souhaitent 

acheter. Lors de l’ajout d’un produit, ils pourront spécifier des caractéristiques du produit (couleur, 

quantité... et autres si disponible). Le panier doit indiquer le prix total des produits ajoutés. Il permet 

aux clients de modifier les produits du panier (modification de la quantité, suppression d’un produit...). 

Une page doit être consacrée pour la consultation et/ou la modification du panier.

Option : les clients peuvent enregistrer le panier et le récupérer lors de la prochaine connexion. Il faut 

ainsi vérifier la disponibilité des produits ajoutés précédemment dans le panier. Enfin, le contenu du 

panier doit être mis à jour.

D. Espace Personnel :

Chaque client doit avoir un espace personnel. Il contiendra des informations personnelles du client 

(prénom, nom, sexe, lieu et date de naissance, adresse) et des informations sur les achats du client 

(historique des commandes). Une page doit être consacrée pour la consultation et/ou la gestion de 

l’espace personnel. Le site doit offrir des fonctionnalités permettant aux clients de gérer leur espace 

personnel :

a. Inscription : les nouveaux clients doivent avoir la possibilité de s’inscrire (création d’un espace). 

L’inscription doit être réalisée par le biais d’une page sous la forme d’un formulaire. Il permettra aux 

utilisateurs d’introduire les informations. Les informations devront subir un processus de vérification de 

conformité (login et email uniques et valides (minimum 6 caractères), adresse, téléphone,...). Les règles 

de conformité sont à établir par le groupe d’étudiants.

b. Modification : les clients inscrits peuvent modifier leurs données personnelles.

c. Consultation des commandes : les clients peuvent consulter la situation et/ou l’historique des 

commandes. Une commande peut avoir une des situations suivantes : en préparation, en cours 

d’expédition et expédiée.

d. Clôture de l’espace personnel : les clients peuvent clôturer leur compte à tout moment.

E. Achat : 

Cette étape correspond à la validation de l’achat des produits ajoutés au panier. L’achat est aussitôt 

ajouté à la liste des commandes. Pour effectuer l’achat, le client doit être connecté. Une page pour la 

validation doit être réalisée. Elle contiendra le récapitulatif des produits achetés (ajoutés dans le panier).

F. Authentification des clients:

Les clients doivent s’identifier pour accéder à leur espace personnel et pour valider l’achat des produits 

ajoutés au panier. L’authentification peur être réalisée soit par le biais d’une page indépendante soit par 

le biais d’un espace fixe intégré dans les pages du site.

2. Les fonctionnalités attendues pour les administrateurs

Comme pour les clients, les administrateurs ont accès à un espace personnel qui leur offre un ensemble 

de fonctionnalités leur permettant de gérer les produits, les comptes et les commandes des clients.

A. Authentification :

Le processus d’identification des administrateurs est le même de celui des clients, sauf qu’ils sont 

dirigés vers un espace personnel différent de celui des clients. Une fois connecté à leur espace, les 

administrateurs peuvent effectuer les fonctionnalités suivantes.

B. Gestion des produits :

Les administrateurs peuvent ajouter, modifier et/ou supprimer des produits du catalogue. Pour cela, 

une page principale doit être réalisée. Elle contiendra la liste des produits disponible et permettra l’ajout 

de nouveaux produits. Pour ajouter un nouveau produit, l’administrateur sera reconduit vers une autre 

page (formulaire) qui lui permettra de fournir les informations sur le produit (nom, description, quantité 

et image).En sélectionnant un produit disponible dans la page principale, l’administrateur pourra 

modifier ou supprimer le produit. Cela le conduira vers une autre page qui lui permettra de modifier les 

informations. 

C. Gestion des clients :

Une page doit être réalisée pour la gestion des clients. Elle présentera la liste des clients inscrits, 

permettra d’accéder aux détails d’un client et/ou de supprimer un client.

D. Gestion des commandes :

La gestion des commandes consiste à mettre à jour l’état (statut) actuel d’une commande : en 

préparation, en cours d’expédition ou expédiée. L’administrateur pourra sélectionner une commande et 

modifier son statut. Pour cette fonctionnalité, une page devra être réalisée. 

3. Les technologies exigées

I. HTML, CSS et Javascript

Cette première partie correspond à la partie “côté client”. Autrement dit, elle concerne la conception 

des pages Web du site et le processus de vérification des données entrées par les utilisateurs (clients et 

administrateurs).La structure et le style utilisés par la conception des pages doivent rendre l’aspect des 

pages du site unifié. Pour cela, le texte de la page et sa structure doivent être écrit en HTML et la mise 

en page via les feuilles de style CSS.

Enfin, les données des formulaires doivent être traitées en Javascript.

II. PHP orientée objet

Les sessions sont adaptées à la sauvegarde de données confidentielles ou importantes. Elles seront 

utilisées pour (i) authentifier un visiteur, (ii) garder des informations sur un utilisateur tout au long de 

sa présence dans l’application (iii) gérer le panier d’achat et (iv) mettre en place des formulaires en 

plusieurs parties et retenir les informations fournies dans les pages précédentes.

III. PHP, LAMP, MySQL

Cette partie correspond au côté serveur de l’application et à la communication client/serveur. Il faudra 

mettre en place une base de données et sa gestion sur serveur XAMPP (appelé aussi LAMP ou WAMP). 

La base de données servira à gérer les informations sur les produits du catalogue, les commandes, les 

clients et les administrateurs. La communication entre le client et le serveur se fera en utilisant Php.
