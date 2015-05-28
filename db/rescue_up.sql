DROP TABLE IF EXISTS rescue;
CREATE TABLE IF NOT EXISTS rescue(
  id INTEGER(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
, victim_injury VARCHAR(25)
, trap VARCHAR(25)
, victim_condition VARCHAR(100)
, hazards VARCHAR(100)
, situation_descp VARCHAR(255)
, victim_name VARCHAR(255)
, phone VARCHAR(25)
, loc_method VARCHAR(25)
, address VARCHAR(255)
, tole VARCHAR(255)
, street VARCHAR(255)
, city_vdc VARCHAR(255)
, region VARCHAR(255)
, zip VARCHAR(255)
, country VARCHAR(255)
, lat VARCHAR(255)
, lon VARCHAR(255)
, user_alt VARCHAR(255)
, pos_acc VARCHAR(255)
, alt_acc VARCHAR(255)

);