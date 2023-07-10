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
CREATE table Objectif
(
    idObjectif Integer PRIMARY KEY NOT NULL auto_increment,
    TypeObjectif VARCHAR(50)
);
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

CREATE table PLat
(
    idPlat Integer PRIMARY KEY NOT NULL auto_increment,
    Nomplat VARCHAR(50),
    PrixUnitaire Integer,
    ImgPlat VARCHAR(50)
);

CREATE table Regime
(
    idRegime Integer PRIMARY KEY NOT NULL auto_increment,
    idObjectif Integer,
    DescriRegime VARCHAR(50),
    Durée Integer,
    PoidsDeb Double precision,
    PoidsFin Double precision,
    idPlat Integer,
    Foreign KEY (idObjectif) REFERENCES Objectif(idObjectif),
    Foreign KEY (idPlat) REFERENCES Plat(idPlat)

);

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

CREATE table Porte_Monnaie
(
    idPorte_Monnaie Integer PRIMARY KEY NOT NULL auto_increment,
    idUser Integer,
    Montant Integer,
    Foreign KEY (idUser) REFERENCES User(idUser)
);

CREATE table Code
(
    idCode Integer PRIMARY KEY NOT NULL auto_increment,
    Code VARCHAR(50),
    Montant Integer
);

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
    idRegime Integer,
    idActivite Integer,
    idUser Integer,
    Foreign KEY (idRegime) REFERENCES Regime(idRegime),
    Foreign KEY (idActivite) REFERENCES Activite(idActivite),
    Foreign KEY (idActivite) REFERENCES Activite(idActivite)
);

INSERT INTO User (idUser,NomUser,Prenom,Email,Mdp,isAdmin) VALUES 
(1,"RABENANAHARY","Kanto","kanto@gmail.com",123,1),
(2,"RAKOTOARIMANANA","Franco","franco@gmail.com",456,1),
(3,"RAMINOSON","Francko","francko@gmail.com",789,1),
(4,"PETERS","John","john@gmail.com",111,0),
(5,"WALKER","Johnie","johnie@gmail.com",222,0),
(6,"DANIELS","Jack","jack@gmail.com",333,0),
(7,"ANDERSON","Mary","mary@gmail.com",444,0),
(8,"BENZ","Bertha","bertha@gmail.com",555,0);

INSERT INTO Objectif (idObjectif,TypeObjectif) VALUES 
(1,"Augmenter Poids"),
(2,"Reduire Poids");

INSERT INTO InfoUser (idInfo,idUser,Genre,Taille,PoidsInit,PoidsObj,idObjectif) VALUES 
(1,4,"Masculin",175,70.0,80.0,1),
(2,5,"Masculin",185,80.5,70.0,2),
(3,6,"Masculin",180,80.0,75.0,2),
(4,7,"Feminin",165,90.5,70.0,2),
(5,8,"Feminin",170,70.0,80.5,1);


INSERT INTO PLat (idPlat,Nomplat,PrixUnitaire,ImgPlat) VALUES 
(1,"Pâte",20000,"Pâte.jpg"),
(2,"Frite",10000,"Frite.jpg"),
(3,"Salade",5000,"Salade.jpg"),
(4,"Pizza",15000,"Pizza.jpg"),
(5,"Legume",5000,"Legume.jpg");

INSERT INTO Regime (idRegime,idObjectif,DescriRegime,Durée,PoidsDeb,PoidsFin,idPlat) VALUES 
(1,1,"Lorem Ipsum",15,3.0,5.0,1),
(2,1,"Lorem Ipsum",10,2.0,4.0,2),
(3,2,"Lorem Ipsum",20,3.0,5.0,3),
(4,2,"Lorem Ipsum",40,5.0,10.0,5),
(5,2,"Lorem Ipsum",25,4.0,6.0,5);


INSERT INTO Activite (idActivite,DescriActivite,Duree,PoidsDeb,PoidsFin,NomActivite,idObjectif) VALUES 
(1,"Lorem Ipsum",15,3.0,5.0,"Courir",2),
(2,"Lorem Ipsum",10,2.0,4.0,"Marcher",2),
(3,"Lorem Ipsum",20,3.0,5.0,"Muscu",1),
(4,"Lorem Ipsum",40,5.0,10.0,"Piscine",2),
(5,"Lorem Ipsum",25,4.0,6.0,"Fitness",1);


INSERT INTO Porte_Monnaie (idPorte_Monnaie,idUser,Montant) VALUES 
(1,4,50000),
(2,5,30000),
(3,6,20000),
(4,7,50000),
(5,8,70000);

INSERT INTO Code (idCode,Code,Montant) VALUES 
(1,"Code1",15000),
(2,"Code2",20000),
(3,"Code3",30000),
(4,"Code4",35000),
(5,"Code5",40000),
(6,"Code6",45000),
(7,"Code7",50000),
(8,"Code8",55000),
(9,"Code9",60000),
(10,"Code10",70000),
(11,"Code11",80000),
(12,"Code12",90000),
(13,"Code13",100000),
(14,"Code14",120000),
(15,"Code15",150000);

create or replace view v_user_infoUser as(
select u.idUser , u.NomUser , u.Prenom, i.Genre,i.Taille, i.PoidsInit, i.PoidsObj,i.idObjectif
from User u
JOIN InfoUser i on i.idUser=u.idUser 
);








