create table seller(
    Id_Seller varchar (10) not null primary key,
    Name_Seller varchar (50) not null
);

create table fish(
    Id_Fish varchar (10) not null primary key,
    Id_Seller varchar (10) not null,
    Name_Fish varchar (255) not null,
    Class_Fish varchar (50) not null,
    Region_Fish varchar (50) not null,
    Age_Fish int not null,
    Price_Fish int not null,
    Rating_Fish int(1),
    Img_Fish varchar(255) not null,
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
);

create table market(
    Month_Market varchar (12) not null,
    Id_Fish varchar (10) not null,
    Id_Seller varchar (10) not null,
    Status_Fish date not null,
    foreign key (Id_Fish) references fish (Id_Fish),
    foreign key (Id_Seller) references seller (Id_Seller)
);

create table 'transaction'(
    -- Data Pembelian
    Id_Transaction varchar (15) not null primary key,
    Date_Transaction date not null,
    -- Data Customer
    Buyer_First_Name varchar (50) not null,
    Buyer_Last_Name varchar (50) not null,
    email varchar(255) not null,
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
    foreign key (email) references users (email)
);

-- NOTES
-- 1. belom bisa 1 transaksi > 1 ikan
