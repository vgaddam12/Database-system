-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-11-15 13:34:04.707

-- tables
-- Table: Migrant
CREATE TABLE Migrant (
    id int NOT NULL,
    number int NOT NULL,
    area int NOT NULL,
    series int NOT NULL,
    value int NOT NULL,
    source int NOT NULL,
    Population_id int NOT NULL,
    CONSTRAINT Migrant_pk PRIMARY KEY (id)
);

-- Table: Population
CREATE TABLE Population (
    id int NOT NULL,
    number int NOT NULL,
    area int NOT NULL,
    year int NOT NULL,
    series int NOT NULL,
    value int NOT NULL,
    source int NOT NULL,
    CONSTRAINT Population_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Migrant_Population (table: Migrant)
ALTER TABLE Migrant ADD CONSTRAINT Migrant_Population FOREIGN KEY Migrant_Population (Population_id)
    REFERENCES Population (id);

-- End of file.

