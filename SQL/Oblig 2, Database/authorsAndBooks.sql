mysql --user=root --password=
create database authorsAndBooks;
use authorsAndBooks;
create table authors(
    id int primary key auto_increment,
    name varchar(60)
);
create table books(
    id int primary key auto_increment,
    title varchar(60),
);


        


        
      