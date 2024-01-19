CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_attributes` (
  `id_attribute_group` int(5) NULL,
  `id_facebook_attribute_group` int(5) NULL,
  `id_product` int(11) NULL,
  `id_shop` int(11) NOT NULL,
  CONSTRAINT `fb_attr_constraint` UNIQUE (`id_attribute_group`, `id_shop`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8