CREATE TABLE IF NOT EXISTS `PREFIX_fabfacebookpixel_events` (
  `event_id` varchar(25) NOT NULL,
  `event_type` varchar(255) NULL,
  `fbp` varchar(255) NULL,
  `last_update` datetime NULL,
  `pixel` int(5) NULL,
  `conversion_api` int(5) NULL,
  CONSTRAINT `fb_events_constraint` UNIQUE (`event_id`)
) ENGINE=InnoDb DEFAULT CHARSET=utf8;