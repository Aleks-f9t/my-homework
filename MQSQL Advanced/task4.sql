SELECT Price, MAX(medicals.price) AS Leva
FROM pharmacytbl.medicals
GROUP BY Price
ORDER BY Price;