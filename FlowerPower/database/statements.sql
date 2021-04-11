Create DATABASE FlowerPower;
USE FlowerPower;

-- Table Klant:
CREATE TABLE klant(
    klantcode INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    voorletters VARCHAR(10),
    tussenvoegsels VARCHAR(50),
    achternaam VARCHAR(255),
    adres VARCHAR(255),
    postcode VARCHAR(255),
    woonplaats VARCHAR(255),
    geboortedatum DATE,
    gebruikersnaam VARCHAR(255),
    wachtwoord NVARCHAR(255)
);

-- Table Factuur:
CREATE TABLE factuur(
    factuurnummer INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    factuurdatum DATE,
    klantcode INT, 
    FOREIGN KEY(klantcode) REFERENCES klant(klantcode)
);

-- Table Artikel:
CREATE TABLE artikel(
    artikelcode INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    artikel VARCHAR(255),
    prijs DECIMAL(6,2)
);

-- Table Factuurregel:
CREATE TABLE factuurregel(
    factuurnummer INT,
    artikelcode INT,
    aantal INT,
    prijs DECIMAL(6,2),
    FOREIGN KEY(factuurnummer) REFERENCES factuur(factuurnummer),
    FOREIGN KEY(artikelcode) REFERENCES artikel(artikelcode)
);

-- Table Medewerker:
CREATE TABLE medewerker(
    medewerkerscode INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    voorletters VARCHAR(10),
    voorvoegsels VARCHAR(50),
    achternaam VARCHAR(255),
    gebruikersnaam VARCHAR(255),
    wachtwoord NVARCHAR(255)
);

-- Change Column name
ALTER TABLE medewerker
  CHANGE voorvoegsels  tussenvoegsels varchar(255);

-- Table Winkel:
CREATE TABLE winkel(
    winkelcode INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    winkelnaam VARCHAR(255),
    winkeladres VARCHAR(255),
    winkelpostcode VARCHAR(255),
    vestigingsplaats VARCHAR(255),
    telefoonnummer VARCHAR(15)
);

-- Table Bestelling:
CREATE TABLE bestelling(
    artikelcode INT,
    winkelcode INT,
    aantal INT,
    klantcode INT,
    medewerkerscode INT,
    FOREIGN KEY(artikelcode) REFERENCES artikel(artikelcode),
    FOREIGN KEY(winkelcode) REFERENCES winkel(winkelcode),
    FOREIGN KEY(klantcode) REFERENCES klant(klantcode),
    FOREIGN KEY(medewerkerscode) REFERENCES medewerker(medewerkerscode)
);




-- table medewerker info-example inserted
INSERT INTO medewerker(voorletters, tussenvoegsels, achternaam, gebruikersnaam, wachtwoord)
    VALUES
		("M.C", "van", "Camen", "Micheal0289", "Micheal123"),
		("A.G", NULL , "Gandak", "gandak0290", "Achmed123"),
		("S.P", "van de", "Post", "Siana0291", "siana123"),
		("P.D", "van", "Dijk", "peter0292", "dijk123"),
		("L.S", Null, "Sauna", "lana0293", "sauna123"),
		("F.P", Null, "Peters", "ferrit0294", "ferrit123");

INSERT INTO artikel(artikel, prijs)
    VALUES
        ("tulpen", 1.95),
        ("zonnebloemen", 1.55),
        ("witte rozen", 2.85),
        ("roze rozen", 1.05),
        ("acia", 3.75),
        ("orchidee", 7.95),
        ("narcis", 4.95),
        ("Madeliefje", 2.75),
        ("Margriet", 2.65);

ALTER TABLE artikel ADD aantal INT;
-- DELETE FROM artikel WHERE artikelcode>=15;