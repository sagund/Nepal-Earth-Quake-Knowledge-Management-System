ALTER TABLE `districts` ADD `zone_id` INT(11) NOT NULL AFTER `gps`, ADD INDEX (`zone_id`) ;

UPDATE `districts` SET `zone_id`=1 WHERE name IN ("Jhapa","Ilam","Panchthar","Taplejung");
UPDATE `districts` SET `zone_id`=2 WHERE name IN ("Morang","Sunsari","Bhojpur","Dhankuta","Terhathum","Sankhuwasabha");
UPDATE `districts` SET `zone_id`=3 WHERE name IN ("Saptari","Siraha","Udayapur","Khotang","Okhaldhunga","Solukhumbu");
UPDATE `districts` SET `zone_id`=4 WHERE name IN ("Dhanusa","Mahottari","Sarlahi","Sindhuli","Ramechhap","Dolakha");
UPDATE `districts` SET `zone_id`=5 WHERE name IN ("Bhaktapur","Dhading","Kathmandu","Kavrepalanchok","Sindhupalchok","Lalitpur","Nuwakot","Rasuwa");
UPDATE `districts` SET `zone_id`=6 WHERE name IN ("Bara","Parsa","Rautahat","Chitwan","Makwanpur");
UPDATE `districts` SET `zone_id`=7 WHERE name IN ("Gorkha","Kaski","Lamjung","Syangja","Tanahu","Manang");
UPDATE `districts` SET `zone_id`=8 WHERE name IN ("Kapilvastu","Nawalparasi","Rupandehi","Arghakhanchi","Gulmi","Palpa");
UPDATE `districts` SET `zone_id`=9 WHERE name IN ("Baglung","Myagdi","Parbat","Mustang");
UPDATE `districts` SET `zone_id`=10 WHERE name IN ("Dang","Pyuthan","Rolpa","Rukum","Salyan");
UPDATE `districts` SET `zone_id`=11 WHERE name IN ("Dolpa","Humla","Jumla","Kalikot","Mugu");
UPDATE `districts` SET `zone_id`=12 WHERE name IN ("Banke","Bardiya","Surkhet","Dailekh","Jajarkot");
UPDATE `districts` SET `zone_id`=13 WHERE name IN ("Kailali","Achham","Doti","Bajhang","Bajura");
UPDATE `districts` SET `zone_id`=14 WHERE name IN ("Kanchanpur","Dadeldhura","Baitadi","Darchula");

ALTER TABLE `districts` ADD FOREIGN KEY (`zone_id`) REFERENCES `db_relief911`.`zones`(`zone_id`) ON DELETE CASCADE ON UPDATE CASCADE;

