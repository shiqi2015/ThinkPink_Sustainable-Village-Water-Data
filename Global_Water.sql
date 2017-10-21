BEGIN TRANSACTION;
INSERT INTO "sqlite_master" VALUES('table','Location','Location',5,'CREATE TABLE "Location" ("Longitude&Latitude"  UNIQUE , "L_Name"  PRIMARY KEY  NOT NULL , "Province/State" )');
INSERT INTO "sqlite_master" VALUES('index','sqlite_autoindex_Location_1','Location',6,NULL);
INSERT INTO "sqlite_master" VALUES('index','sqlite_autoindex_Location_2','Location',7,NULL);
INSERT INTO "sqlite_master" VALUES('table','Well','Well',8,'CREATE TABLE "Well" ("Well#"  PRIMARY KEY  UNIQUE  NOT NULL, "Location"  REFERENCES "Location", "Depth", "Size")');
INSERT INTO "sqlite_master" VALUES('index','sqlite_autoindex_Well_1','Well',9,NULL);
INSERT INTO "sqlite_master" VALUES('table','SolarCell','SolarCell',2,'CREATE TABLE "SolarCell" ("Cell#"  PRIMARY KEY  UNIQUE  NOT NULL, "Location"  REFERENCES "Location", "Well"  REFERENCES "Well", "EnergyGeneration", "EnergyUsage", "WaterProduction", "#ofCells")');
INSERT INTO "sqlite_master" VALUES('index','sqlite_autoindex_SolarCell_1','SolarCell',3,NULL);
COMMIT;
