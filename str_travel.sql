/*deepmala 16-01-24*/
CREATE TABLE `user` (
    id int(11),
    fname varchar(255),
    lname varchar(255),
    username varchar(255),
    password varchar(255),
    roleid int(11),
    market_id int(11),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_by int(11),
    status  enum('0', '1')  
);

INSERT INTO user (id, fname, lname, username, password, roleid, market_id,  status, created_by)
VALUES
    (1, 'Deepmala', 'Gupta', 'deepmalagupta111@gmail.com', '$2y$10$HTzjXbcuzXGhKSQRTAG9/ejF9GRq4e2FrDEUFbO45ilRaFczCZs.G', 
        1, 1, '1','1');

/*bhumi 16-01-24*/
ALTER TABLE `user` CHANGE `status` `status` ENUM('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL AFTER `market_id`;

ALTER TABLE `user` CHANGE `created_by` `created_by` INT(11) NULL DEFAULT '1' AFTER `status`;

CREATE TABLE `shiseido_travel`.`userrole` (`id` INT NOT NULL AUTO_INCREMENT , `role` VARCHAR(200) NOT NULL , `isadmin` ENUM('1','0') NOT NULL DEFAULT '0' COMMENT '0: no-admin 1:admin' , `status` ENUM('0','1','2') NOT NULL DEFAULT '1' COMMENT '0:inactive 1:active 2:hide' , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO user (id, fname, lname, username, password, roleid, market_id,  status, created_by)
VALUES
    (2, 'Bhumi', 'Mehta', 'bhumi.mehta@brand-scapes.com', '$2y$10$HTzjXbcuzXGhKSQRTAG9/ejF9GRq4e2FrDEUFbO45ilRaFczCZs.G', 
        1, 1, '1','1'),
    (3, 'Vilas', 'Kirve', 'vilas.kirve@brand-scapes.com', '$2y$10$HTzjXbcuzXGhKSQRTAG9/ejF9GRq4e2FrDEUFbO45ilRaFczCZs.G', 
        1, 1, '1','1'),
    (4, 'Vikas', 'Bist', 'vikas.bist@brand-scapes.com', '$2y$10$HTzjXbcuzXGhKSQRTAG9/ejF9GRq4e2FrDEUFbO45ilRaFczCZs.G', 
        1, 1, '1','1');

CREATE TABLE `shiseido_travel`.`module_master` (`id` INT(11) NOT NULL AUTO_INCREMENT , `module_name` VARCHAR(250) NOT NULL , `orderid` INT(11) NOT NULL , `status` ENUM('0','1','2') NOT NULL DEFAULT '1' COMMENT '0:inactive 1:active 2:hide' , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `shiseido_travel`.`menu_master` (`id` INT(11) NOT NULL AUTO_INCREMENT , `menu` VARCHAR(250) NOT NULL , `pageurl` VARCHAR(500) NOT NULL , `moduleid` INT(11) NOT NULL , `orderid` INT(11) NOT NULL , `status` ENUM('0','1','2') NOT NULL DEFAULT '1' COMMENT '0:inactive 1:active 2:hide ' , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/*bhumi 19-01-24*/
ALTER TABLE `userrole` ADD `isdeleted` ENUM('0','1') NOT NULL DEFAULT '0' COMMENT '0:not deleted 1:deleted' AFTER `status`;
ALTER TABLE `user` ADD `isdeleted` ENUM('0','1') NOT NULL DEFAULT '0' COMMENT '0:not deleted 1:deleted' AFTER `status`;
ALTER TABLE `module_master` ADD `isdeleted` ENUM('0','1') NOT NULL DEFAULT '0' COMMENT '0:not deleted 1:deleted' AFTER `status`;
ALTER TABLE `menu_master` ADD `isdeleted` ENUM('0','1') NOT NULL DEFAULT '0' COMMENT '0:not deleted 1:deleted' AFTER `status`;
ALTER TABLE `menu_master` ADD `parentmenuid` INT(11) NOT NULL AFTER `moduleid`;
ALTER TABLE `user` CHANGE `id` `id` INT(11) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);
CREATE TABLE `shiseido_travel`.`accesscontrol` (`id` INT(11) NOT NULL AUTO_INCREMENT , `roleid` INT(11) NOT NULL , `moduleid` INT(11) NOT NULL , `menuid` INT(11) NOT NULL , `readaccess` ENUM('1','0') NOT NULL DEFAULT '0' COMMENT '0: no 1:yes' , `addaccess` ENUM('1','0') NOT NULL DEFAULT '0' COMMENT '0: no 1:yes' , `editaccess` ENUM('1','0') NOT NULL DEFAULT '0' COMMENT '0: no 1:yes' , `deleteaccess` ENUM('1','0') NOT NULL DEFAULT '0' COMMENT '0: no 1:yes' , `status` ENUM('0','1','2') NOT NULL DEFAULT '1' COMMENT ' 0:inactive 1:active 2:hide ' , `isdeleted` ENUM('0','1') NOT NULL DEFAULT '0' COMMENT ' 0:not deleted 1:deleted' , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/*bhumi 24-01-24*/
ALTER TABLE `user` CHANGE `roleid` `access` TEXT NULL DEFAULT NULL;

/*bhumi 29-01-24*/
UPDATE `menu_master` SET `pageurl` = 'beaute_research' WHERE `menu_master`.`id` = 6;