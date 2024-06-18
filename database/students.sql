create table students (
	studentId int unsigned not null AUTO_INCREMENT,
  userId int unsigned,
  mapLevel int not null default 1,
  highScore int default 0,
  PRIMARY KEY(studentId),
  FOREIGN KEY(userId) REFERENCES users(userId) ON DELETE CASCADE
);