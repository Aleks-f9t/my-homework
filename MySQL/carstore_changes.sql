INSERT INTO brands(Name,BrandID)
VALUES ('Toyota',0),
 ('BMW',1),
 ('FORD',2);
 
INSERT INTO cars(Color,Year,BrandID)
VALUES ('yellow','1999',0),
 ('red','1899',1),
 ('blue','1992',2);
 
 INSERT INTO regions(Name,Country,CarID)
VALUES ('София','България',0),
 ('Florida','United States',1),
 ('Paris','France',2);
 
 UPDATE cars SET color='green'
WHERE color='red';
 UPDATE brands SET name='Seat'
WHERE name='FORD';