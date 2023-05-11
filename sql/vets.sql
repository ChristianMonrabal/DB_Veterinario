create database vets;
use vets;

create table Historial(
Id_Historial int,
Historial text,
constraint Hist_Hist_pk primary key (Id_Historial)
);

create table raça(
Id int ,
Nom varchar(25) NOT NULL,
Alçada int,
Pes int,
Caracter text,
constraint raça_id_pk primary key (Id)
);

create table Veterinari(
Id Int,
Nom varchar (25) NOT NULL,
Telf numeric(9),
Especialitat varchar(20),
Data_Contracte date NOT NULL,
Salari numeric(7,2) NOT NULL,
constraint veterinari_id_pk primary key (Id)
);

create table propietari(
DNI int,
Nom varchar(55) NOT NULL,
Adreça text,
Telf int NOT NULL,
Mail varchar (50),
constraint propietaris_DNI_pk primary key (DNI)
);

create table Mascota(
Xip Int,
nom varchar(25) NOT NULL,
genere varchar(1) NOT NULL,
Especie varchar(3) NOT NULL,
Raça int,
Data_Naixement date,
Propietari int,
Vet Int,
Historial int,
constraint mascota_xip_pk primary key (xip),
constraint mascota_raça_fk foreign key (raça)
			references raça(Id),
constraint mascota_propietari_fk foreign key (Propietari)
			references propietari(DNI),
constraint mascota_vet_fk foreign key (Vet)
			references veterinari(Id),
constraint mascota_historial_fk foreign key (Historial)
			references Historial(Id_Historial)
);

create table exportMascota (
Xip int,
Nom varchar(25) NOT NULL,
Especie varchar(3) NOT NULL,
Raça varchar(25),
Veterinari varchar(25) NOT NULL,
constraint exportMascota_xip_pk primary key (Xip)
);

insert into historial values (1,"04/01/14 Perfecte estat de salut");
insert into historial values (2,"22/02/13 Revisió extremitat posterior correcte");
insert into historial values (3,"16/10/13 Al·lèrgia per contacte amb producte químic");
insert into historial values (4,"02/11/12 Espiga clavada a orifici auditiu");
insert into historial values (5,"03/04/13 Vacunació ordinària");
insert into historial values (6,"28/02/14 Glaucoma ull esquerre");
insert into historial values (7,"30/11/13 Paràsits intestinals");
insert into historial values (8,"24/05/12 Problema bucodental");
insert into historial values (9,"10/01/14 Revisió periòdica");
insert into historial values (10,"22/08/13 Vacunació ordinària");
insert into historial values (11,"09/07/12 Detectada displàsia de maluc");
insert into historial values (12,"03/03/14 Problema gastro-intestinal");

insert into raça values (101,'Pastor alemany',60,40,'Fidel');
insert into raça values (102,'Sphynx',15,3,'Amigable');
insert into raça values (103,'Maine coon',25,9,'Tranquil');
insert into raça values (104,'Border collie',40,18,'Intel·ligent');
insert into raça values (105,'Beagle',33,15,'Caçador');
insert into raça values (106,'Gos atura',47,22,'Pastor');
insert into raça values (107,'Bengalí',20,4,'Actiu');
insert into raça values (108,'Labrador',59,30,'Obedient');
insert into raça values (109,'Golden Retriever',61,32,'Treballador');
insert into raça values (110,'Persa',20,5,'Curiós');
insert into raça values (111,'Chartreux',18,6,'Dormilega');
insert into raça values (112,'Siamès',15,3,'Tranquil');

insert into veterinari values (21,'KING',931112233,'Cardiologia','1981-11-17',5000);
insert into veterinari values (22,'BLAKE',932223344,'General','1981-05-01',2850);
insert into veterinari values (23,'CLARK',933334455,'Dermatologia','1981-06-09',2450);
insert into veterinari values (24,'JONES',934445566,'Traumatologia','1981-04-02',2975);
insert into veterinari values (25,'MARTIN',935556677,'Oftalmologia','1981-09-28',1250);
insert into veterinari values (26,'ALLEN',936667788,'General','1981-02-20',1600);
insert into veterinari values (27,'TURNER',939991122,'Traumatologia','1981-09-08',1500);

insert into propietari values (44999222,'JAMES','BALMES 34',666112233,'james@mail.com');
insert into propietari values (44777333,'WARD','SEGRE 9',666778899,'ward@mail.com');
insert into propietari values (44666222,'FORD','AMPOSTA 58',666554433,'ford@mail.com');
insert into propietari values (44888999,'SMITH','UNIO 98',666115566,'smith@mail.com');
insert into propietari values (44222111,'SCOTT','FLORIDA 70',666002244,'scott@mail.com');
insert into propietari values (44999333,'ADAMS','UNIVERSITAT 2',666996611,'adams@mail.com');
insert into propietari values (44666888,'MILLER','INDUSTRIA 104',666662299,'miller@mail.com');

insert into Mascota values (3301,'DUC','M','gos',106,'2010-10-02',44999222,27,11);
insert into Mascota values (3302,'IBIS','F','gat',111,'2011-07-30',44999222,22,1);
insert into Mascota values (3303,'FUFI','M','gat',103,'2012-09-08',44777333,21,2);
insert into Mascota values (3304,'BRU','M','gat',112,'2011-12-09',44666222,27,3);
insert into Mascota values (3305,'GINKGO','M','gos',104,'2010-10-10',44666222,23,4);
insert into Mascota values (3306,'IBIS','F','gos',109,'2011-11-11',44888999,22,5);
insert into Mascota values (3307,'GARFIEL','M','gat',107,'2012-02-22',44888999,24,6);
insert into Mascota values (3308,'KENZO','M','gos',101,'2010-04-27',44222111,24,7);
insert into Mascota values (3309,'LEO','M','gos',109,'2011-03-18',44999333,25,8);
insert into Mascota values (3310,'MANCHA','F','gat',102,'2012-02-02',44999333,27,9);
insert into Mascota values (3311,'ANOUK','M','gat',103,'2010-07-07',44666888,26,10);
insert into Mascota values (3312,'NUKA','F','gos',104,'2011-01-07',44666222,23,12);
