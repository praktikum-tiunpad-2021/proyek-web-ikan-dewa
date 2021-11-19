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
('FI00001', 'SEL001', 'Guppy', 'Saltwater Fish', 'Class_1', 
'Region_1',  'Blue Red',1 , 5000, 5, 'assets/Pics/fish_pic/guppy_1.jpg', 'Ikan Guppy'),
('FI00002', 'SEL001', 'Molly', 'Saltwater Fish', 'Class_2', 
'Region_2',  'Yellow',2, 4000, 4, 'assets/Pics/fish_pic/molly_1.jpg', 'Ikan Molly'),
('FI00003', 'SEL002', 'Cupang', 'Saltwater Fish', 'Class_3', 
'Region_3',  'Yellow',3, 2000, 2, 'assets/Pics/fish_pic/cupang_1.jpg', 'Ikan Cupang'),
('FI00004', 'SEL003', 'Manfish', 'Saltwater Fish', 'Class_4', 
'Region_4',  'White Silver',4, 3000, 3, 'assets/Pics/fish_pic/manfish_1.jpg', 'Ikan Manfish'),
('FI00005', 'SEL001', 'Lemon', 'Saltwater Fish', 'Class_5', 
'Region_5',  'Yellow',6, 1000, 3, 'assets/Pics/fish_pic/lemon_1.png', 'Ikan Lemon'),
('FI00006', 'SEL001', 'Black Ghost', 'Saltwater Fish', 'Class_6', 
'Region_6',  'Black',2, 90000, 1, 'assets/Pics/fish_pic/black_ghost_1.jpg', 'Ikan Black Ghost'),
('FI00007', 'SEL003', 'Discus', 'Saltwater Fish', 'Class_7', 
'Region_7',  'Orange',1, 8000, 3, 'assets/Pics/fish_pic/discus_1.jpg', 'Ikan Discus'),
('FI00008', 'SEL002', 'Platy', 'Saltwater Fish', 'Class_8', 
'Region_8',  'Orange',3, 6000, 2, 'assets/Pics/fish_pic/platy_1.jpg', 'Ikan Platy'),
('FI00009', 'SEL003', 'Mas Koki', 'Saltwater Fish', 'Class_9', 
'Region_9',  'Yellow White',2, 10000, 3, 'assets/Pics/fish_pic/mas_koki_1.jpg', 'Ikan Mas Koki'),
('FI00010', 'SEL001', 'Arwana', 'Saltwater Fish', 'Class_10', 
'Region_10', 'Red', 3, 7000, 1, 'assets/Pics/fish_pic/arwana_1.png', 'Ikan Arwana'),
('FI00011', 'SEL001', 'Koi', 'Saltwater Fish', 'Class_11', 
'Region_11', 'Red White', 8, 15000, 2, 'assets/Pics/fish_pic/koi_1.jpeg', 'Ikan Koi'),
('FI00012', 'SEL002', 'Louhan', 'Saltwater Fish', 'Class_12', 
'Region_12', 'White Red', 12, 21000, 3, 'assets/Pics/fish_pic/louhan_1.jpg', 'Ikan Louhan');

INSERT INTO `fish_detail` VALUES
-- TEMPLATE
-- ('idfish', 'name', 
-- 'desc1',
-- 'desc2',
-- 'desc3',
-- 'desc4',
-- 'desc5');
('FI00001', 'desc1_1', 'desc2_1',
'desc3_1', 'desc4_1', 'desc5_1',
'assets/Pics/fish_pic/guppy_1.jpg', 'assets/Pics/fish_pic/guppy_2.jpg', 
'assets/Pics/fish_pic/guppy_3.jpg', 'assets/Pics/fish_pic/guppy_4.jpg', 
'assets/Pics/fish_pic/guppy_5.jfif'),
('FI00002', 'desc1_2', 'desc2_2',
'desc3_2', 'desc4_2', 'desc5_2',
'assets/Pics/fish_pic/molly_1.jpg', 'assets/Pics/fish_pic/molly_2.jfif', 
'assets/Pics/fish_pic/molly_3.jfif', 'assets/Pics/fish_pic/molly_4.jfif', 
'assets/Pics/fish_pic/molly_5.jpg'),
('FI00003', 'desc1_3', 'desc2_3',
'desc3_3', 'desc4_3', 'desc5_3',
'assets/Pics/fish_pic/cupang_1.jpg', 'assets/Pics/fish_pic/cupang_2.jpg', 
'assets/Pics/fish_pic/cupang_3.jpg', 'assets/Pics/fish_pic/cupang_4.jpg', 
'assets/Pics/fish_pic/cupang_5.jpg'),
('FI00004', 'desc1_4', 'desc2_4',
'desc3_4', 'desc4_4', 'desc5_4',
'assets/Pics/fish_pic/manfish_1.jpg', 'assets/Pics/fish_pic/manfish_2.jpg', 
'assets/Pics/fish_pic/manfish_3.jfif', 'assets/Pics/fish_pic/manfish_4.jpg', 
'assets/Pics/fish_pic/manfish_5.jpg'),

('FI00005', 'desc1_5', 'desc2_5',
'desc3_5', 'desc4_5', 'desc5_5',
'assets/Pics/fish_pic/lemon_1.png', 'assets/Pics/fish_pic/lemon_2.png', 
'assets/Pics/fish_pic/lemon_3.jfif', 'assets/Pics/fish_pic/lemon_4.png', 
'assets/Pics/fish_pic/lemon_5.png'),
('FI00006', 'desc1_6', 'desc2_6',
'desc3_6', 'desc4_6', 'desc5_6',
'assets/Pics/fish_pic/black_ghost_1.jpg', 'assets/Pics/fish_pic/black_ghost_2.jpg', 
'assets/Pics/fish_pic/black_ghost_3.jfif', 'assets/Pics/fish_pic/black_ghost_4.jpg', 
'assets/Pics/fish_pic/black_ghost_5.jpg'),
('FI00007', 'desc1_7', 'desc2_7',
'desc3_7', 'desc4_7', 'desc5_7',
'assets/Pics/fish_pic/discus_1.jpg', 'assets/Pics/fish_pic/discus_2.jpg', 
'assets/Pics/fish_pic/discus_3.jpg', 'assets/Pics/fish_pic/discus_4.jfif', 
'assets/Pics/fish_pic/discus_5.jpg'),
('FI00008', 'desc1_8', 'desc2_8',
'desc3_8', 'desc4_8', 'desc5_8',
'assets/Pics/fish_pic/platy_1.jpg', 'assets/Pics/fish_pic/platy_2.jfif', 
'assets/Pics/fish_pic/platy_3.jpg', 'assets/Pics/fish_pic/platy_4.jpg', 
'assets/Pics/fish_pic/platy_5.jfif'),

('FI00009', 'desc1_9', 'desc2_9',
'desc3_9', 'desc4_9', 'desc5_9',
'assets/Pics/fish_pic/mas_koki_1.jpg', 'assets/Pics/fish_pic/mas_koki_2.jfif', 
'assets/Pics/fish_pic/mas_koki_3.jfif', 'assets/Pics/fish_pic/mas_koki_4.jpg', 
'assets/Pics/fish_pic/mas_koki_5.jpg'),
('FI00010', 'desc1_10', 'desc2_10',
'desc3_10', 'desc4_10', 'desc5_10',
'assets/Pics/fish_pic/arwana_1.png', 'assets/Pics/fish_pic/arwana_2.jpg', 
'assets/Pics/fish_pic/arwana_3.jpg', 'assets/Pics/fish_pic/arwana_4.jfif', 
'assets/Pics/fish_pic/arwana_5.jfif'),
('FI00011', 'desc1_11', 'desc2_11',
'desc3_11', 'desc4_11', 'desc5_11',
'assets/Pics/fish_pic/koi_1.jpeg', 'assets/Pics/fish_pic/koi_2.jfif', 
'assets/Pics/fish_pic/koi_3.jpg', 'assets/Pics/fish_pic/koi_4.jfif', 
'assets/Pics/fish_pic/koi_5.jpg'),
('FI00012', 'desc1_12', 'desc2_12',
'desc3_12', 'desc4_12', 'desc5_12',
'assets/Pics/fish_pic/louhan_1.jpg', 'assets/Pics/fish_pic/louhan_2.jfif', 
'assets/Pics/fish_pic/louhan_3.jfif', 'assets/Pics/fish_pic/louhan_4.jfif', 
'assets/Pics/fish_pic/louhan_5.jpg');

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

INSERT INTO cart VALUES
-- TEMPLATE
-- ('Id_Fish');
(1, 'FI00001', 2),
(2, 'FI00011', 2);

INSERT INTO wishlist VALUES
-- TEMPLATE
-- ('Id_Fish');
(1, 'FI00005', 2),
(2, 'FI00010', 2);

INSERT INTO fish_views VALUES
-- TEMPLATE
-- ('Id_Page', 'Id_Fish', 'Total_Views')
(1, 'FI00001', 40),
(2, 'FI00002', 30),
(3, 'FI00003', 50),
(4, 'FI00004', 80),
(5, 'FI00005', 90),
(6, 'FI00006', 100),
(7, 'FI00007', 20),
(8, 'FI00008', 25),
(9, 'FI00009', 70),
(10, 'FI00010', 55),
(11, 'FI00011', 120),
(12, 'FI00012', 150);
