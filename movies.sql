create database moviedatabase;
show databases;
use moviesdb;
create table movie(
title varchar(50),
director varchar(50),
myear int,
rating float,
primary key(title)

);
drop table movie;
show tables;

insert into movie(title,director,myear,rating)
values('Fargo','Coen','1996','8.2');
insert into movie(title,director,myear,rating)
values('Rising Arizona','Coen','1987','7.6');
insert into movie(title,director,myear,rating)
values('Spiderman','Raimi','2002','7.6');
insert into movie(title,director,myear,rating)
values('Wonder Boys','Hanson','2000','7.6');

select * from movie;
create table Actors(
actors varchar(50),
ayear int

);

insert into Actors(actors,ayear)
values('Cage','1964');
insert into Actors(actors,ayear)
values('Hanks','1956');
insert into Actors(actors,ayear)
values('Maguire','1975');
insert into Actors(actors,ayear)
values('Cage','1957');

select * from Actors;

create table Acts as
select actors from actors;

select * from Acts;
select title from movie where myear>1997;
