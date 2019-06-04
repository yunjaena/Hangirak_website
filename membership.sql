 create table membership (
  member_num INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id  varchar(10) not null,
  password varchar(250) not null,
  sex varchar(1) ,
  allergy varchar(100),
  name varchar(100) not null,
  post_num char(8),
  address varchar(80),
  tel varchar(20),
  age int(10)
  )charset=utf8;
  
INSERT INTO `membership` (`member_num`, `id`, `password`, `sex`, `allergy`, `name`, `post_num`, `address`, `tel`, `age`) VALUES (NULL, 'dlckdghks', '1234', 'M', '복숭아', '황영주', '100-011', '서울시 중구 충무로1가', '234-8879', '35');
