create table stadium(
	stadium_id varchar(20) primary key,
	name varchar(20),
	location varchar(20)
);
create table league(
	league_id varchar(20) primary key,
	country varchar(20),
	name varchar(20),
	start_date varchar(20),
	end_date varchar(20),
	no_of_teams int
);

create table club(
	club_id varchar(10) primary key,
	name varchar(20),
	owner varchar(20),
	location varchar(20),
	estd_date varchar(20),
	league_id varchar(20),
	stadium_id varchar(20),
	FOREIGN KEY(league_id) REFERENCES league(league_id),
	FOREIGN KEY(stadium_id) REFERENCES stadium(stadium_id)
);
create table manager(
	manager_id varchar(10) primary key,
	name varchar(20),
	salary int,
	club_id varchar(10),
	FOREIGN KEY(club_id) REFERENCES club(club_id)
);
create table match1(
	match_id varchar(20) primary key,
	start_time varchar(20),
	end_time varchar(20),
	match_date varchar(20),
	stadium_id varchar(20),
	league_id varchar(20),
	FOREIGN KEY(stadium_id) REFERENCES stadium(stadium_id),
	FOREIGN KEY(league_id) REFERENCES league(league_id)
);
create table player(
	player_id varchar(20) primary key,
	name varchar(20),
	nationality varchar(20),
	age int,
	salary int,
	position varchar(20),
	club_id varchar(20),
	manager_id varchar(20),
	match_id varchar(20),
	league_id varchar(20),
	FOREIGN KEY(club_id) REFERENCES club(club_id),
	FOREIGN KEY(league_id) REFERENCES league(league_id),
	FOREIGN KEY(manager_id) REFERENCES manager(manager_id),
	FOREIGN KEY(match_id) REFERENCES match1(match_id)
);
create table club_stats(	
	no_of_games int,
	win int,
	draw int,
	lose int,
	goal_scored int,
	goal_conceded int,
	club_id varchar(20),
	FOREIGN KEY(club_id) REFERENCES club(club_id)
);
insert into stadium values('s1','Santiago','Madrid');
insert into stadium values('s2','Emirates','London');
insert into stadium values('s3','Anfield','Liverpool');
insert into stadium values('s4','Etihad','Manchester');
insert into stadium values('s5','AllianzA','Munich');
insert into stadium values('s6','Princes','Paris');
insert into stadium values('s7','AllianzS','Turin');

insert into league values('l1','Spain','Laliga','06-Aug','04-May',20);
insert into league values('l2','England','PL','06-Aug','06-May',20);
insert into league values('l3','Germany','Bundesliga','08-Aug','06-May',18);
insert into league values('l4','France','league1','02-Aug','16-May',18);
insert into league values('l5','Italy','SeriaA','16-Aug','20-May',20);



insert into club values('c1','RealMadrid','James','Madrid','1874','l1','s1');
insert into club values('c2','Arsenal','Henry','London','1873','l2','s2');
insert into club values('c3','Liverpool','Joe','Liverpool','1864','l2','s3');
insert into club values('c4','ManCity','Sheikh','Manchester','1894','l2','s4');
insert into club values('c5','Bayern','John','Munich','1888','l3','s5');
insert into club values('c6','PSG','Rock','Paris','1884','l4','s6');
insert into club values('c7','Juventus','Mark','Rome','1875','l5','s7');

insert into manager values('mg1','Zidane',3000,'c1');
insert into manager values('mg2','Emery',4000,'c2');
insert into manager values('mg3','Klopp',3000,'c3');
insert into manager values('mg4','Pep',5000,'c4');
insert into manager values('mg5','Kovac',6000,'c5');
insert into manager values('mg6','Thomas',5000,'c6');
insert into manager values('mg7','Sam',4000,'c7');

insert into match1 values('m1','9am','10am','16Aug','s1','l1');
insert into match1 values('m2','10:00am','11:45am','20-May','s2','l2');
insert into match1 values('m3','10:30am','12:15am','02-Dec','s3','l2');
insert into match1 values('m4','3:00pm','4:45pm','01-Jan','s7','l5');
insert into match1 values('m5','7:00pm','8:45pm','02-Feb','s4','l2');
insert into match1 values('m6','5:00pm','7:00pm','06-Dec','s5','l3');
insert into match1 values('m7','7:00am','9:00am','08-May','s6','l4');
insert into match1 values('m8','11:00am','1:00pm','03-May','s3','l3');

insert into player values('p1','Modric','Czech',32,3000,'MidFielder','c1','mg1','m1','l1');
insert into player values('p2','Kevin','Belgium',28,5000,'MidFileder','c4','mg4','m5','l2');
insert into player values('p3','Salah','Egypt',27,4000,'Winger','c3','mg3','m8','l2');
insert into player values('p4','Ronaldo','Portugal',33,4000,'Striker','c7','mg7','m4','l4');
insert into player values('p5','Sancho','England',20,5000,'Winger','c5','mg5','m6','l3');
insert into player values('p6','Silva','Brazil',32,5500,'Defender','c6','mg6','m7','l4');
insert into player values('p7','Leno','England',23,3000,'Goalkeeper','c2','mg2','m2','l2');
insert into player values('p8','Laporte','France',27,3500,'Defender','c4','mg4','m5','l2');

insert into club_stats values(38,18,10,10,109,20,'c2');
insert into club_stats values(40,20,15,5,110,28,'c1');
insert into club_stats values(36,16,5,15,88,32,'c5');
insert into club_stats values(34,24,7,3,95,35,'c6');
insert into club_stats values(38,18,13,7,76,18,'c4');
insert into club_stats values(38,18,12,8,79,16,'c3');
insert into club_stats values(36,26,2,8,98,15,'c7')


