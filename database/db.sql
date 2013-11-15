/*--Database Structure
--Project: DEAL
--Team: 1
-- HIGH-TECH 
*/
drop table if exists categories;

drop table if exists commandes;

drop table if exists deals;

drop table if exists utilisateurs;

drop table if exists villes;

/*==============================================================*/
/* Table : Categorie                                            */
/*==============================================================*/
create table categories
(
   id                   int,
   intitule             varchar(254)
);

/*==============================================================*/
/* Table : Commande                                             */
/*==============================================================*/
create table commandes
(
   id                   int,
   user_id              int,
   deal_id              int,
   quantite             int,
   prixTotal            double,
   estPayer             int
);

/*==============================================================*/
/* Table : Deal                                                 */
/*==============================================================*/
create table deals
(
   id                   int,
   titre                varchar(254),
   description          varchar(350),
   conditions           varchar(350),
   image                varchar(254),
   fournisseur          varchar(100),
   adresse              varchar(254),
   ville                varchar(50),
   longitude            float,
   latitude             float,
   dateAjout            datetime,
   dateFin              datetime,
   prixInitial          double,
   prixReduit           double,
   qteDisponible        int,
   maxParAchat          int,
   isFeatured           bool,
   categorie_id         int
);

/*==============================================================*/
/* Table : Utilisateur                                          */
/*==============================================================*/
create table utilisateurs
(
   id                   int,
   id_oauth             varchar(254),
   nom                  varchar(254),
   prenom               varchar(254),
   genre                char(1),
   email                varchar(254),
   motDePasse           varchar(254),
   telephone            varchar(254),
   ville                varchar(254),
   type                 int
);

/*==============================================================*/
/* Table : Ville                                                */
/*==============================================================*/
create table villes
(
   id                   int,
   nomVille             varchar(254)
);
