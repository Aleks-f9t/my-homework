SELECT Name, AVG(pharmacists.Age)
FROM pharmacytbl.pharmacists
GROUP BY Name