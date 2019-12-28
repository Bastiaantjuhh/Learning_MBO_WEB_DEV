CREATE TABLE `fans` (
`idfans` int(11) NOT NULL,
`voornaam` varchar(45) NOT NULL,
`tussenvoegsel` varchar(10) DEFAULT NULL,
`achternaam` varchar(45) NOT NULL,
`straat` varchar(45) NOT NULL,
`huisnummer` int(11) NOT NULL,
`huisnummertoevoeging` varchar(10) DEFAULT NULL,
`postcode` varchar(6) NOT NULL,
`plaats` varchar(45) NOT NULL,
`email` varchar(45) NOT NULL,
`telefoonnummer` varchar(15) NOT NULL,
`mobielnummer` varchar(15) DEFAULT NULL,
`leeftijd` int(11) NOT NULL,
`gebruikersnaam` varchar(15) NOT NULL,
`wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

------------------

CREATE TABLE `fans` (
`idfans` int(11) NOT NULL,
`voornaam` varchar(45) NOT NULL,
`gebruikersnaam` varchar(15) NOT NULL,
`wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;