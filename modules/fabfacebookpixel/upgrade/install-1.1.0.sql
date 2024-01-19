CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel` (
  `id_category` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `id_google_category` int(11) NOT NULL,
  CONSTRAINT `fb_constraint` UNIQUE (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_gc_lang` (
  `id_google_category` int(11) NOT NULL,
  `iso_code` varchar(5) NULL,
  `google_category_description` varchar(500) NULL, 
  CONSTRAINT `gc_constraint` UNIQUE (`id_google_category`, `iso_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
