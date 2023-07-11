CREATE DATABASE db_projet_s4;
Use db_projet_s4;

CREATE table User
(
    idUser Integer PRIMARY KEY NOT NULL auto_increment,
    NomUser VARCHAR(50),
    Prenom VARCHAR(50),
    Email VARCHAR(50),
    Mdp VARCHAR(50),
    isAdmin Integer
);

INSERT INTO User (NomUser,Prenom,Email,Mdp,isAdmin) 
VALUES 
    ("RABENANAHARY","Kanto","kanto@gmail.com",123,1),
    ("RAKOTOARIMANANA","Franco","franco@gmail.com",456,1),
    ("RAMINOSON","Francko","francko@gmail.com",789,1),
    ("PETERS","John","john@gmail.com",111,0),
    ("WALKER","Johnie","johnie@gmail.com",222,0),
    ("DANIELS","Jack","jack@gmail.com",333,0),
    ("ANDERSON","Mary","mary@gmail.com",444,0),
    ("BENZ","Bertha","bertha@gmail.com",555,0);

CREATE table Objectif
(
    idObjectif Integer PRIMARY KEY NOT NULL auto_increment,
    TypeObjectif VARCHAR(50)
);

INSERT INTO Objectif (TypeObjectif) 
VALUES 
    ("Augmenter Poids"),
    ("Reduire Poids");

CREATE table InfoUser
(
    idInfo Integer PRIMARY KEY NOT NULL auto_increment,
    idUser Integer,
    Genre VARCHAR(50),
    Taille Integer,
    PoidsInit double precision,
    PoidsObj double precision,
    idObjectif Integer,
    Foreign KEY (idUser) REFERENCES User(idUser),
    Foreign KEY (idObjectif) REFERENCES Objectif(idObjectif)
);
alter table InfoUser add(isGold Integer);

INSERT INTO InfoUser (idUser,Genre,Taille,PoidsInit,PoidsObj,idObjectif,isGold) 
VALUES 
    (4,"Masculin",175,70,80,1,0),
    (5,"Masculin",185,80.5,70,2,1),
    (6,"Masculin",180,80,75,2,0),
    (7,"Feminin",165,90.5,70,2,0),
    (8,"Feminin",170,70,80,1,1);

CREATE table Plat
(
    idPlat Integer PRIMARY KEY NOT NULL auto_increment,
    Nomplat VARCHAR(50),
    typePlat VARCHAR(50), 
    PrixUnitaire Integer,
    ImgPlat VARCHAR(50)
);
INSERT INTO Plat (Nomplat,typePlat,PrixUnitaire,ImgPlat) 
VALUES 
    ("Pate","glucide",20000,"Pate.jpg"),
    ("Frite","glucide",10000,"Frite.jpg"),
    ("Salade","legume",5000,"Salade.jpg"),
    ("Brocolis","legume",3500,"brocolis.jpg"),
    ("Poulet","viande",8000,"poulet.jpg"),
    ("Steak","viande",9500,"viande.jpg"),
    ("Thon","poisson",6500,"poisson.jpg"),
    ("Carpe","poisson",6000,"poisson.jpg");


CREATE table Regime
(
    idRegime Integer PRIMARY KEY NOT NULL auto_increment,
    idObjectif Integer,
    DescriRegime VARCHAR(50),
    PoidsDeb Double precision,
    PoidsFin Double precision,
    Foreign KEY (idObjectif) REFERENCES Objectif(idObjectif)
);

INSERT INTO Regime (idObjectif,DescriRegime,PoidsDeb,PoidsFin) 
VALUES 
    (1,"Lorem Ipsum",2,4),
    (1,"Lorem Ipsum",3,5),
    (1,"Lorem Ipsum",5,10),
    (2,"Lorem Ipsum",3,5),
    (2,"Lorem Ipsum",5,10),
    (2,"Lorem Ipsum",4,6);

CREATE table Activite
(
    idActivite Integer PRIMARY KEY NOT NULL auto_increment,
    DescriActivite VARCHAR(50),
    Duree Integer,
    PoidsDeb Double precision,
    PoidsFin Double precision,
    NomActivite VARCHAR(50),
    idObjectif Integer,
    Foreign KEY (idObjectif) REFERENCES Objectif(idObjectif)
);

INSERT INTO Activite (idObjectif,DescriActivite,Duree,PoidsDeb,PoidsFin,NomActivite) 
VALUES 
    (1,"Lorem Ipsum",20,3,5,"Muscu"),
    (1,"Lorem Ipsum",25,5,10,"Fitness"),
    (2,"Lorem Ipsum",10,2,5,"Marcher"),
    (2,"Lorem Ipsum",15,5,7,"Courir"),
    (2,"Lorem Ipsum",40,5,10,"Piscine");

CREATE TABLE composition (
    idComposition Integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idPlat Integer NOT NULL,
    idRegime Integer NOT NULL,
    duree Integer NOT NULL
);

INSERT INTO composition(idRegime,idPlat,duree) 
VALUES
    (1,1,2),
    (1,2,5),
    (1,5,5),
    (1,6,7),
    (2,1,7),
    (2,2,7),
    (2,5,10),
    (2,6,10),
    (3,1,10),
    (3,5,10),
    (3,6,10),
    (3,7,10),
    (4,3,7),
    (4,4,7),
    (5,5,15),
    (5,5,15);

CREATE table Porte_Monnaie
(
    idPorte_Monnaie Integer PRIMARY KEY NOT NULL auto_increment,
    idUser Integer,
    Montant Integer,
    Foreign KEY (idUser) REFERENCES User(idUser)
);

INSERT INTO Porte_Monnaie (idUser,Montant)
VALUES 
    (4,50000),
    (5,30000),
    (6,20000),
    (7,50000),
    (8,70000);

CREATE table Code
(
    idCode Integer PRIMARY KEY NOT NULL auto_increment,
    Code VARCHAR(50),
    Montant Integer
);

INSERT INTO Code (Code,Montant) 
VALUES 
    ("Code1",15000),
    ("Code2",20000),
    ("Code3",30000),
    ("Code4",35000),
    ("Code5",40000),
    ("Code6",45000),
    ("Code7",50000),
    ("Code8",55000),
    ("Code9",60000),
    ("Code10",70000),
    ("Code11",80000),
    ("Code12",90000),
    ("Code13",100000),
    ("Code14",120000),
    ("Code15",150000);

CREATE table VerifCode
(
    idVerifCode Integer PRIMARY KEY NOT NULL auto_increment,
    idCode Integer,
    idUser Integer,
    Foreign KEY (idCode) REFERENCES Code(idCode),
    Foreign KEY (idUser) REFERENCES User(idUser)
);


CREATE table Suggestion
(
    idSuggestion Integer PRIMARY KEY NOT NULL auto_increment,
    idUser Integer,
    idRegime Integer,
    idActivite Integer,
    Foreign KEY (idRegime) REFERENCES Regime(idRegime),
    Foreign KEY (idActivite) REFERENCES Activite(idActivite),
    Foreign KEY (idActivite) REFERENCES Activite(idActivite)
);
INSERT INTO suggestion(idUser,idRegime,idActivite)
VALUES
    (4,3,1),
    (5,5,5),
    (6,4,3),
    (7,5,5),
    (8,3,1);

create or replace view v_user_infoUser as(
select u.idUser , u.NomUser , u.Prenom, i.Genre,i.Taille, i.PoidsInit, i.PoidsObj,o.typeObjectif
from User u
JOIN InfoUser i on i.idUser=u.idUser
JOIN Objectif o on o.idObjectif = i.idObjectif
);

CREATE OR REPLACE VIEW v_user_info AS 
select u.idUser, u.nomuser, u.prenom, u.email, u.mdp, i.Genre, i.Taille, i.PoidsInit, i.PoidsObj, i.idObjectif, i.isGold
from  User u 
join infouser i on i.idUser=u.idUser;


-- CREATE OR REPLACE VIEW v_ AS 
-- SELECT 
-- FROM 

------- view regime rehetra
CREATE OR REPLACE VIEW v_all_regime AS 
select r.idObjectif, o.TypeObjectif, r.idRegime, r.DescriRegime, r.PoidsDeb, r.PoidsFin, c.idPlat, p.Nomplat, p.PrixUnitaire, c.duree, p.typePlat, c.idComposition
from regime r 
join composition c on r.idRegime=c.idRegime
join Plat p on p.idPlat=c.idPlat
join Objectif o on r.idObjectif=o.idObjectif

------- get regime suggestions
select idregime, DescriRegime, PoidsDeb, PoidsFin,sum(duree) total_duree,sum(PrixUnitaire*duree) total_prix
from v_all_regime
where idObjectif=1 and PoidsDeb <= 3 and PoidsFin >= 3
group by idregime, DescriRegime, PoidsDeb, PoidsFin

------- get details regime suggestions
select * 
from v_all_regime
where idObjectif=1 and PoidsDeb <= 3 and PoidsFin >= 3 and idRegime=1

-- get Nombres d'user Hors admin
SELECT count(idUser) nbr_user FROM user where isAdmin = 0;

-- Liste augmenter et reduire
SELECT u.NomUser, i.PoidsInit, i.PoidsObj, i.Taille, o.typeObjectif
FROM InfoUser i
JOIN user u on u.idUser = i.idUser
JOIN Objectif o on i.idObjectif = o.idObjectif
WHERE i.idObjectif = 1;

-- Liste reduire
SELECT u.NomUser, i.PoidsInit, i.PoidsObj, i.Taille, o.typeObjectif
FROM InfoUser i
JOIN user u on u.idUser = i.idUser
JOIN Objectif o on i.idObjectif = o.idObjectif
WHERE i.idObjectif = 2;

-- Liste par idRegime
SELECT u.NomUser,s.idRegime, count(idRegime) compte_regime
FROM suggestion s
JOIN user u on u.idUser = s.idUser
GROUP BY idRegime;

-- Liste par actvite
SELECT u.NomUser,a.NomActivite, count(s.idActivite) compte_activite
FROM suggestion s
JOIN user u on u.idUser = s.idUser
JOIN Activite a on a.idActivite = s.idActivite
GROUP BY idRegime;

-- Liste compte Masculin et feminin
SELECT Genre, count(Genre) as compte_genre
FROM InfoUser
GROUP BY Genre;

-- Moyenne poids vise te hitombo sy te hiena
-- difference de poids te hitombo
CREATE OR REPLACE VIEW v_diff_mitombo AS 
SELECT idObjectif, sum(PoidsObj - PoidsInit) as diff_mitombo
FROM InfoUser
WHERE idObjectif = 1
GROUP BY idObjectif;

-- difference de poids te hitombo
CREATE OR REPLACE VIEW v_diff_mihena AS 
SELECT idObjectif, sum(PoidsInit - PoidsObj) as diff_mihena
FROM InfoUser
WHERE idObjectif = 2
GROUP BY idObjectif;

-- compte objectif
CREATE OR REPLACE VIEW v_compte_objectif AS
SELECT idObjectif, count(idObjectif) as compte_objectif
FROM InfoUser
GROUP BY idObjectif; 