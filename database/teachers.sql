create table teachers (
	teacherId int unsigned not null AUTO_INCREMENT,
  userId int unsigned,
  PRIMARY KEY(teacherId),
  FOREIGN KEY(userId) REFERENCES users(userId) ON DELETE CASCADE
);