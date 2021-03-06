
CREATE TABLE Client(
   numClient INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   mail VARCHAR(100),
   dateNaissance DATE,
   mdp VARCHAR(50),
   gestionnaire boolean,
   PRIMARY KEY(numClient)
);

CREATE TABLE infoArticle(
   numArticle INT,
   nom VARCHAR(50),
   prix CURRENCY,
   PRIMARY KEY(numArticle)
);


CREATE TABLE infoInstrument(
   numArticle INT,
   materiauxPrincipal VARCHAR(50),
   couleur INT,
   largeur INT,
   longueur INT,
   hauteur INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoArticle(numArticle)
);

CREATE TABLE Guitare(
   numArticle INT,
   materiauxManche VARCHAR(50),
   typeGuitare VARCHAR(50),
   materiauxBoitier VARCHAR(50),
   nbrCordes INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Piano(
   numArticle INT,
   nbrTouche INT,
   materiauxTouche VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Banjo(
   numArticle INT,
   nbrCordes INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Violon(
   numArticle INT,
   typeViolon VARCHAR(50),
   typeFinition VARCHAR(50),
   nbrCordes INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Luth(
   numArticle INT,
   nbrCordes INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Harpe(
   numArticle INT,
   typeHarpe VARCHAR(50),
   nbrCordes INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Accordeon(
   numArticle INT,
   nbrBouton INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Flute(
   numArticle INT,
   typeFlute VARCHAR(50),
   nbrTrou INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Tuba(
   numArticle INT,
   nbrPiston VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Trombone(
   numArticle INT,
   typeTrombone VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Trompette(
   numArticle INT,
   nbrTouche INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Batterie(
   numArticle INT,
   typeBatterie VARCHAR(50),
   typePeau VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Maracas(
   numArticle INT,
   typeCalebasse VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Djembe(
   numArticle INT,
   typePeau VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Triangle(
   numArticle INT,
   poids FLOAT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Harmonica(
   numArticle INT,
   nbrTrou INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Saxophone(
   numArticle INT,
   nbrTouche INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);


CREATE TABLE Accessoire(
   numArticle INT,
   fournisseur VARCHAR(50),
   materiaux VARCHAR(50),
   marque VARCHAR(50),
   typeAcc VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Article(numArticle)
);

CREATE TABLE Panier(
   numClient INT,
   numArticle INT,
   PRIMARY KEY(numClient,numArticle),
   FOREIGN KEY(numClient) REFERENCES Client(numClient),
   FOREIGN KEY(numArticle) REFERENCES Article(numArticle) 
);

INSERT INTO Client VALUES (1,"admin","admin","paul@gmail.com","2000-02-02", "12345678", true);
