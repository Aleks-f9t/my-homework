SELECT name, CountryCode,District, Population
FROM city
WHERE name LIKE "K%" AND Population > 450000;