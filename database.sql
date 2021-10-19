create database aquafish_marketplace;

use aquafish_marketplace;

create table seller(
    Id_Seller varchar (10) not null primary key,
    Name_Seller varchar (50) not null
);

create table fish(
    Id_Fish varchar (10) not null primary key,
    Name_Fish varchar (50) not null,
    Class_Fish varchar (30) not null,
    Region_Fish varchar (30) not null,
    Age_Fish int not null,
    Price_Fish int not null
);

create table shipment(
    Id_Shipment varchar (15) not null primary key,
    Id_Fish varchar (10) not null,
    Id_Seller varchar (10) not null,
    Date_Shipment date not null,
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (Id_Seller) references seller (Id_Seller)
);

create table market(
    Id_Fish varchar (10) not null,
    Id_Seller varchar (10) not null,
    Name_Fish varchar (50) not null,
    Class_Fish varchar (30) not null,
    Region_Fish varchar (30) not null,
    Price_Fish int not null,
    Status_Fish varchar (15) not null,
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (Id_Seller) references seller (Id_Seller)
);

create table transaksi(
    Id_Transaksi varchar (15) not null primary key,
    Id_Fish varchar (10) not null,
    Price_Fish int not null,
    Date_Transaksi date not null,
    Name_Buyer varchar (50) not null,
    foreign key (Id_Fish) references fish (Id_Fish)
);

create table users(
    Email varchar(50) not null,
    Password varchar(50) not null,
    Name_User varchar(100) not null,
    Tanggal_Lahir date not null
);

alter table users add primary key Email;
alter table users modify Id_User int(11) not null auto_increment, auto_increment=0;