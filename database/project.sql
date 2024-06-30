DROP DATABASE IF EXISTS project;
DROP USER IF EXISTS coach@localhost;
CREATE DATABASE project;

USE project;

CREATE TABLE project.user(
    id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    surname VARCHAR(50),
    email VARCHAR(50) UNIQUE,
    password VARCHAR(100),
    isadmin BOOLEAN
);

CREATE TABLE project.info(
    id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id TINYINT UNSIGNED,
    license INT UNIQUE,
    medals VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES project.user(id)
);

INSERT INTO project.user
VALUES
    (NULL, 'GIRONDE', 'Vincent', 'vgironde@gmail.com', '$2y$10$zb.yXVARloXxDLlngXczzOWY5MmXIPD1v.4CGg19cr.9gZvIdH33y', 1),
    (NULL, 'GIRONDE', 'Laetitia', 'laeti@gmail.com', '$2y$10$zb.yXVARloXxDLlngXczzOWY5MmXIPD1v.4CGg19cr.9gZvIdH33y', 1)
    ;

INSERT INTO project.info
VALUES
    (NULL, 1, 14641, 'Argent major de Danse'),
    (NULL, 2, 15041, 'Pré bronze de Danse')
    ;




