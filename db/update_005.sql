DROP TABLE IF EXISTS newspapers;
CREATE TABLE IF NOT EXISTS newspapers(
  id INTEGER(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
, title VARCHAR(255)
, status VARCHAR(255)
, added_by VARCHAR(255)
, contact VARCHAR(20)
, email VARCHAR(100)
, facebook VARCHAR(255)
, twitter VARCHAR(255)
);
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (1,'Ekantipur-English','Completed up to 12/05/2015','Tina Rajbhandari',9840098953,'tinarajbhandari1@gmail.com','https://www.facebook.com/tina.rajbhandari','https://twitter.com/tinarajbhandari');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (2,'The Guardian','Completed up to 10/05/2015','Tina Rajbhandari',9840098953,'tinarajbhandari1@gmail.com','https://www.facebook.com/tina.rajbhandari','https://twitter.com/tinarajbhandari');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (3,'Nagarik News','Completed up to 16/05/2015','Khem R Dhakal',NULL,'','','');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (4,'Kantipur-Nepali','Work in progress','Subarna Ssapkota',NULL,'','','');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (5,'Times of India','Work in progress: Completed up to 29/04/2015','Rubina Malla',9849836893,'','https://www.facebook.com/rubina.malla','');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (6,'International Business Times','Completed up to 13/05/2015','Rajani Shrestha',9818911031,'rajni2049@gmail.com','https://www.facebook.com/rajani049','');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (7,'NBC New Digital','Completed up to 13/05/2015','Rajani Shrestha',9818911031,'rajni2049@gmail.com','https://www.facebook.com/rajani050','');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (8,'Nepal News','','Alisha Shakya',NULL,'','','');
INSERT INTO newspapers(id,title,status,added_by,contact,email,facebook,twitter) VALUES (9,'Himal Khabar','Work in progress','Khem R Dhakal',NULL,'','','');
