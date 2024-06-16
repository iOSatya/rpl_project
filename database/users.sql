create table users (
	userId int unsigned not null AUTO_INCREMENT,
  username varchar(100) not null,
  userFullName varchar(100) not null,
  userPassword varchar(100) not null,
  userStatus varchar(10) not null,
  PRIMARY KEY(userId)
);