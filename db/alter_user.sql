
ALTER TABLE `user` CHANGE `user_type` `user_type` ENUM( 'representative', 'admin', 'donor', 'editor', 'volunteer' ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'donor'