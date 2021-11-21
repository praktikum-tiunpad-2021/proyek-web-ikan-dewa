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
    id int(3) not null primary key,
    email varchar(255) not null,
    password varchar(255) not null,
    Name_User varchar(100) not null,
    Born_Date date not null
);

INSERT INTO `users` VALUES
(1, 'admin@gmail.com', '$2y$10$H8XMclojGCPfyf2iCdex3uSJkVTgkW4fBtdD0zdnX1QjzZWns87wK', "Admin1", "2002-03-20");
(2, 'rhezapandyaa@gmail.com', '$2y$10$FJ/JInnAhzvGN8TkkxpBN..o..DotOK.xP3gbKB2T5.fG.cXWYcdy', "Rheza Pandya Andhikaputra", "2002-03-20");

alter table users modify id int(3) not null auto_increment, auto_increment=2;
commit;