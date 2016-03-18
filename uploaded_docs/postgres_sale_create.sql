-- Database: post

-- DROP DATABASE post;

CREATE DATABASE post
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'English_United States.1252'
       LC_CTYPE = 'English_United States.1252'
       CONNECTION LIMIT = -1;
       
drop table sale;
drop table employee;
drop table customer;
drop table branch;
drop table product;



create table customer
(
cid serial PRIMARY KEY,
firstname VARCHAR (45),
lastname VARCHAR (50),
gender VARCHAR (45),
dateofbirth DATE,
address_country VARCHAR (60),
address_region VARCHAR (50),
address_city VARCHAR (100),
address_street VARCHAR (45),
address_housenumber VARCHAR (20),
address_p_o_box VARCHAR (20),
phone_countrycode DECIMAL (3,0),
phone_number DECIMAL (12,0),
phone_extension DECIMAL (5,0)
);

create table product
(
pid serial PRIMARY KEY,
pname VARCHAR (200),
description VARCHAR (500),
quantity_in_stock INTEGER,
current_price DECIMAL (10,2)
);

create table branch
(
bid serial PRIMARY KEY,
bname VARCHAR (45),
dateofestablishment DATE,
address_country VARCHAR (60),
address_region VARCHAR (50),
address_city VARCHAR (100),
address_street VARCHAR (45),
address_housenumber VARCHAR (20),
address_p_o_box VARCHAR (20),
phone_countrycode DECIMAL (3,0),
phone_number DECIMAL (12,0),
phone_extension DECIMAL (5,0)
);

create table employee
(
eid serial PRIMARY KEY,
firstname VARCHAR(45),
lastname VARCHAR (50),
gender VARCHAR (45),
dateofbirth DATE,
phone_number DECIMAL (12,0),
phone_extension DECIMAL (5,0),
hire_date DATE,
bid INT,
foreign key (bid) references branch (bid)
);

create table sale
(
sid serial PRIMARY KEY,
sale_date DATE,
sale_time TIME,
sale_timestamp TIMESTAMP,
quantity_requested INT,
quantity_supplied INT,
purchase_price DECIMAL (10,2),
cid INT,
pid INT,
eid INT,
foreign key (pid) references product (pid),
foreign key (cid) references customer (cid),
foreign key (eid) references employee (eid)
);
