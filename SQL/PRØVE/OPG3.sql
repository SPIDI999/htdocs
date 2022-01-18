mysql --user=root --password=
create database cia;
use cia;
copy paste coden fra cia
SELECT `name`, `region`, `area`, `gdp` FROM `cia`;
SELECT * FROM `cia` WHERE `region` = 'Asia' AND `population` > 2000000;
SELECT `name`, SUM(`population`) FROM `cia` WHERE `name` LIKE '%A' GROUP BY `name`;
SELECT COUNT(`NAME`) FROM `cia` WHERE `region` = 'Europe';
SELECT `name`, MIN(`area`) FROM `cia` GROUP BY `NAME`;
SELECT `name`, COUNT(`population`) FROM `cia` WHERE `name` LIKE 'B%' GROUP BY `name`;
