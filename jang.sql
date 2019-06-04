create table jang (
  jang_num INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   member_number  INT(100) not null,
   menu_num INT(100) not null,
  menu_count int(10) not null,
  status int(1) not null
 )charset=utf8;

insert into jang values (NULL,1, 1, 1, 0 );