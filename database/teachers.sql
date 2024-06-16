create table teachers (
	teacherId int(11) unsigned not null AUTO_INCREMENT,
  userId int(11) unsigned,
  PRIMARY KEY(teacherId),
  FOREIGN KEY(userId) REFERENCES users(userId) ON DELETE CASCADE
);