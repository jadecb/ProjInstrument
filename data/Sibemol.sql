CREATE TABLE Client(
   numClient INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   adresse VARCHAR(150),
   mail VARCHAR(100),
   dateNaissance DATE,
   PRIMARY KEY(numClient)
);

CREATE TABLE Accessoire(
   numAccessoire INT,
   quantite INT,
   nom VARCHAR(50),
   typeAccessoire VARCHAR(50),
   prix VARCHAR(50),
   fournisseur VARCHAR(50),
   marque VARCHAR(50),
   materiaux VARCHAR(50),
   typeMetronome VARCHAR(50),
   tempoMax VARCHAR(50),
   PRIMARY KEY(numAccessoire)
);

CREATE TABLE Instrument(
   numArticle INT,
   quantite INT,
   familleInstrument VARCHAR(50),
   typeInstrument VARCHAR(50),
   sousTypeInstrument VARCHAR(50),
   nom VARCHAR(50),
   prix CURRENCY,
   materiauxPrincipal VARCHAR(50),
   couleur VARCHAR(50),
   largeur VARCHAR(50),
   longeur VARCHAR(50),
   hauteur VARCHAR(50),
   materiauxBoitier VARCHAR(50),
   materiauxManche VARCHAR(50),
   typeFinition VARCHAR(50),
   nbrBouton VARCHAR(50),
   nbrTrou VARCHAR(50),
   nbrTube VARCHAR(50),
   nbrTouche VARCHAR(50),
   materiauxTouche VARCHAR(50),
   nbrSon VARCHAR(50),
   typePeau VARCHAR(50),
   typeCalebasse VARCHAR(50),
   PRIMARY KEY(numArticle)
);

INSERT INTO Client VALUES (1,"Rickie","Paul","ruedelarepublique","paulgmail",02/04/2000);