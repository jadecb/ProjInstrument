
CREATE TABLE Client(
   numClient INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   mail VARCHAR(100),
   dateNaissance DATE,
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
   familleInstrument VARCHAR(50),
   materiauxPrincipal VARCHAR(50),
   couleur INT,
   largeur INT,
   longeur INT,
   hauteur INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoArticle(numArticle)
);

CREATE TABLE Guitare(
   numArticle INT,
   materiauxManche VARCHAR(50),
   type VARCHAR(50),
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
   type VARCHAR(50),
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
   type VARCHAR(50),
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
   type VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE fluteABec(
   numArticle INT,
   nbrTube INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Flute(numArticle)
);

CREATE TABLE flutePan(
   numArticle INT,
   nbrTube INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Flute(numArticle)
);

CREATE TABLE Tuba(
   numArticle INT,
   nbrPiston VARCHAR(50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);

CREATE TABLE Trombonne(
   numArticle INT,
   type VARCHAR(50),
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
   type VARCHAR(50),
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

CREATE TABLE infoAccessoire(
   numAccessoire INT,
   fournisseur VARCHAR(50),
   materiaux VARCHAR(50),
   marque VARCHAR(50),
   numArticle INT NOT NULL,
   PRIMARY KEY(numAccessoire),
   UNIQUE(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoArticle(numArticle)
);

CREATE TABLE accessoireCorde(
   numAccessoire INT,
   PRIMARY KEY(numAccessoire),
   FOREIGN KEY(numAccessoire) REFERENCES infoAccessoire(numAccessoire)
);

CREATE TABLE accessoireMediator(
   numAccessoire INT,
   PRIMARY KEY(numAccessoire),
   FOREIGN KEY(numAccessoire) REFERENCES infoAccessoire(numAccessoire)
);

CREATE TABLE accessoireMetronome(
   numAccessoire INT,
   PRIMARY KEY(numAccessoire),
   FOREIGN KEY(numAccessoire) REFERENCES infoAccessoire(numAccessoire)
);

CREATE TABLE accessoireArchet(
   numAccessoire INT,
   materiauxPoils VARCHAR(50),
   PRIMARY KEY(numAccessoire),
   FOREIGN KEY(numAccessoire) REFERENCES infoAccessoire(numAccessoire)
);

CREATE TABLE fluteTraversiere(
   numArticle INT,
   nbrBouton INT,
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES Flute(numArticle)
);

INSERT INTO Client VALUES (1,"admin","admin","paul@gmail.com","2000-02-02", "12345678", true);
