DELETE FROM `PREFIX_fabfacebookpixel_purchase`;
ALTER TABLE `PREFIX_fabfacebookpixel_purchase` ADD `id_cart` int(11) NOT NULL;
ALTER TABLE `PREFIX_fabfacebookpixel_purchase` MODIFY `id_customer` varchar(255) NULL;
ALTER TABLE `PREFIX_fabfacebookpixel_purchase` DROP INDEX `fb_constraint`;
ALTER TABLE `PREFIX_fabfacebookpixel_purchase` ADD CONSTRAINT `fb_constraint` UNIQUE (`id_cart`);