-- -----------------------------------------------------
-- Schema plataforma
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema plataforma
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `plataforma` DEFAULT CHARACTER SET utf8 ;
USE `plataforma` ;

-- -----------------------------------------------------
-- Table `plataforma`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `plataforma`.`users` ;

CREATE TABLE IF NOT EXISTS `plataforma`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `plataforma`.`arquivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `plataforma`.`arquivo` ;

CREATE TABLE IF NOT EXISTS `plataforma`.`arquivo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `autor` INT NOT NULL,
  `titulo` VARCHAR(200) NULL,
  `local` VARCHAR(100) NULL,
  `description` VARCHAR(1000) NULL,
  PRIMARY KEY (`id`, `autor`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_arquivo_users_idx` (`autor` ASC),
  CONSTRAINT `fk_arquivo_users`
    FOREIGN KEY (`autor`)
    REFERENCES `plataforma`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `plataforma`.`comentarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `plataforma`.`comentarios` ;

CREATE TABLE IF NOT EXISTS `plataforma`.`comentarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comentario` VARCHAR(2000) NULL,
  `id_file` INT NOT NULL,
  `arquivo_autor` INT NOT NULL,
  `id_user` INT NOT NULL,
  PRIMARY KEY (`id`, `id_file`, `arquivo_autor`, `id_user`),
  INDEX `fk_comentarios_users1_idx_arquivo1_idx` (`id_file` ASC, `arquivo_autor` ASC),
  INDEX `fk_comentarios_users1_idx` (`id_user` ASC),
  CONSTRAINT `fk_comentarios_arquivo1`
    FOREIGN KEY (`id_file` , `arquivo_autor`)
    REFERENCES `plataforma`.`arquivo` (`id` , `autor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentarios_users1`
    FOREIGN KEY (`id_user`)
    REFERENCES `plataforma`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
