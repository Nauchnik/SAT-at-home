CREATE TABLE `deadline_history` (
  `Datetime` INT(11) NOT NULL,
  `AVG_CPU_Time_per_WU` FLOAT NOT NULL,
  `Deadline_in_days` INT(11) NOT NULL,
  PRIMARY KEY (`Datetime`));
  
CREATE TABLE `deadline` (
  `Deadline` INT(11) NULL,
  `Deadlinebyraspred` INT(11) NULL,
  `Start_Day` INT(11) NOT NULL,
  `End_Day` INT(11) NOT NULL,
  `Count_units` INT(11) NULL,
  `Percentage_of_WU` FLOAT NULL,
  `Percent_for_up` FLOAT NULL,
  `Percent_for_down` FLOAT NULL,
  PRIMARY KEY (`End_Day`));


INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('0', '1');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('1', '2');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('2', '3');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('3', '4');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('4', '5');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('5', '6');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('6', '7');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('7', '8');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('8', '9');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('9', '10');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('10', '11');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('11', '12');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('12', '13');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('13', '14');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('14', '15');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('15', '16');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('16', '17');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('17', '18');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('18', '19');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('19', '20');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('20', '21');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('21', '22');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('22', '23');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('23', '24');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('24', '25');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('25', '26');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('26', '27');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('27', '28');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('28', '29');
INSERT INTO `deadline` (`Start_Day`, `End_Day`) VALUES ('29', '30');

update deadline set Deadline ='0';
update deadline set Deadlinebyraspred ='0';
update deadline set Count_units ='0';
update deadline set Percentage_of_WU ='0';
update deadline a set a.Percent_for_up = (End_Day+1)/End_Day;
update deadline a set a.Percent_for_down = End_Day/(End_Day+1);

ALTER TABLE `deadline` 
CHANGE COLUMN `Deadline` `Deadline` INT(11) NOT NULL ,
CHANGE COLUMN `Deadlinebyraspred` `Deadlinebyraspred` INT(11) NOT NULL ,
CHANGE COLUMN `Count_units` `Count_units` INT(11) NOT NULL ,
CHANGE COLUMN `Percentage_of_WU` `Percentage_of_WU` FLOAT NOT NULL ,
CHANGE COLUMN `Percent_for_up` `Percent_for_up` FLOAT NOT NULL ,
CHANGE COLUMN `Percent_for_down` `Percent_for_down` FLOAT NOT NULL ;