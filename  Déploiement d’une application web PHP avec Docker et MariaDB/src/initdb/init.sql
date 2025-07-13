CREATE DATABASE domainenoah;

USE domainenoah;

CREATE TABLE ville (
  nom VARCHAR(100),
  region VARCHAR(100),
  population INT
);

INSERT INTO ville VALUES
('Rimouski', 'Bas-Saint-Laurent', 49664),
('Sainte-Agathe-des-Monts', 'Laurentides', 10223),
('Saint-Jean-sur-Richelieu', 'Montérégie', 97873),
('Coaticook', 'Estrie', 9270),
('Rouyn-Noranda', 'Abitibi-Témiscamingue', 42334);
