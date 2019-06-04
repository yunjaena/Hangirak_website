create table menu (
  menu_num INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  menu_name varchar(100) not null,
  price int(10) not null,
 img varchar(500) not null,
 simple_explain varchar(300),
 detail_explain varchar(5000)

 )charset=utf8;

insert into menu values (NULL 	'설렁탕', 8000, 'https://cdn.pixabay.com/photo/2017/11/08/22/18/spaghetti-2931846_1280.jpg', '맛있는 설렁탕' ,'맛있는 설렁탕 먹읍시다');