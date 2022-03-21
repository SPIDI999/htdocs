mysql --user=root --password=
create database TSB;
use TSB;

CREATE TABLE Firma(
  id        INT         NOT NULL AUTO_INCREMENT,
  navn      VARCHAR(60) NULL    ,
  adresse   VARCHAR(60) NULL    ,
  orgnummer VARCHAR(60) NULL    ,
  telefon   VARCHAR(60) NULL    ,
  web       VARCHAR(60) NULL    ,
  PRIMARY KEY (id)
);

CREATE TABLE Personer
(
  id        INT         NOT NULL AUTO_INCREMENT,
  fornavn   VARCHAR(60) NULL    ,
  etternavn VARCHAR(60) NULL    ,
  telefon   VARCHAR(60) NULL    ,
  epost     VARCHAR(60) NULL    ,
  firma_id  INT         NOT NULL,
  PRIMARY KEY (id)
  );

  ALTER TABLE Personer
  ADD CONSTRAINT FK_Firma_TO_Personer
    FOREIGN KEY (firma_id)
    REFERENCES Firma (id);
