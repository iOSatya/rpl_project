create table assignments (
  assignmentId int unsigned not null AUTO_INCREMENT,
  teacherId int unsigned,
  question text,
  answerA varchar(255),
  answerB varchar(255),
  answerC varchar(255),
  answerD varchar(255),
  correctAnswer varchar(1) not null,
  assignmentLevel int not null,
  PRIMARY KEY(assignmentId),
  FOREIGN KEY(teacherId) REFERENCES teachers(teacherId) ON DELETE CASCADE
);