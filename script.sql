CREATE DATABASE db_projet_s4;
Use db_projet_s4;

CREATE table User
(
    idUser Integer PRIMARY KEY NOT NULL auto_increment,
    NomUser VARCHAR(50),
    Prenom VARCHAR(50),
    Email VARCHAR(50),
    Mdp VARCHAR(50)

);
CREATE table InfoUser
(
    idInfo Integer PRIMARY KEY NOT NULL auto_increment,
    idUser Integer,
    Genre VARCHAR(50),
    Taille Integer,
    PoidsInit Integer,
    PoidsObj Integer,
    Foreign KEY (idUser) REFERENCES User(idUser)

);
CREATE table Objectif
(
    idObjectif Integer PRIMARY KEY NOT NULL auto_increment,
    TypeObjectif VARCHAR(50)
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




