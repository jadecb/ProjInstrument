CREATE TABLE Client(
   numClient INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   mail VARCHAR(100),
   dateNaissance DATE,
   mdp char(40),
   admin boolean,
   PRIMARY KEY(numClient)
);

INSERT INTO Client VALUES (1,"admin","admin","paul@gmail.com","2000-02-02", "12345678", true);