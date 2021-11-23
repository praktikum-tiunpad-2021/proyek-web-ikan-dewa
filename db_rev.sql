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
    Alt_Img_Fish varchar(255) not null,
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

create table shipment(
    Id_Shipment varchar (15) not null primary key,
    Id_Fish varchar (10) not null,
    Id_Seller varchar (10) not null,
    Date_Shipment date not null,
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (Id_Seller) references seller (Id_Seller)
); --KAYANYA GAJADI DIPAKE

create table market(
    Month_Market varchar (12) not null,
    Id_Fish varchar (10) not null,
    Id_Seller varchar (10) not null,
    Status_Fish date not null,
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (Id_Seller) references seller (Id_Seller)
);

create table transaction(
    -- Data Pembelian
    Id_Transaction int not null primary key,
    Id_Fish varchar (10) not null,
    -- Date_Transaction date not null,
    -- Data Customer
    id int(3) not null,
    Buyer_First_Name varchar (50) not null,
    Buyer_Last_Name varchar (50) not null,
    Buyer_Number int(20) not null,
    Buyer_Address varchar (255) not null,
    Buyer_Province varchar (50) not null,
    Buyer_City varchar (50) not null,
    Buyer_District varchar (50) not null,
    Buyer_Neighborhood varchar (50) not null,
    Buyer_Post_Code int (5) not null,
    -- Data Transaksi
    Delivery_Service varchar(50) not null,
    Payment_Type varchar(50) not null,
    Total_Price int not null,
    Status_Transaction varchar(15) not null,
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (id) references users (id)
);

create table success_transaction (
    Id_Transaction varchar (15) not null,
    Id_Fish varchar (10) not null,
    id int(3) not null,
    foreign key (id) references users (id),
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (Id_Transaction) references 'transaction' (Id_Transaction),
); --ini nanti dlu, bingung coy

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

create table users(
    id int(3) not null primary key,
    email varchar(255) not null,
    password varchar(255) not null,
    Name_User varchar(100) not null,
    Born_Date date not null
);

create table fish_views (
    Id_Page int not null primary key,
    Id_Fish varchar (10) not null,
    Total_Views int not null,
    foreign key (Id_Fish) references fish (Id_Fish)
);

create table voucher (
    Id_Voucher int not null primary key,
    Code_Voucher varchar(50) not null,
    Price_Discount int not null,
);

alter table wishlist modify Id_Wishlist int not null auto_increment, auto_increment=3;
alter table cart modify Id_Cart int not null auto_increment, auto_increment=3;
alter table wishlist add unique (Id_Fish);
alter table cart add unique (Id_Fish);
alter table voucher modify Id_Voucher int not null auto_increment, auto_increment=3;
alter table transaction modify Id_Transaction int not null auto_increment, auto_increment=1;
commit;

-- NOTES
-- 1. belom bisa 1 transaksi > 1 ikan
