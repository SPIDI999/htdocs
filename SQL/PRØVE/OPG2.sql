mysql --user=root --password=
create database szymon;
use database szymon;    

        
CREATE TABLE befaringer
(
  id         INT         AUTO_INCREMENT,
  typeanlegg VARCHAR(60) NULL    ,
  dato       VARCHAR(60) NULL    ,
  PRIMARY KEY (id)
);

CREATE TABLE fagfolk
(
  id             INT         AUTO_INCREMENT,
  kompetansetype VARCHAR(60) NULL    ,
  navnf          VARCHAR(60) NULL    ,
  PRIMARY KEY (id)
);

CREATE TABLE kunder
(
  id          INT         AUTO_INCREMENT,
  adresse     VARCHAR(60) NULL    ,
  kontaktinfo VARCHAR(60) NULL    ,
  typeoppdrag VARCHAR(60) NULL    ,
  navnk       VARCHAR(60) NULL    ,
  PRIMARY KEY (id)
);

ALTER TABLE kunder
  ADD CONSTRAINT FK_fagfolk_TO_kunder
    FOREIGN KEY (id)
    REFERENCES fagfolk (id);

ALTER TABLE befaringer
  ADD CONSTRAINT FK_fagfolk_TO_befaringer
    FOREIGN KEY (id)
    REFERENCES fagfolk (id);

        
      
describe kunder;

insert into kunder(navnk, adresse, kontaktinfo, typeoppdrag)
values("szymon rys", "kurefjordveien 102", "98754987", "snekkerarbeid"),
values("oscar jensen", "skoleveien 2", "13256412", "snekkerarbeid"),
values("steinar stein", "malakoff 20", "45687954", "snekkerarbeid"),
values("szymon rys", "kurefjordveien 102", "98754987", "snekkerarbeid"),
values("szymon rys", "kurefjordveien 102", "98754987", "snekkerarbeid");


      