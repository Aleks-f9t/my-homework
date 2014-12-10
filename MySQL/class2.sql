SELECT * 
FROM `country`;

SELECT Code, Name, Continent,Region, SurfaceArea
FROM country
WHERE Continent = ("South America" OR  Continent = "Asia") AND SurfaceArea < 13000;