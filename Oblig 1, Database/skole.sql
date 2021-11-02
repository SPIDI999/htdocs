create database skole;
use skole;
create table elektro(
    id int primary key auto_increment,
    name varchar(50),
    nStudents int,
    teacher varchar(50)
    );
describe elektro;
insert into elektro(name, nStudents, teacher)
VALUES("3DAA", "13", "Jon");
insert into elektro(name, nStudents, teacher)
VALUES("2DEA", "15", "Jo-Inge");
