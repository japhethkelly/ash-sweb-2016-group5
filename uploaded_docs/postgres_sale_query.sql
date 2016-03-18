select "cid", "firstname", "lastname", "address_country" from "customer";
select "customer"."cid", "customer"."firstname", "customer"."lastname", "employee"."lastname" from "customer", "employee" where "customer"."lastname" = "employee"."lastname";
select "customer"."firstname", "customer"."lastname", sum("sale"."quantity_supplied") from "customer", "sale" where "customer"."cid"="sale"."cid" group by "customer"."firstname", "customer"."lastname";
select "product"."pname", "customer"."firstname", "customer"."lastname" from "product", "customer", "sale" where "sale"."cid"=1 and "sale"."cid"="customer"."cid";
select "product"."pname", "sale"."sale_date" from "product", "sale" where "sale"."sale_date"='2015-03-05' and "product"."pid"="sale"."pid";
