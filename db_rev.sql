create database aquafish_marketplace;
use aquafish_marketplace;

create table users(
    id int(3) not null primary key,
    email varchar(255) not null,
    password varchar(255) not null,
    Name_User varchar(100) not null,
    Born_Date date not null
);

alter table users modify id int(3) not null auto_increment, auto_increment=1;

create table seller(
    Id_Seller varchar (10) not null primary key,
    Name_Seller varchar (50) not null
);

create table fish(
    Id_Fish varchar (10) not null primary key,
    Id_Seller varchar (10) not null,
    Name_Fish varchar (255) not null,
    Type_Fish varchar (50) not null,
    Class_Fish varchar (50) not null,
    Region_Fish varchar (50) not null,
    Color_Fish varchar (50) not null,
    Age_Fish int not null,
    Price_Fish int not null,
    Rating_Fish int(1),
    Img_Fish varchar(255) not null,
    Fish_Views int not null,
    foreign key (Id_Seller) references seller (Id_Seller)
);

create table fish_detail (
    Id_Fish varchar (10) not null,
    Desc_Fish_1 varchar(255),
    Desc_Fish_2 varchar(255),
    Desc_Fish_3 varchar(255),
    Desc_Fish_4 varchar(255),
    Desc_Fish_5 varchar(255),
    Img_Fish_1 varchar(255),
    Img_Fish_2 varchar(255),
    Img_Fish_3 varchar(255),
    Img_Fish_4 varchar(255),
    Img_Fish_5 varchar(255),
    foreign key (Id_Fish) references fish (Id_Fish)
);

create table transaction(
    -- Data Pembelian
    Id_Transaction int not null primary key,
    Id_Fish varchar (10) not null,
    -- Data Customer
    id int(3) not null,
    Buyer_First_Name varchar (50) not null,
    Buyer_Last_Name varchar (50) not null,
    Buyer_Number int(20) not null,
    Buyer_Address varchar (255) not null,
    Buyer_Post_Code int (5) not null,
    -- Data Transaksi
    Delivery_Service varchar(50) not null,
    Payment_Type varchar(50) not null,
    Total_Price int not null,
    Status_Transaction varchar(15) not null,
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (id) references users (id)
);

create table cart (
    Id_Cart int not null primary key,
    Id_Fish varchar (10) not null,
    id int(3) not null,
    foreign key (id) references users (id),
    foreign key (Id_Fish) references fish (Id_Fish)
);

create table wishlist (
    Id_Wishlist int not null primary key,
    Id_Fish varchar (10) not null,
    id int(3) not null,
    foreign key (id) references users (id),
    foreign key (Id_Fish) references fish (Id_Fish)
);

create table post_code (
    Id_Post_Code int not null primary key,
    Post_Code int(5) not null,
    Neighborhood varchar(50) not null,
    District varchar(50) not null,
    City varchar(50) not null,
    Province varchar(50) not null
);

create table payment_db (
    Payment_Type varchar(50) not null,
    Name_Payment varchar(50) not null,
    Number_Payment varchar(50) not null,
    Owner_Payment varchar(255) not null
);

-- create table voucher (
--     Id_Voucher int not null primary key,
--     Code_Voucher varchar(50) not null,
--     Price_Discount int not null,
-- ); INI BELOM BRO

alter table wishlist modify Id_Wishlist int not null auto_increment, auto_increment=3;
alter table cart modify Id_Cart int not null auto_increment, auto_increment=3;
alter table wishlist add unique (Id_Fish);
alter table cart add unique (Id_Fish);
-- alter table voucher modify Id_Voucher int not null auto_increment, auto_increment=3;
alter table transaction modify Id_Transaction int not null auto_increment, auto_increment=1;
alter table post_code modify Id_Post_Code int not null auto_increment, auto_increment=1;
commit;

-- NOTES
-- 1. belom bisa 1 transaksi > 1 ikan

-- adding views
create view v_getswcatalog as select
fi.Id_Fish, fi.Id_Seller, fi.Name_Fish, fi.Type_Fish,
fi.Class_Fish, fi.Region_Fish, fi.Color_Fish, fi.Age_Fish,
fi.Price_Fish, fi.Rating_Fish, fi.Img_Fish, fi.Fish_Views,
fd.Desc_Fish_1, fd.Desc_Fish_2, fd.Desc_Fish_3, fd.Desc_Fish_4, 
fd.Desc_Fish_5, fd.Img_Fish_1, fd.Img_Fish_2, fd.Img_Fish_3,
fd.Img_Fish_4, fd.Img_Fish_5
from fish fi join fish_detail fd
on fi.Id_Fish = fd.Id_Fish where fi.Type_Fish = 'Saltwater Fish';

create view v_getfwcatalog as select
fi.Id_Fish, fi.Id_Seller, fi.Name_Fish, fi.Type_Fish,
fi.Class_Fish, fi.Region_Fish, fi.Color_Fish, fi.Age_Fish,
fi.Price_Fish, fi.Rating_Fish, fi.Img_Fish, fi.Fish_Views,
fd.Desc_Fish_1, fd.Desc_Fish_2, fd.Desc_Fish_3, fd.Desc_Fish_4, 
fd.Desc_Fish_5, fd.Img_Fish_1, fd.Img_Fish_2, fd.Img_Fish_3,
fd.Img_Fish_4, fd.Img_Fish_5
from fish fi join fish_detail fd
on fi.Id_Fish = fd.Id_Fish where fi.Type_Fish = 'Freshwater Fish';

create view v_getbestsellerfish as select
Id_Fish, Id_Seller, Name_Fish, Type_Fish,
Class_Fish, Region_Fish, Color_Fish, Age_Fish,
Price_Fish, Rating_Fish, Img_Fish, Fish_Views
from fish fi where Rating_Fish >= 3 order by Rating_Fish desc;

create view v_gettopsearchfish as select
Id_Fish, Id_Seller, Name_Fish, Type_Fish,
Class_Fish, Region_Fish, Color_Fish, Age_Fish,
Price_Fish, Rating_Fish, Img_Fish, Fish_Views
from fish fi order by Fish_Views desc;