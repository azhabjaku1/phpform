/*
Uebung FIRMA 11
Arbi Zhabjaku
21.1.2022
*/

create database if not exists 2022_3a_arbizhabjaku_Firma_11;
use 2022_3a_arbizhabjaku_Firma_11;

drop table  if exists FIRMA_EGN;
drop table  if exists EGN;
drop table  if exists WOHNUNG;
drop table  if exists ARBEITER;
drop table  if exists VERWALTER;
drop table  if exists FIRMA;




create table EGN(
UnternehmKennung  int primary key not null,
UnternehmName     varchar(100) not null,
Anwalt   varchar(100) not null );

create table FIRMA(
FirmamNummer  int primary key not null,
FirmaName varchar(76) not null
);


create table FIRMA_EGN(
FirmaNummer int not null,
UKennung int not null,
constraint FK_FIR foreign key(FirmaNummer) references FIRMA(FirmaNummer),
constraint FK_EIG foreign key(UKennung) references EGN(UKennung)
);


create table ARBEITER(
sozialnummer  int primary key not null,
age int not null,
FirmaNummer int not null,
constraint FK_FIR2 foreign key(FirmaNummer) references FIRMA(FirmaNummer)
);

create table VERWALTER (
Verwalter_Id int not null primary key
);
create table WOHNUNG(
adresse varchar(100) primary key not null,
sozialnummer int not null,
Verwalter_Id int not null,
constraint FK_VER foreign key(Verwalter_Id) references VERWALTER(Verwalter_id),
constraint FK_ARB foreign key(sozialnummer) references ARBEITER(sozialnummer)
);

ALTER TABLE UNTERNEHMER   RENAME TO EGN;
ALTER TABLE EGN  drop Anwalt ;
ALTER TABLE FIRMA   MODIFY FirmaName  varchar(76) ;
ALTER TABLE ARBEITER ADD age int not null;

/*Ja es gibt ein problem. Mann kann nicht den table loschen*/







