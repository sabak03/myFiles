--
-- File generated with SQLiteStudio v3.3.3 on Wed Mar 30 21:48:50 2022
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: Cart
CREATE TABLE Cart (Order_ID float NOT NULL, Item_name char (20) NOT NULL, Cart_Qty float NOT NULL, PRIMARY KEY (Order_ID, Item_name), FOREIGN KEY (Order_ID) REFERENCES Orders (Order_ID), FOREIGN KEY (Item_name) REFERENCES Item (Item_name));
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (101.0, 'iphone', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (102.0, 'iphone', 3.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (103.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (104.0, 'motorola', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (105.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (106.0, 'iphone', 3.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (106.0, 'motorola', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (107.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (108.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (109.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (110.0, 'motorola', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (111.0, 'iphone', 3.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (112.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (113.0, 'iphone', 5.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (113.0, 'motorola', 5.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (114.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (114.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (115.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (116.0, 'motorola', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (117.0, 'iphone', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (118.0, 'iphone', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (118.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (119.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (120.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (121.0, 'iphone', 3.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (122.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (122.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (123.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (124.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (125.0, 'iphone', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (126.0, 'iphone', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (127.0, 'iphone', 2.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (128.0, 'motorola', 1.0);
INSERT INTO Cart (Order_ID, Item_name, Cart_Qty) VALUES (129.0, 'iphone', 2.0);

-- Table: Customer
CREATE TABLE Customer (Cust_ID float PRIMARY KEY, Cust_name VARCHAR (30) NOT NULL, Cust_location char (30) NOT NULL);
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (1.0, 'mr_fisher', 'wales');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (2.0, 'mrs_joel', 'england');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (3.0, 'mary_oli', 'coventry');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (4.0, 'anthony', 'birmingham');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (5.0, 'mr_biden', 'england');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (6.0, 'miss_sarah', 'wales');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (7.0, 'dr_alex', 'birmingham');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (8.0, 'miss_ola', 'scotland');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (9.0, 'williams', 'scotland');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (10.0, 'mrs_kiev', 'coventry');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (11.0, 'mr_dunker', 'wales');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (12.0, 'miss_leo', 'leicester');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (13.0, 'lara', 'wales');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (14.0, 'mr_joseph', 'london');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (15.0, 'kalim', 'worcester');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (16.0, 'dr_pam', 'coventry');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (17.0, 'ms_caroline', 'wales');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (18.0, 'mr_sesay', 'london');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (19.0, 'mrs_clara', 'liverpool');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (20.0, 'mr_rooney', 'derby');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (21.0, 'adam', 'coventry');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (22.0, 'karim', 'warwick');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (23.0, 'mr_aryan', 'coventry');
INSERT INTO Customer (Cust_ID, Cust_name, Cust_location) VALUES (24.0, 'miss_aisha', 'manchester');

-- Table: Discount
CREATE TABLE Discount (
Disc_ID varchar(50) primary key,
Disc_type char (30) not null,
Value text (10) not null);
INSERT INTO Discount (Disc_ID, Disc_type, Value) VALUES ('stu10', 'Student', '10%');
INSERT INTO Discount (Disc_ID, Disc_type, Value) VALUES ('sale10', 'Sale', '10%');
INSERT INTO Discount (Disc_ID, Disc_type, Value) VALUES ('resale12', 'Resale', '12%');

-- Table: Item
CREATE TABLE Item (
Item_name char (20) primary key,
Item_price float not null);
INSERT INTO Item (Item_name, Item_price) VALUES ('iphone', 500.0);
INSERT INTO Item (Item_name, Item_price) VALUES ('motorola', 450.0);

-- Table: Orders
CREATE TABLE Orders (Order_ID float NOT NULL, Cust_ID float NOT NULL, Disc_ID varchar (50), Order_date text (10) NOT NULL, Order_total float NOT NULL, PRIMARY KEY (Order_ID, Cust_ID), FOREIGN KEY (Disc_ID) REFERENCES Discount (Disc_ID));
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (1.0, 101.0, NULL, '01/02/2022', 1000.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (2.0, 102.0, NULL, '01/02/2022', 1500.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (3.0, 103.0, 'stu10', '01/02/2022', 405.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (4.0, 104.0, 'stu10', '01/02/2022', 900.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (5.0, 105.0, NULL, '02/02/2022', 500.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (6.0, 106.0, NULL, '02/02/2022', 2400.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (7.0, 107.0, NULL, '02/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (8.0, 108.0, 'stu10', '02/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (9.0, 109.0, 'sale10', '02/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (10.0, 110.0, NULL, '02/02/2022', 900.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (11.0, 111.0, NULL, '02/02/2022', 1500.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (12.0, 112.0, NULL, '03/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (13.0, 113.0, 'resale12', '03/02/2022', 4180.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (14.0, 114.0, NULL, '03/02/2022', 950.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (15.0, 115.0, 'stu10', '03/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (16.0, 116.0, NULL, '03/02/2022', 900.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (7.0, 117.0, NULL, '03/02/2022', 1000.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (17.0, 118.0, NULL, '03/02/2022', 1450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (18.0, 119.0, NULL, '03/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (19.0, 120.0, NULL, '04/02/2022', 500.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (20.0, 121.0, NULL, '04/02/2022', 1500.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (21.0, 122.0, 'sale10', '04/02/2022', 855.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (14.0, 123.0, NULL, '04/02/2022', 500.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (22.0, 124.0, 'sale10', '04/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (23.0, 125.0, NULL, '04/02/2022', 1000.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (24.0, 126.0, NULL, '04/02/2022', 500.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (10.0, 127.0, NULL, '04/02/2022', 1000.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (7.0, 128.0, NULL, '04/02/2022', 450.0);
INSERT INTO Orders (Order_ID, Cust_ID, Disc_ID, Order_date, Order_total) VALUES (11.0, 129.0, NULL, '04/02/2022', 1000.0);

-- Table: Returns
CREATE TABLE Returns(
Return_ID varchar (50) primary key,
Cust_ID float not null,
Item_name char (30) not null,
Qty_returned float not null,
Return_date text (10) not null,
Return_total float not null,
Foreign key (cust_ID) references customer (cust_ID),
Foreign key (item_name) references item (item_name));
INSERT INTO Returns (Return_ID, Cust_ID, Item_name, Qty_returned, Return_date, Return_total) VALUES ('r1', 2.0, 'iphone', 1.0, '04/02/2022', 500.0);
INSERT INTO Returns (Return_ID, Cust_ID, Item_name, Qty_returned, Return_date, Return_total) VALUES ('r2', 10.0, 'motorola', 2.0, '04/02/2022', 900.0);

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
