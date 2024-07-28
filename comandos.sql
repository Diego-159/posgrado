-- SQLBook: Code
CREATE TABLE users (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE,
    password VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
    role TINYINT(1) UNSIGNED NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE documentos(
    id_user INT(10) UNSIGNED NOT NULL,
    documento VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id)
);
ALTER TABLE users ADD COLUMN email_verified_at TIMESTAMP;
ALTER TABLE users ADD COLUMN remember_token VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE TABLE paises(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    pais VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (id)
);
ALTER TABLE users ADD COLUMN id_pais INT(10) UNSIGNED;

CREATE TABLE datosPersonales(
    id INT(10) UNSIGNED NOT NULL,
    fecha_nacimiento DATE,
    estado_civil TINYINT(2) UNSIGNED,
    direccion TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    ciudad VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    estado VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    telefono VARCHAR(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    foto mediumblob,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES users(id)
);

ALTER TABLE datosPersonales ADD COLUMN bandera TINYINT(1) UNSIGNED NOT NULL;

CREATE TABLE mecanismo(
    id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
    mecanismo VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE mecanismoUser(
    id_user INT(10) UNSIGNED NOT NULL,
    id_mecanismo TINYINT UNSIGNED NOT NULL,
    PRIMARY KEY (id_user, id_mecanismo),
    FOREIGN KEY (id_user) REFERENCES users(id),
    FOREIGN KEY (id_mecanismo) REFERENCES mecanismo(id)
);

INSERT INTO mecanismo(mecanismo) VALUES('Examen de admisión');
INSERT INTO mecanismo(mecanismo) VALUES('Curso propedéutico');
INSERT INTO mecanismo(mecanismo) VALUES('Ingreso por promedio');


CREATE TABLE datostrabajo(
    id INT(10) UNSIGNED NOT NULL,
    ocupacion VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    direccion VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    ciudad VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    estado VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    telefono VARCHAR(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES users(id)
);

CREATE TABLE datosestudios(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    id_user INT(10) UNSIGNED NOT NULL,
    grado VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    fecha_egreso DATE,
    fecha_titulacion DATE,
    promedio FLOAT(5,2),
    nivel BIT(1) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES users(id)
);

CREATE TABLE institucion(
    id_estudios INT(10) UNSIGNED NOT NULL,
    institucion VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    FOREIGN KEY (id_estudios) REFERENCES datosestudios(id)
);

CREATE TABLE examenes(
    id_estudios INT(10) UNSIGNED NOT NULL,
    num_extras INT(2) UNSIGNED,
    adi_cnval FLOAT(5,2),
    FOREIGN KEY (id_estudios) REFERENCES datosestudios(id)
);

CREATE TABLE otrosestudios(
    id INT(10) UNSIGNED NOT NULL,
    estudios VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES users(id)
);

ALTER TABLE datosPersonales CHANGE COLUMN bandera programa BIT(1) NOT NULL;