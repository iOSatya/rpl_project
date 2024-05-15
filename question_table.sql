create table questions (
	question_id int(11) unsigned not null AUTO_INCREMENT,
    player_id int(11) unsigned not null,
    question_level int() not null,
    question text,
);