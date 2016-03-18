insert into "customer" ("firstname", "lastname", "gender", "dateofbirth", "address_country", "address_region", "address_city","address_street","address_housenumber", "address_p_o_box", "phone_countrycode", "phone_number", "phone_extension") values ( 'Peter', 'Pepper', 'M', '1984-05-04', 'England', 'Central', 'London', 'No 10. Downing Street', 'No. 10', 'P.O. box 1720', 233, 2311689668, 0044);

insert into "customer" ("firstname", "lastname", "gender", "dateofbirth", "address_country", "address_region", "address_city","address_street","address_housenumber", "address_p_o_box", "phone_countrycode", "phone_number", "phone_extension") values ( 'Wendy', 'Pew', 'F', '1990-04-06', 'England', 'Northern', 'Manchester', 'No 11. Downing Street', 'No. 11', 'P.O. box 720', 203, 23164565668, 0043);

insert into "customer" ("firstname", "lastname", "gender", "dateofbirth", "address_country", "address_region", "address_city","address_street","address_housenumber", "address_p_o_box", "phone_countrycode", "phone_number", "phone_extension") values ( 'Arnaus', 'Pan', 'M', '1984-05-04', 'England', 'Central', 'London', 'No 10. Downing Street', 'No. 10', 'P.O. box 1720', 233, 2311683458, 0044);

insert into "customer" ("firstname", "lastname", "gender", "dateofbirth", "address_country", "address_region", "address_city","address_street","address_housenumber", "address_p_o_box", "phone_countrycode", "phone_number", "phone_extension") values ('Welsch', 'Pew', 'M', '1984-05-04', 'England', 'Central', 'London', 'No 10. Downing Street', 'No. 10', 'P.O. box 1720', 233, 2311689645, 0044);

insert into "customer" ("firstname", "lastname", "gender", "dateofbirth", "address_country", "address_region", "address_city","address_street","address_housenumber", "address_p_o_box", "phone_countrycode", "phone_number", "phone_extension") values ( 'Penny', 'Peanut', 'M', '1984-05-04', 'England', 'Central', 'London', 'No 10. Downing Street', 'No. 10', 'P.O. box 1720', 233, 23116894238, 0044);

insert into "branch" ("bname", "dateofestablishment", "address_country", "address_region", "address_city","address_street","address_housenumber", "address_p_o_box", "phone_countrycode", "phone_number", "phone_extension")values ( 'Osu', '1987-04-05', 'England', 'Central', 'London', 'No 10. Downing Street', 'No. 10', 'P.O. box 1720', 233, 2311689645, 0044);

insert into "branch" ("bname", "dateofestablishment", "address_country", "address_region", "address_city","address_street","address_housenumber", "address_p_o_box", "phone_countrycode", "phone_number", "phone_extension") values ( 'Achimota', '1987-04-05', 'Ghana', 'Central', 'Cape Coast', 'No 10. Kakumdo Hill', 'No. 10', 'P.O. box 61', 233, 2311689645, 0044);

insert into "employee"("firstname", "lastname", "gender", "dateofbirth", "phone_number", "phone_extension", "hire_date", "bid") values ( 'Jon', 'Doe', 'M', '1987-03-04', 1213327654, 033, '2001-03-05', 1);
 
insert into "employee"("firstname", "lastname", "gender", "dateofbirth", "phone_number", "phone_extension", "hire_date", "bid") values ( 'Jane', 'Pan', 'F', '1983-06-09', 9876327654, 033, '2005-09-08',2);
 
insert into "employee"("firstname", "lastname", "gender", "dateofbirth", "phone_number", "phone_extension", "hire_date", "bid") values ( 'Jules', 'Verne', 'M', '1994-07-04', 1920397654, 023, '2009-03-05', 1);
 
insert into "employee"("firstname", "lastname", "gender", "dateofbirth", "phone_number", "phone_extension", "hire_date", "bid") values ('Maria', 'Dan', 'F', '1998-03-04', 2213398654, 034, '2014-03-05',2);
 
insert into "employee"("firstname", "lastname", "gender", "dateofbirth", "phone_number", "phone_extension", "hire_date", "bid") values ( 'Marlon', 'Duke', 'M', '1981-05-04', 00938737654, 033, '1999-09-05',1);
 
insert into "product" ("pname", "description", "quantity_in_stock", "current_price") values ( 'Indomie', 'instant noodles', 20, 2);

insert into "product" ("pname", "description", "quantity_in_stock", "current_price") values ( 'Yoghurt', 'ice cream', 30, 1);

insert into "product" ("pname", "description", "quantity_in_stock", "current_price") values ( 'Chips', 'crispy made from plantain', 50, 0.50);

insert into "product" ("pname", "description", "quantity_in_stock", "current_price") values ( 'Water', 'cool and refreshing', 100, 0.20);

insert into "sale" ("sale_date", "sale_time", "quantity_requested", "quantity_supplied", "purchase_price", "cid", "pid", "eid") values ('2015-03-05', '21:15', 34, 32, 789, 1, 2, 3);

insert into "sale" ("sale_date", "sale_time",  "quantity_requested", "quantity_supplied", "purchase_price", "cid", "pid", "eid") values ( '2015-04-06', '22:15', 34, 22, 789, 1, 2, 3);

insert into "sale" ("sale_date", "sale_time", "quantity_requested", "quantity_supplied", "purchase_price", "cid", "pid", "eid") values ( '2015-03-05', '21:59', 4, 4, 16, 2, 1, 3);

insert into "sale" ("sale_date", "sale_time",  "quantity_requested", "quantity_supplied", "purchase_price", "cid", "pid", "eid") values ( '2015-03-06', '23:59', 4, 7, 16, 2, 4, 3);

insert into "sale" ("sale_date", "sale_time",  "quantity_requested", "quantity_supplied", "purchase_price", "cid", "pid", "eid") values ('2015-04-05', '22:00', 4, 3, 78, 3, 2, 2);

insert into "sale" ("sale_date", "sale_time",  "quantity_requested", "quantity_supplied", "purchase_price", "cid", "pid", "eid") values ( '2015-09-05', '21:00', 4, 3, 78, 3, 2, 2);
