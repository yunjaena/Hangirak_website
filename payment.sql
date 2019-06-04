create table payment (
  member_num INT(100) not null,
  menu_num INT(100) not null,
  price int(10) not null,
  menu_img varchar(100),
  menu_count int(10) not null,
  address varchar(80) not null
 )charset=utf8;


insert into payment values ('이창환', '닭가슴살 샐러드', 8000, './메뉴.jpg', 2 , '서울시 중구 충무로1가');