/****************************************
***       Création Base de données    ***
****************************************/
CREATE DATABASE IF NOT EXISTS sdj;
USE sdj;

/*************************************
***       Création table admin     ***
*************************************/
CREATE TABLE Admin
(
    idAdmin int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nameAdmin varchar(255) NOT NULL,
    passAdmin varchar(255) NOT NULL
);

/**************************************
***       Création table client     ***
**************************************/
CREATE TABLE Customer
(
    idCust int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nameCust varchar(255) NOT NULL,
    nicknameCust varchar(255) NOT NULL,
    phoneCust int NOT NULL,
    bookingCust boolean NOT NULL,
    takeawayCust boolean NOT NULL,
    banCust boolean NOT NULL
);

/*******************************
***       Jeu de données     ***
*******************************/
INSERT INTO Admin(nameAdmin,passAdmin) VALUES ('bonjour', 'bonjour');
INSERT INTO Customer(nameCust,nicknameCust,phoneCust,bookingCust,takeawayCust,banCust) VALUES ('tarzan', 'jane',0618204680,true,false,false);
INSERT INTO Customer(nameCust,nicknameCust,phoneCust,bookingCust,takeawayCust,banCust) VALUES ('tarsan', 'gene',0618204681,true,false,true);
INSERT INTO Customer(nameCust,nicknameCust,phoneCust,bookingCust,takeawayCust,banCust) VALUES ('mickey ', 'mouse',0618204682,false,true,false);
INSERT INTO Customer(nameCust,nicknameCust,phoneCust,bookingCust,takeawayCust,banCust) VALUES ('myckey', 'mouse',0618204683,false,true,true);
