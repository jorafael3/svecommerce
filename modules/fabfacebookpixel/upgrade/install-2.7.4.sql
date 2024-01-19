CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_fc_lang` (
  `id_facebook_category` int(11) NOT NULL,
  `iso_code` varchar(5) NULL,
  `facebook_category_description` varchar(500) NULL,
  CONSTRAINT `fc_constraint` UNIQUE (`id_facebook_category`, `iso_code`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_f` (
  `id_category` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `id_facebook_category` int(11) NOT NULL,
  CONSTRAINT `fb_f_constraint` UNIQUE (`id_category`, `id_shop`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;