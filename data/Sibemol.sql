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

CREATE TABLE Accessoire(
   numAccessoire INT,
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

CREATE TABLE users(
   login VARCHAR(50),
   mdp VARCHAR(50),
   PRIMARY KEY(login)
);

CREATE TABLE Instrument(
   numArticle INT,
   familleInstrument VARCHAR(50),
   nom VARCHAR(50),
   prix CURRENCY,
   materiauxPrincipal VARCHAR(50),
   couleur VARCHAR(50),
   largeur VARCHAR(50),
   longeur VARCHAR(50),
   hauteur VARCHAR(50),
   PRIMARY KEY(numArticle)
);

CREATE TABLE Guitare(
   numArticle INT,
   materiauxManche VARCHAR(50),
   type VARCHAR(50),
   materiauxBoitier VARCHAR(50),
   nbrCordes VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Piano(
   numArticle INT,
   nbrTouche VARCHAR(50),
   materiauxTouche VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Banjo(
   numArticle INT,
   nbrCordes VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Violon(
   numArticle INT,
   type VARCHAR(50),
   typeFinition VARCHAR(50),
   nbrCordes VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Luth(
   numArticle INT,
   nbrCordes VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Harpe(
   numArticle INT,
   type VARCHAR(50),
   nbrCordes VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Accordeon(
   numArticle INT,
   nbrBouton VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Flute(
   numArticle INT,
   type VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE fluteABec(
   numArticle INT,
   nbrTube VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Flute(numArticle)
);

CREATE TABLE flutePan(
   numArticle INT,
   nbrTube VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Flute(numArticle)
);

CREATE TABLE Tuba(
   numArticle INT,
   nbrPiston VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Trombonne(
   numArticle INT,
   type VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Trompette(
   numArticle INT,
   nbrTouche VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Batterie(
   numArticle INT,
   type VARCHAR(50),
   typePeau VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Maracas(
   numArticle INT,
   typeCalebasse VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Djembe(
   numArticle INT,
   typePeau VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE Triangle(
   numArticle INT,
   poids VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

CREATE TABLE fluteTraversiere(
   numArticle INT,
   nbrBouton VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Flute(numArticle)
);
CREATE TABLE Possede(
   numAccessoire INT,
   numArticle INT,
   PRIMARY KEY(numAccessoire, numArticle),
   FOREIGN KEY(numAccessoire) REFERENCES Accessoire(numAccessoire),
   FOREIGN KEY(numArticle) REFERENCES Instrument(numArticle)
);

INSERT INTO Client VALUES (1,"admin","admin","paul@gmail.com","2000-02-02", "12345678", true);
