/***************/
/******BOIS*****/
/***************/


/* ACCORDEONS */

insert into infoArticle values (1,'Accordéon rouge-argenté',50.50);
insert into infoInstrument values (1,'bois', 'rouge', 45,75,30);
insert into Accordeon values (1,37);

insert into infoArticle values (6, 'Accordéon en bois chêne', 75);
insert into infoInstrument values (6, 'bois', 'chene', 45,75,30);
insert into Accordeon values (6, 37);

insert into infoArticle values (11, 'Accordéon en bois enfant',25);
insert into infoInstrument values(11, 'bois', 'chene', 45,75,30);
insert into Accordeon values(11,24);

/* FLUTES */

insert into infoArticle values (16,'Flute à bec blanche en bois', 15);
insert into infoInstrument values (16, 'bois', 'blanc',25,4,4);
insert into Flute values (16, 'flute a bec',8);

insert into infoArticle values (21, 'Flute à bec en bois chêne',20);
insert into infoInstrument values (21, 'bois','chêne',25,4,4);
insert into Flute values (21, 'flute a bec',8);

insert into infoArticle values (26, 'Flute à bec en bois enfant marron et blanche',10);
insert into infoInstrument values (26, 'bois','marron',25,4,4);
insert into Flute values (26, 'flute a bec',8);


insert into infoArticle values (31, 'Flute de pan en bamboo', 55);
insert into infoInstrument values (31, 'bamboo', 'blanc',20,20,4);
insert into Flute values (31, 'flute de pan',20);

insert into infoArticle values (36, 'Flute de pan en bamboo blanc décoré enfant', 20);
insert into infoInstrument values (36, 'bamboo', 'blanc',13,13,6);
insert into Flute values (36, 'flute de pan',13);

insert into infoArticle values (41, 'Flute de pan en bamboo chêne', 34);
insert into infoInstrument values (41, 'bamboo', 'chene',16,16,4);
insert into Flute values (41, 'flute de pan',15);


insert into infoArticle values (46, 'Flute traversière argentée',850);
insert into infoInstrument values (46, 'argent', 'argent', 40,5,5);
insert into Flute values (46, 'flute traversiere',16);

insert into infoArticle values (51, 'Flute traversière argentée',450);
insert into infoInstrument values (51, 'argent', 'argent', 40,5,5);
insert into Flute values (51, 'flute traversiere',16);

insert into infoArticle values (56, 'Flute traversière argentée',699);
insert into infoInstrument values (56, 'argent', 'argent', 40,5,5);
insert into Flute values (56, 'flute traversiere',16);


/* HARMONICA */

insert into infoArticle values (61, 'Harmonica argent trois couleurs',45);
insert into infoInstrument values (61, 'argent','argent',12,5,3);
insert into Harmonica values (61,10);

insert into infoArticle values (66, 'Harmonica argent deux couleurs',30);
insert into infoInstrument values (66, 'argent','argent',12,5,3);
insert into Harmonica values (66,10);

insert into infoArticle values (71, 'Harmonica argenté doré',69.99);
insert into infoInstrument values (71, 'argent','argent',12,5,3);
insert into Harmonica values (71,10);

/* SAXOPHONE */

insert into infoArticle values (76, 'Saxophone cuivre-doré',469.99);
insert into infoInstrument values(76,'cuivre','doré',80,40,30);
insert into Saxophone values (76, 19);

insert into infoArticle values (81, 'Saxophone cuivre-doré',649.99);
insert into infoInstrument values(81,'cuivre','doré',80,40,30);
insert into Saxophone values (81,21);

insert into infoArticle values (86, 'Saxophone cuivre-doré',1149.99);
insert into infoInstrument values(86,'cuivre','doré',80,40,30);
insert into Saxophone values (86, 22);


/******************/
/******CLAVIER*****/
/******************/

/* Piano à queue */

insert into infoArticle values (3, 'Piano de concert à queue noir', 24999);
insert into infoInstrument values (3, 'erable', 'noir',150,99,146 );
insert into Piano values (3, 88, 'ivoire');

insert into infoArticle values (8, 'Piano à queue bleu', 9999);
insert into infoInstrument values (8, 'erable', 'bleu',150,99,146 );
insert into Piano values (8, 8, 'ivoire');

insert into infoArticle values (13, 'Piano de concert à queue blanc, type jazz', 19499);
insert into infoInstrument values (13, 'erable', 'blanc',150,99,146 );
insert into Piano values (13, 88, 'ivoire');

/* Piano droit */

insert into infoArticle values (18, 'Piano droit noir', 8750);
insert into infoInstrument values (18, 'erable', 'noir',150,120,60 );
insert into Piano values (18, 88, 'epicea');

insert into infoArticle values (23, 'Piano droit couleur chêne ', 4900);
insert into infoInstrument values (23, 'erable', 'chene',150,120,60 );
insert into Piano values (23, 88, 'epicea');

insert into infoArticle values(28, 'Piano droit', 12749);
insert into infoInstrument values (28, 'erable', 'noir',150,120,60 );
insert into Piano values (28, 88, 'tilleul');

/* Piano électrique */

insert into infoArticle values (33, 'Piano électrique noir pour joueur confirmé', 999.99);
insert into infoInstrument values (33, 'erable', 'noir',150,120,40 );
insert into Piano values (33, 88, 'epicea');

insert into infoArticle values (38, 'Piano électrique noir', 499.99);
insert into infoInstrument values (38, 'epicea', 'noir',150,120,40 );
insert into Piano values (38,88, 'plastique');

insert into infoArticle values (43, 'Piano éllectrique noir débutant sans pieds', 150.99);
insert into infoInstrument values (43, 'plastique', 'noir',150,30,40 );
insert into Piano values (43, 88, 'plastique');

/* Synthétiseur */

insert into infoArticle values (48, 'Synthétiseur 88 touches lestées', 799.99);
insert into infoInstrument values (48, 'plastique', 'noir',140,30,40 );
insert into Piano values (48, 88, 'plastique lesté');

insert into infoArticle values (53, 'Synthétiseur noir 88 touches', 399.99);
insert into infoInstrument values (53, 'epicea', 'noir',140,30,40 );
insert into Piano values (53,88, 'plastique');

insert into infoArticle values (58, 'Piano électrique noir débutant 61 touches', 99);
insert into infoInstrument values (58, 'plastique', 'noir',110,30,40 );
insert into Piano values (58, 61, 'plastique');


/******************/
/******Cordes******/
/******************/

/* Banjo */

insert into infoArticle values (5, 'Banjo 5 cordes débutant',49.99);
insert into infoInstrument values (5,'bois', 'blanc',79,38,10);
insert into Banjo values (5,5);

insert into infoArticle values (10, 'Banjo 5 cordes joueur confirmé',139);
insert into infoInstrument values (10,'bois', 'blanc',79,38,10);
insert into Banjo values (10,5);

insert into infoArticle values (15, 'Banjo 6 cordes joueur confirmé',149);
insert into infoInstrument values (15,'bois', 'blanc',79,38,10);
insert into Banjo values (15,6);

/* Guitare */

insert into infoArticle values (20, 'Guitare acoustique 6 cordes couleur chêne joueur débutant',139);
insert into infoInstrument values (20,'bois', 'chene',120,50.50,30);
insert into Guitare values (20, 'érable', 'acoustique', 'chêne', 6);

insert into infoArticle values (25, 'Guitare acoustique 6 cordes couleur beige',399.99);
insert into infoInstrument values (25,'bois', 'chene',120,50.50,30);
insert into Guitare values (25, 'érable', 'acoustique', 'noyer', 6);

insert into infoArticle values (30, 'Guitare acoustique 6 cordes bicolore joueur confirmé',849);
insert into infoInstrument values (30,'bois', 'chene',120,50.50,30);
insert into Guitare values (30, 'érable', 'acoustique', 'épicéa', 6);


insert into infoArticle values (35, 'Guitare basse 4 cordes couleur noir joueur débutant',239);
insert into infoInstrument values (35,'bois', 'noir',120,50.50,30);
insert into Guitare values (35, 'érable', 'basse', 'chêne', 6);

insert into infoArticle values (40, 'Guitare basse 4 cordes couleur chêne',439);
insert into infoInstrument values (40,'bois', 'chene',120,50.50,30);
insert into Guitare values (40, 'érable', 'basse', 'épicéa', 6);

insert into infoArticle values (45, 'Guitare basse 4 cordes couleur flamme joueur confirmé',839);
insert into infoInstrument values (45,'bois', 'flamme',120,50.50,30);
insert into Guitare values (45, 'érable', 'basse', 'noyer', 6);


insert into infoArticle values (50, 'Guitare électrique 6 cordes noire et blanche joueur débutant',199);
insert into infoInstrument values (50,'bois', 'noir et blanc',120,50.50,30);
insert into Guitare values (50, 'érable', 'electrique', 'noyer', 6);

insert into infoArticle values (55, 'Guitare électrique 6 cordes noire et blanche joueur confirmé',499.99);
insert into infoInstrument values (55,'bois', 'noir et blanc',120,50.50,30);
insert into Guitare values (55, 'érable', 'electrique', 'chêne', 6);

insert into infoArticle values (60, 'Guitare électrique 6 cordes noire, blanche et orange joueur expert',845);
insert into infoInstrument values (60,'bois', 'noir blanc et orange',120,50.50,30);
insert into Guitare values (60, 'érable', 'electrique', 'épicéa', 6);

/* Harpe */


insert into infoArticle values (65, 'Harpe andine couleur chêne - collection',8950);
insert into infoInstrument values (65, 'bois', 'chêne',150,76,20 );
insert into Harpe values (65,'andine' ,46);

insert into infoArticle values (70, 'Harpe celtique couleur chêne pour joueur débutant',299.99);
insert into infoInstrument values (70, 'bois', 'chêne',130,76,20 );
insert into Harpe values (70,'celtique' ,34);

insert into infoArticle values (75, 'Harpe celtique beige pour joueur confirmé',799.99);
insert into infoInstrument values (75, 'bois', 'beige',150,76,20 );
insert into Harpe values (75,'celtique' ,36);

insert into infoArticle values (80, 'Harpe celtique de concert, ornée',2499);
insert into infoInstrument values (80, 'bois', 'chêne',150,76,20 );
insert into Harpe values (80,'celtique' ,38);


/* Luth */

insert into infoArticle values (85, 'Luth beige 8 double cordes', 259);
insert into infoInstrument values (85, 'bois','beige',75,30,20);
insert into Luth values (85, 16);

insert into infoArticle values (90, 'Luth beige avec sa valise', 590);
insert into infoInstrument values (90, 'bois','beige',75,30,20);
insert into Luth values (90, 16);


/* Violon */


insert into infoArticle values (95, 'Violon de collection',20100);
insert into infoInstrument values (95, 'bois', 'chêne foncé',58,30,10);
insert into Violon values (95, 'violon','verni',4);

insert into infoArticle values (100, 'Violon beige pour débutant',499.99);
insert into infoInstrument values (100, 'bois', 'beige',58,30,10);
insert into Violon values (100, 'violon','verni',4);

insert into infoArticle values (105, 'Contrebasse de concert',2049);
insert into infoInstrument values (105, 'bois', 'chêne foncé',180,110,40);
insert into Violon values (105, 'contrebasse','verni',3);

insert into infoArticle values (110, 'Violoncelle de concert couleur chêne clair',1850);
insert into infoInstrument values (110, 'bois', 'chêne',110,70,30);
insert into Violon values (110, 'violoncelle','verni',4);

insert into infoArticle values (115, 'Violoncelle débutant couleur chêne foncé',450);
insert into infoInstrument values (115, 'bois', 'chêne foncé',110,70,30);
insert into Violon values (115, 'violoncelle','verni',4);

insert into infoArticle values (120, 'Violon de collection',20100);
insert into infoInstrument values (120, 'bois', 'chêne foncé',58,30,10);
insert into Violon values (120, 'violon','verni',4);

insert into infoArticle values (125, 'Violoncelle de collection',18900);
insert into infoInstrument values (125, 'bois', 'chêne foncé',110,70,30);
insert into Violon values (125, 'violoncelle','verni',4);

insert into infoArticle values (130, 'Contrebasse de collection',24900);
insert into infoInstrument values (130, 'bois', 'chêne foncé',180,110,40);
insert into Violon values (130, 'contrebasse','verni',3);

insert into infoArticle values (135, 'Contrebasse de concert avec sa valise couleur chêne foncé',2490);
insert into infoInstrument values (135, 'bois', 'chêne foncé',180,110,40);
insert into Violon values (135, 'contrebasse','verni',3);


/****************/
/****Cuivre******/
/****************/

/* Trombone */

insert into infoArticle values (2, 'Trombone alto à coulisse',900);
insert into infoInstrument values (2, 'cuivre', 'doré', 140,40,40);
insert into Trombone values (2, 'alto');

insert into infoArticle values (7, 'Trombone soprano à coulisse',800);
insert into infoInstrument values (7, 'cuivre', 'doré', 80,40,40);
insert into Trombone values (7, 'soprano');

insert into infoArticle values (12, 'Trombone tenor à coulisse',750);
insert into infoInstrument values (12, 'cuivre', 'doré', 180,40,40);
insert into Trombone values (12, 'tenor');

/* Trompette */

insert into infoArticle values (17, 'Trompette cuivre pour débutant',299.99);
insert into infoInstrument values (17, 'cuivre','doré',60,40,20);
insert into Trompette values (17,3);

insert into infoArticle values (22, 'Trompette cuivre pour joueur confirmé',799.99);
insert into infoInstrument values (22, 'cuivre','doré',60,40,20);
insert into Trompette values (22,3);

insert into infoArticle values (27, 'Trompette cuivre de concert',1799.99);
insert into infoInstrument values (27, 'cuivre','doré',60,40,20);
insert into Trompette values (27,3);

/* Tuba */

insert into infoArticle values (32, 'Tuba pour débutant',499.99);
insert into infoInstrument values (32, 'cuivre', 'doré',86,30,20);
insert into Tuba values (32,3);

insert into infoArticle values (37, 'Tuba pour joueur confirmé',899.99);
insert into infoInstrument values (37, 'cuivre', 'doré',86,30,20);
insert into Tuba values (37,4);

insert into infoArticle values (42, 'Tuba pour joueur expert',1499.99);
insert into infoInstrument values (42, 'cuivre', 'doré',86,30,20);
insert into Tuba values (42,4);

/*****************/
/***Percussions***/
/*****************/

/* Batterie */
/*   numArticle INT,
   type VARCHAR(50.50),
   typePeau VARCHAR(50.50),
   PRIMARY KEY(numArticle),
   FOREIGN KEY(numArticle) REFERENCES infoInstrument(numArticle)
);*/
insert into infoArticle values (34, 'Batterie électrique pour joueur confirmé', 399.99);
insert into infoInstrument values (34,'plastique','noir',200,150,150);
insert into Batterie values (34, 'electrique', 'caoutchouc');

insert into infoArticle values (39, 'Batterie électrique pour joueur confirmé + tabouret', 499.99);
insert into infoInstrument values (39,'plastique','noir et blanc',200,150,150);
insert into Batterie values (39, 'electrique', 'caoutchouc');

insert into infoArticle values (44, 'Kit batterie électrique + ampli + livret d''apprentissage', 249.99);
insert into infoInstrument values (44,'plastique','noir',200,150,150);
insert into Batterie values (44, 'electrique', 'caoutchouc');

insert into infoArticle values (4, 'Batterie pour joueur débutant', 499.99);
insert into infoInstrument values (4,'aluminium','rouge',200,150,150);
insert into Batterie values (4, 'classique', 'vache');

insert into infoArticle values (9, 'Batterie pour joueur confirmé', 799.99);
insert into infoInstrument values (9,'aluminium','bordeaux',200,150,150);
insert into Batterie values (9, 'classique', 'vache');

insert into infoArticle values (14, 'Batterie pour joueur expert', 1099.99);
insert into infoInstrument values (14,'aluminium','rouge',200,150,150);
insert into Batterie values (14, 'classique', 'vache');

/* Djembe */

insert into infoArticle values (19, 'Djembe jouet pour enfant',24.99);
insert into infoInstrument values (19, 'bois','multicolore',40,20,20);
insert into Djembe values (19, 'vache');

insert into infoArticle values (24, 'Authentique Djembé du Mali',99.99);
insert into infoInstrument values (24, 'bois','chêne',40,20,20);
insert into Djembe values (24, 'vache');

insert into infoArticle values (29, 'Djembe gravé bois',49.99);
insert into infoInstrument values (29, 'bois','chêne',40,20,20);
insert into Djembe values (29, 'vache');

/* Maracas */

insert into infoArticle values (49, 'Maracas bois décoration plage', 14.99);
insert into infoInstrument values (49, 'bois', 'vert, bois et rouge',20,6,6);
insert into Maracas values (49, 'bois');

insert into infoArticle values (54, 'Maracas bois multicolore', 14.99);
insert into infoInstrument values (54, 'bois', 'multicolore',20,6,6);
insert into Maracas values (54, 'bois');

insert into infoArticle values (59, 'Maracas cuir jaune', 24.99);
insert into infoInstrument values (59, 'bois', 'jaune',20,6,6);
insert into Maracas values (59, 'cuir');

/* Triangle */

insert into infoArticle values (64, 'Triangle jouet pour enfant', 7.99);
insert into infoInstrument values (64, 'aluminium', 'argenté', 15,15,1);
insert into Triangle values(64, 120);

insert into infoArticle values (69, 'Triangle aluminium', 24.99);
insert into infoInstrument values (69, 'aluminium', 'argenté', 15,15,1);
insert into Triangle values(69, 120);

insert into infoArticle values (74, 'Triangle acier', 24.99);
insert into infoInstrument values (74, 'acier', 'argenté', 15,15,1);
insert into Triangle values(74, 240);


/* Accessoires */

insert into infoArticle values (140, 'Kit 5 Mediator en nylon 1mm', 4.99);
insert into Accessoire values (140, 'USA', 'Nylon', 'USA', 'mediator');

insert into infoArticle values (141, 'Kit 2 Mediator en metal Fender Extra Heavy', 9.99);
insert into Accessoire values (141, 'Fender', 'Metal', 'Fender', 'mediator');

insert into infoArticle values (142, 'Kit 2 Mediator en plastique noir Gibson', 4.99);
insert into Accessoire values (142, 'Gibson', 'Plastique dur', 'Gibson', 'mediator');

insert into infoArticle values (145, 'Mediator en bois', 0.99);
insert into Accessoire values (145, 'Gibson', 'Bois', 'Gibson', 'mediator');


insert into infoArticle values(146, 'Archet violon en crin', 49.99);
insert into Accessoire values (146, )