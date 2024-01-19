CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_purchase` (
  `id_order` int(11) NOT NULL,
  `sent` int(11) NOT NULL,
  CONSTRAINT `fb_constraint` UNIQUE (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;