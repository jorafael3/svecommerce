CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel` (
  `id_category` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `id_google_category` int(11) NULL,
  `id_facebook_category` int(11) NULL,
  CONSTRAINT `fb_constraint` UNIQUE (`id_category`, `id_shop`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_gc_lang` (
  `id_google_category` int(11) NOT NULL,
  `iso_code` varchar(5) NULL,
  `google_category_description` varchar(500) NULL,
  `id_lang` int(11) NOT NULL,
  CONSTRAINT `gc_constraint` UNIQUE (`id_google_category`, `iso_code`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_purchase` (
  `id_cart` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `sent` int(11) NOT NULL,
  `id_customer` varchar(255) NULL,
  `event_id` varchar(255) NULL,
  CONSTRAINT `fb_constraint` UNIQUE (`id_cart`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_fc_lang` (
  `id_facebook_category` int(11) NOT NULL,
  `iso_code` varchar(5) NULL,
  `id_lang` int(11) NOT NULL,
  `facebook_category_description` varchar(500) NULL,
  CONSTRAINT `fc_constraint` UNIQUE (`id_facebook_category`, `iso_code`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_f` (
  `id_category` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `id_facebook_category` int(11) NOT NULL,
  CONSTRAINT `fb_f_constraint` UNIQUE (`id_category`, `id_shop`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_prodconf` (
  `id_product` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  CONSTRAINT `fb_prodconf_constraint` UNIQUE (`id_product`, `id_shop`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_events` (
  `event_id` varchar(255) NOT NULL,
  `event_type` varchar(255) NULL,
  `fbp` varchar(255) NULL,
  `last_update` datetime NULL,
  `pixel` int(5) NULL,
  `conversion_api` int(5) NULL,
  CONSTRAINT `fb_events_constraint` UNIQUE (`event_id`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_attributes` (
  `id_attribute_group` int(5) NULL,
  `id_facebook_attribute_group` int(5) NULL,
  `id_product` int(11) NULL,
  `id_shop` int(11) NOT NULL,
  CONSTRAINT `fb_attr_constraint` UNIQUE (`id_attribute_group`, `id_shop`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8