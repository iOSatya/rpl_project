create table students (
	studentId int(11) unsigned not null AUTO_INCREMENT,
  userId int(11) unsigned,
  PRIMARY KEY(studentId),
  FOREIGN KEY(userId) REFERENCES users(userId) ON DELETE CASCADE
);