CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_prodconf` (
  `id_product` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  CONSTRAINT `fb_prodconf_constraint` UNIQUE (`id_product`, `id_shop`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;