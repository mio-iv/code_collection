drop table if exists discussion;
create table discussion (
 id int auto_increment primary key,
 name varchar(20),
 message text,
 passwd char(4),
 modified timestamp,
 thread int default null
);

drop table if exists agenda;
create table agenda (
 thread int auto_increment primary key,
 title varchar(50),
 created datetime
);