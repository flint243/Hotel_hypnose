DROP TABLE IF EXISTS Client ;
CREATE TABLE Client (Id_Client_Client INT(11) AUTO_INCREMENT NOT NULL,
Nom_Client VARCHAR(250),
Prénom_Client VARCHAR(250),
Email_Client VARCHAR(250),
Téléphone_Client INT(15),
Adresse_Client VARCHAR(250),
PRIMARY KEY (Id_Client_Client)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Hôtel ;
CREATE TABLE Hôtel (Id_Hôtel_Hôtel INT(11) AUTO_INCREMENT NOT NULL,
Nom_Hôtel_Hôtel VARCHAR(250),
Adresse_Hôtel_Hôtel VARCHAR(250),
Nombre_Etoiles_Hôtel INT(6),
Téléphone_Hôtel_Hôtel INT(15),
PRIMARY KEY (Id_Hôtel_Hôtel)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Chambre ;
CREATE TABLE Chambre (Id_Chambre_Chambre INT(11) AUTO_INCREMENT NOT NULL,
Numéro_Chambre_Chambre INT(3),
Type_Chambre_Chambre INT(3),
Tarif_Chambre INT(4),
Id_Hôtel_Chambre INT(11),
réservation_id_réservation INT(11),
PRIMARY KEY (Id_Chambre_Chambre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Réservation ;
CREATE TABLE Réservation (Id_Réservation_Réservation INT(11) AUTO_INCREMENT NOT NULL,
Date_début_Séjour_Réservation DATETIME,
Date_Réservation_Réservation INT(11),
Date_fin_Séjour_Réservation DATETIME,
Status_Réservation INT(11),
Id_Client_Réservation INT(11),
Id_Chambre_Réservation INT(11),
paiement_id_paiement INT(11),
chambre_id_chambre  INT(11),
PRIMARY KEY (Id_Réservation_Réservation)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Paiement ;
CREATE TABLE Paiement (Id_Paiement_Paiement INT(11) AUTO_INCREMENT NOT NULL,
Montant_Paiement INT(4),
Date_Paiement_Paiement DATETIME,
Moyen_Paiement_Paiement VARCHAR(250),
Id_Réservation_Paiement INT(11),
réservation_id INT(11),
PRIMARY KEY (Id_Paiement_Paiement)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Service ;
CREATE TABLE Service (Id_Service_Service INT(11) AUTO_INCREMENT NOT NULL,
Nom_Service_Service VARCHAR(250),
Tarif_Service_Service INT(4),
PRIMARY KEY (Id_Service_Service)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Réservation_Service ;
CREATE TABLE Réservation_Service (Id_Réservation_Réservation_Service INT(11) AUTO_INCREMENT NOT NULL,
id_Service_Réservation_Service INT(11),
Quantité_Réservation_Service INT(3),
PRIMARY KEY (Id_Réservation_Réservation_Service)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Association_8 ;
CREATE TABLE Association_8 (Id_Réservation  INT(11) AUTO_INCREMENT NOT NULL,
Id_Service INT(11) NOT NULL,
PRIMARY KEY (Id_Réservation_Réservation,
 Id_Service_Service)) ENGINE=InnoDB;

DROP TABLE IF EXISTS Association_11 ;
CREATE TABLE Association_11 (Id_Hôtel INT(11) AUTO_INCREMENT NOT NULL,
Id_Chambre_Chambre  INT(11) NOT NULL,
PRIMARY KEY (Id_Hôtel_Hôtel,
 Id_Chambre_Chambre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS effectuerRéservation ;
CREATE TABLE effectuerRéservation (Id_Client INT(11) AUTO_INCREMENT NOT NULL,
Id_Réservation INT(11) NOT NULL,
annulerRéservation_effectuerRéservation INT(11),
PRIMARY KEY (Id_Client_Client,
 Id_Réservation_Réservation)) ENGINE=InnoDB;

ALTER TABLE Chambre ADD CONSTRAINT FK_Chambre_réservation_id_réservation_réservation FOREIGN KEY (réservation_id_réservation_réservation) REFERENCES Réservation (Id_Réservation_Réservation);

ALTER TABLE Réservation ADD CONSTRAINT FK_Réservation_paiement_id_paiement_paiement FOREIGN KEY (paiement_id_paiement_paiement) REFERENCES Paiement (Id_Paiement_Paiement);
ALTER TABLE Réservation ADD CONSTRAINT FK_Réservation_chambre_id_chambre_chambre FOREIGN KEY (chambre_id_chambre_chambre) REFERENCES Chambre (Id_Chambre_Chambre);
ALTER TABLE Paiement ADD CONSTRAINT FK_Paiement_réservation_id_réservation_réservation FOREIGN KEY (réservation_id_réservation_reservation) REFERENCES Réservation (Id_Réservation_Réservation);
ALTER TABLE Association_8 ADD CONSTRAINT FK_Association_8_Id_Réservation_Réservation FOREIGN KEY (Id_Réservation_Réservation) REFERENCES Réservation (Id_Réservation_Réservation);
ALTER TABLE Association_8 ADD CONSTRAINT FK_Association_8_Id_Service_Service FOREIGN KEY (Id_Service_Service) REFERENCES Service (Id_Service_Service);
ALTER TABLE Association_11 ADD CONSTRAINT FK_Association_11_Id_Hôtel_Hôtel FOREIGN KEY (Id_Hôtel_Hôtel) REFERENCES Hôtel (Id_Hôtel_Hôtel);
ALTER TABLE Association_11 ADD CONSTRAINT FK_Association_11_Id_Chambre_Chambre FOREIGN KEY (Id_Chambre_Chambre) REFERENCES Chambre (Id_Chambre_Chambre);
ALTER TABLE effectuerRéservation ADD CONSTRAINT FK_effectuerRéservation_Id_Client_Client FOREIGN KEY (Id_Client_Client) REFERENCES Client (Id_Client_Client);
ALTER TABLE effectuerRéservation ADD CONSTRAINT FK_effectuerRéservation_Id_Réservation_Réservation FOREIGN KEY (Id_Réservation_Réservation) REFERENCES Réservation (Id_Réservation_Réservation);
