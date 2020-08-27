-- MySQL Workbench Synchronization
-- Generated: 2020-08-27 10:33
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Xavier

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

ALTER TABLE `csu`.`batches` 
DROP FOREIGN KEY `fk_batches_drugs`;

ALTER TABLE `csu`.`pharmachecks` 
DROP FOREIGN KEY `fk_pharmachecks_batches1`,
DROP FOREIGN KEY `fk_pharmachecks_stupsheets1`;

ALTER TABLE `csu`.`novachecks` 
DROP FOREIGN KEY `fk_novachecks_drugs1`,
DROP FOREIGN KEY `fk_novachecks_novas1`,
DROP FOREIGN KEY `fk_novachecks_stupsheets1`;

ALTER TABLE `csu`.`restocks` 
DROP FOREIGN KEY `fk_restocks_batches1`,
DROP FOREIGN KEY `fk_restocks_novas1`,
DROP FOREIGN KEY `fk_restocks_users1`;

ALTER TABLE `csu`.`stupsheets` 
DROP FOREIGN KEY `fk_stupsheets_bases1`;

ALTER TABLE `csu`.`stupsignatures` 
DROP FOREIGN KEY `fk_stupsignatures_stupsheets1`,
DROP FOREIGN KEY `fk_stupsignatures_users1`;

ALTER TABLE `csu`.`stupsheet_use_nova` 
DROP FOREIGN KEY `fk_stupsheet_use_nova_novas1`;

ALTER TABLE `csu`.`stupsheet_use_batch` 
DROP FOREIGN KEY `fk_stupsheet_use_batch_batches1`;

ALTER TABLE `csu`.`todosheets` 
DROP FOREIGN KEY `fk_todosheets_bases1`;

ALTER TABLE `csu`.`todos` 
DROP FOREIGN KEY `fk_todoitems_todosheets1`,
DROP FOREIGN KEY `fk_todoitems_users1`;

ALTER TABLE `csu`.`guardsheets` 
DROP FOREIGN KEY `fk_guardsheets_bases1`;

ALTER TABLE `csu`.`guardlines` 
DROP FOREIGN KEY `fk_guard_lines_guard_sections1`;

ALTER TABLE `csu`.`guardcontents` 
DROP FOREIGN KEY `fk_guard_items_guard_lines1`,
DROP FOREIGN KEY `fk_guard_items_guardsheets1`,
DROP FOREIGN KEY `fk_guard_items_users1`,
DROP FOREIGN KEY `fk_guard_items_users2`;

ALTER TABLE `csu`.`crews` 
DROP FOREIGN KEY `fk_crews_guardsheets1`,
DROP FOREIGN KEY `fk_crews_users1`;

ALTER TABLE `csu`.`guard_use_nova` 
DROP FOREIGN KEY `fk_novas_has_guardsheets_guardsheets1`;

ALTER TABLE `csu`.`todothings` 
CHANGE COLUMN `type` `type` INT(11) NOT NULL DEFAULT 1 COMMENT '1: done/not done\n2: has a value' ;

ALTER TABLE `csu`.`batches` 
ADD CONSTRAINT `fk_batches_drugs`
  FOREIGN KEY (`drug_id`)
  REFERENCES `csu`.`drugs` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`pharmachecks` 
DROP FOREIGN KEY `fk_pharmachecks_users1`;

ALTER TABLE `csu`.`pharmachecks` ADD CONSTRAINT `fk_pharmachecks_batches1`
  FOREIGN KEY (`batch_id`)
  REFERENCES `csu`.`batches` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pharmachecks_users1`
  FOREIGN KEY (`user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pharmachecks_stupsheets1`
  FOREIGN KEY (`stupsheet_id`)
  REFERENCES `csu`.`stupsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`novachecks` 
DROP FOREIGN KEY `fk_novachecks_users1`;

ALTER TABLE `csu`.`novachecks` ADD CONSTRAINT `fk_novachecks_drugs1`
  FOREIGN KEY (`drug_id`)
  REFERENCES `csu`.`drugs` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_novachecks_novas1`
  FOREIGN KEY (`nova_id`)
  REFERENCES `csu`.`novas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_novachecks_users1`
  FOREIGN KEY (`user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_novachecks_stupsheets1`
  FOREIGN KEY (`stupsheet_id`)
  REFERENCES `csu`.`stupsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`restocks` 
ADD CONSTRAINT `fk_restocks_batches1`
  FOREIGN KEY (`batch_id`)
  REFERENCES `csu`.`batches` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_restocks_novas1`
  FOREIGN KEY (`nova_id`)
  REFERENCES `csu`.`novas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_restocks_users1`
  FOREIGN KEY (`user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`stupsheets` 
ADD CONSTRAINT `fk_stupsheets_bases1`
  FOREIGN KEY (`base_id`)
  REFERENCES `csu`.`bases` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`stupsignatures` 
ADD CONSTRAINT `fk_stupsignatures_stupsheets1`
  FOREIGN KEY (`stupsheet_id`)
  REFERENCES `csu`.`stupsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_stupsignatures_users1`
  FOREIGN KEY (`user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`stupsheet_use_nova` 
DROP FOREIGN KEY `fk_stupsheet_use_nova_stupsheets1`;

ALTER TABLE `csu`.`stupsheet_use_nova` ADD CONSTRAINT `fk_stupsheet_use_nova_stupsheets1`
  FOREIGN KEY (`stupsheet_id`)
  REFERENCES `csu`.`stupsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_stupsheet_use_nova_novas1`
  FOREIGN KEY (`nova_id`)
  REFERENCES `csu`.`novas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`stupsheet_use_batch` 
DROP FOREIGN KEY `fk_stupsheet_use_batch_stupsheets1`;

ALTER TABLE `csu`.`stupsheet_use_batch` ADD CONSTRAINT `fk_stupsheet_use_batch_stupsheets1`
  FOREIGN KEY (`stupsheet_id`)
  REFERENCES `csu`.`stupsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_stupsheet_use_batch_batches1`
  FOREIGN KEY (`batch_id`)
  REFERENCES `csu`.`batches` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`todosheets` 
ADD CONSTRAINT `fk_todosheets_bases1`
  FOREIGN KEY (`base_id`)
  REFERENCES `csu`.`bases` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`todos` 
DROP FOREIGN KEY `fk_todoitems_todotexts1`;

ALTER TABLE `csu`.`todos` ADD CONSTRAINT `fk_todoitems_todotexts1`
  FOREIGN KEY (`todothing_id`)
  REFERENCES `csu`.`todothings` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_todoitems_todosheets1`
  FOREIGN KEY (`todosheet_id`)
  REFERENCES `csu`.`todosheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_todoitems_users1`
  FOREIGN KEY (`user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`guardsheets` 
ADD CONSTRAINT `fk_guardsheets_bases1`
  FOREIGN KEY (`base_id`)
  REFERENCES `csu`.`bases` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`guardlines` 
ADD CONSTRAINT `fk_guard_lines_guard_sections1`
  FOREIGN KEY (`guard_sections_id`)
  REFERENCES `csu`.`guardsections` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`guardcontents` 
ADD CONSTRAINT `fk_guard_items_guard_lines1`
  FOREIGN KEY (`guard_line_id`)
  REFERENCES `csu`.`guardlines` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_guard_items_guardsheets1`
  FOREIGN KEY (`guardsheet_id`)
  REFERENCES `csu`.`guardsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_guard_items_users1`
  FOREIGN KEY (`day_check_user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_guard_items_users2`
  FOREIGN KEY (`night_check_user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`crews` 
ADD CONSTRAINT `fk_crews_guardsheets1`
  FOREIGN KEY (`guardsheet_id`)
  REFERENCES `csu`.`guardsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_crews_users1`
  FOREIGN KEY (`user_id`)
  REFERENCES `csu`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `csu`.`guard_use_nova` 
DROP FOREIGN KEY `fk_novas_has_guardsheets_novas1`;

ALTER TABLE `csu`.`guard_use_nova` ADD CONSTRAINT `fk_novas_has_guardsheets_novas1`
  FOREIGN KEY (`nova_id`)
  REFERENCES `csu`.`novas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_novas_has_guardsheets_guardsheets1`
  FOREIGN KEY (`guardsheet_id`)
  REFERENCES `csu`.`guardsheets` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
