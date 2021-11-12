INSERT INTO `seller` VALUES
-- TEMPLATE
-- ('idseller', 'name');
('SEL001', 'Supplier1'),
('SEL002', 'Supplier2'),
('SEL003', 'Supplier3');

INSERT INTO `fish` VALUES
-- TEMPLATE
-- ('idfish', 'idseller', 'name', 'class', 
-- 'region', 'age', 'price', 'rating');
('FI00001', 'SEL001', 'Guppy', 'Class_1', 
'Region_1', '1', '5000', '5', 'assets/Pics/fish_pic/guppy_1.jpg', 'Ikan Guppy'),
('FI00002', 'SEL001', 'Molly', 'Class_2', 
'Region_2', '2', '4000', '4', 'assets/Pics/fish_pic/molly_1.jpg', 'Ikan Molly'),
('FI00003', 'SEL002', 'Cupang', 'Class_3', 
'Region_3', '3', '2000', '2', 'assets/Pics/fish_pic/cupang_1.jpg', 'Ikan Cupang'),
('FI00004', 'SEL003', 'Manfish', 'Class_4', 
'Region_4', '4', '3000', '3', 'assets/Pics/fish_pic/manfish_1.jpg', 'Ikan Manfish'),
('FI00005', 'SEL001', 'Lemon', 'Class_5', 
'Region_5', '6', '1000', '3', 'assets/Pics/fish_pic/lemon_1.png', 'Ikan Lemon'),
('FI00006', 'SEL001', 'Black Ghost', 'Class_6', 
'Region_6', '2', '90000', '1', 'assets/Pics/fish_pic/black_ghost_1.jpg', 'Ikan Black Ghost'),
('FI00007', 'SEL003', 'Discus', 'Class_7', 
'Region_7', '1', '8000', '3', 'assets/Pics/fish_pic/discus_1.jpg', 'Ikan Discus'),
('FI00008', 'SEL002', 'Platy', 'Class_8', 
'Region_8', '3', '6000', '2', 'assets/Pics/fish_pic/platy_1.jpg', 'Ikan Platy'),
('FI00009', 'SEL003', 'Mas Koki', 'Class_9', 
'Region_9', '2', '10000', '3', 'assets/Pics/fish_pic/mas_koki_1.jpg', 'Ikan Mas Koki'),
('FI00010', 'SEL001', 'Arwana', 'Class_10', 
'Region_10', '3', '7000', '1', 'assets/Pics/fish_pic/arwana_1.png', 'Ikan Arwana'),
('FI00011', 'SEL001', 'Koi', 'Class_11', 
'Region_11', '8', '15000', '2', 'assets/Pics/fish_pic/koi_1.jpeg', 'Ikan Koi'),
('FI00012', 'SEL002', 'Louhan', 'Class_12', 
'Region_12', '12', '21000', '3', 'assets/Pics/fish_pic/louhan_1.jpg', 'Ikan Louhan');

INSERT INTO `fish_desc` VALUES
-- TEMPLATE
-- ('idfish', 'name', 
-- 'desc1',
-- 'desc2',
-- 'desc3',
-- 'desc4',
-- 'desc5');
('FI00001', 'desc1_1', 'desc2_1',
'desc3_1', 'desc4_1', 'desc5_1'),
('FI00002', 'desc1_2', 'desc2_2',
'desc3_2', 'desc4_2', 'desc5_2'),
('FI00003', 'desc1_3', 'desc2_3',
'desc3_3', 'desc4_3', 'desc5_3'),
('FI00004', 'desc1_4', 'desc2_4',
'desc3_4', 'desc4_4', 'desc5_4');

INSERT INTO `shipment` VALUES
-- TEMPLATE
-- ('idshipment', 'idfish', 'idseller', 'date');


INSERT INTO `market` VALUES
-- TEMPLATE
-- ('month', 'idfish', 'idseller', 'status');

INSERT INTO `transaction` VALUES
-- TEMPLATE
-- Data Pembelian
-- ('idtrans', 'date');
-- Data Customer
-- ('firstname', 'lastname', 
-- 'email', 'number', 'address', 
-- 'province', 'city', 'district', 'neighborhoods', 'kodepos');
-- Data Transaksi
-- ('delivery', 'payment', 'price);