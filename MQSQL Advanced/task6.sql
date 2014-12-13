SELECT k.PharmacyID, k.Name, k.Address, c.PharmacistID, c.Name, c.Age,c. Gender,c. PIN,l.Distributor,l.Stock,l. Price 
FROM pharmacytbl.pharmacies AS k
JOIN pharmacytbl.pharmacists AS c ON c.PharmacyID = k.PharmacyID
JOIN pharmacytbl.medicals AS l ON l.PharmacyID = k.PharmacyID
