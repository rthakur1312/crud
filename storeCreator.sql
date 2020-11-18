CREATE DATABASE p1RashiThakur;
USE p1RashiThakur;
CREATE TABLE Products (
id int AUTO_INCREMENT,
ProductName VARCHAR(50) NOT NULL,
InventoryAmount VARCHAR (50) NOT NULL,
Image longblob NOT NULL,
PRIMARY KEY(id)
);
INSERT INTO Products (ProductName, InventoryAmount, Image) VALUES  ("Shoes", 10, Images/sell.jpeg), ("Top", 15), ("Running Shoes", 8), ("Accessories", 20), ("Shorts", 12), ("Shirts", 5);

CREATE TABLE Orders (
OrderId int AUTO_INCREMENT,
CustomerFirstName VARCHAR(50) NOT NULL,
CustomerLastName VARCHAR (50) NOT NULL,
PaymentType VARCHAR(50) NOT NULL,
ProductId INT NOT NULL,
PRIMARY KEY(OrderId)
);

