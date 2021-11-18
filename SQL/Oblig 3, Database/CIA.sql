mysql --user=root --password=
create database cia;
use cia;
copy paste coden fra cia
select * from cia;
SELECT `name`, `region`, `gdp` FROM `cia`;
SELECT `name`, `region`, `area`, `population` FROM `cia`;
SELECT `name`, `population` / `area` AS 'Population per kvm2' FROM `cia`;
SELECT `name`, `population` / 1000000 AS 'Population in Millions' FROM `cia`;
SELECT * FROM `cia` WHERE `region` = 'Europe';
SELECT * FROM `cia` WHERE `population` = 0;
SELECT * FROM `cia` WHERE `population` > 15000000;
SELECT * FROM `cia` WHERE `region` = 'Europe' AND `population` > 15000000;
SELECT * FROM `cia` WHERE `region` = 'Europe' OR `region` = 'Asia';