CREATE TABLE IF NOT EXISTS `visitdoctor` (
  `id` INT NOT NULL,
  `patseans_seansid` INT NOT NULL REFERENCES `patseans` (`seansid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  `Doctors_id` INT NOT NULL REFERENCES `Doctors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  `result` VARCHAR(45) NULL,
  `date` DATETIME NULL,
  PRIMARY KEY (`id`)
    );
