ALTER TABLE `PREFIX_fabfacebookpixel` DROP INDEX `fb_constraint`;
ALTER TABLE `PREFIX_fabfacebookpixel` ADD CONSTRAINT `fb_constraint` UNIQUE (`id_category`, `id_shop`);