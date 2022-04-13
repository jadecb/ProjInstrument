/***************/
/******BOIS*****/
/***************/


/* ACCORDEONS */

insert into infoArticle values (1,'Accordéon rouge-argenté',50);
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

insert into infoArticle values (71, 'Harmonica argenté doré',69);
insert into infoInstrument values (71, 'argent','argent',12,5,3);
insert into Harmonica values (71,10);

/* SAXOPHONE */

insert into infoArticle values (76, 'Saxophone cuivre-doré',469);
insert into infoInstrument values(76,'cuivre','doré',80,40,30);
insert into Saxophone values (76, 19);

insert into infoArticle values (81, 'Saxophone cuivre-doré',649);
insert into infoInstrument values(81,'cuivre','doré',80,40,30);
insert into Saxophone values (81,21);

insert into infoArticle values (86, 'Saxophone cuivre-doré',1149);
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

insert into infoArticle values (33, 'Piano électrique noir pour joueur confirmé', 999);
insert into infoInstrument values (33, 'erable', 'noir',150,120,40 );
insert into Piano values (33, 88, 'epicea');

insert into infoArticle values (38, 'Piano électrique noir', 499);
insert into infoInstrument values (38, 'epicea', 'noir',150,120,40 );
insert into Piano values (38,88, 'plastique');

insert into infoArticle values (43, 'Piano éllectrique noir débutant sans pieds', 150);
insert into infoInstrument values (43, 'plastique', 'noir',150,30,40 );
insert into Piano values (43, 88, 'plastique');

/* Synthétiseur */

insert into infoArticle values (48, 'Synthétiseur 88 touches lestées', 799);
insert into infoInstrument values (48, 'plastique', 'noir',140,30,40 );
insert into Piano values (48, 88, 'plastique lesté');

insert into infoArticle values (53, 'Synthétiseur noir 88 touches', 399);
insert into infoInstrument values (53, 'epicea', 'noir',140,30,40 );
insert into Piano values (53,88, 'plastique');

insert into infoArticle values (58, 'Piano électrique noir débutant 61 touches', 99);
insert into infoInstrument values (58, 'plastique', 'noir',110,30,40 );
insert into Piano values (58, 61, 'plastique');


/******************/
/******Cordes******/
/******************/

insert into infoArticle values (5, 'Banjo',49);
insert into infoInstrument value (5, )
