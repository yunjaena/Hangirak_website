  create table membership (
  id  varchar(10) not null,
  password varchar(255) not null,
  sex varchar(1) ,
  allergy varchar(100),
  name varchar(10) not null,
  post_num char(8),
  address varchar(80),
  tel varchar(20),
  age int,
  primary key(id)
  );
  
insert into membership values ('yjhwang','1234','M','복숭아', '황영주', '100-011', '서울시 중구 충무로1가', '234-8879', 35);
