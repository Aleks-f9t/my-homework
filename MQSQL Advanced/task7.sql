( 
SELECT Name, Gender, Age, PIN 
FROM pharmacytbl.pharmacists 
WHERE  Age < 30
 )
 UNION
 (
 SELECT Name, Gender, Age, PIN FROM pharmacytbl.pharmacists 
 WHERE Age > 50
 ) 
 ORDER BY Name