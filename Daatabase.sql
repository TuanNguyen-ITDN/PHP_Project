drop database if exists PHP_Project;
create database PHP_Project character set = utf8mb4;
use PHP_Project;

create table if not exists categories (
	id int(11) not null auto_increment,
	cat_name varchar(255) not null,
	note text,
	primary key(id)
);

create table if not exists status_product (
	id int(11) not null auto_increment,
	status_name varchar(50) not null,
    primary key(id)
);

create table if not exists products (
	id int(11) not null auto_increment,
	prod_name varchar(255) not null,
    code varchar(20) not null,
	img varchar(255) not null,
	category_id int(11),
	quantity int(11) not null,
	new_price varchar(11) not null,
    old_price varchar(11),
	status_id int  (4) ,
	imported_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	description varchar(500) not null,
	primary key(id),
	foreign key(category_id) references categories(id),
    foreign key(status_id) references status_product(id)
);

create table if not exists customer_order (
	id int(11) not null auto_increment,
    id_product int not null,
    cus_name varchar(255)  null,
    gender varchar(25)  null,
    phone varchar(50) not null,
    email varchar(255) not null,
	address varchar(255),
    date_order  DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_excute datetime,
    time_excute time, 
    money int,
	primary key (id, id_product),
    foreign key(id_product) references products(id)
);
/*
create table if not exists orders (
	id int(11) not null auto_increment,
	cus_id	int(11),
	date datetime not null,
	primary key (id),
	foreign key (cus_id) references customer (id)
);
*//*
create table if not exists prod_orders (
	prod_id int(11),
	order_id int(11),
	quantity int(11) not null,
	primary key(prod_id, order_id),
	foreign key(prod_id) references products(id),
	foreign key(order_id) references orders(id)
);*/

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    phone_number varchar (25) not null,
    Email varchar(55) not null, 
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
); 
insert into users(username,phone_number, Email, password)
values  ('nguyenhuutuan','0985 342 542','tuan.nguyen.106902@gmail.com','$2y$10$3kgFpnICglRYVzhEgwMi3uydxgfbk75X5XSsZD6WshplKrSN/I7jq'),
		('hovantao','0892 345 234','tao.ho@gmail.com','$2y$10$x9y860cRyzBXzwAQjBVmxuKxK7zQ/WHci55kz/eSIROkjxdFB.K5G'),
        ('tuannguyenhuu','0492 345 234','tuan.nguyenhuu@gmail.com','$2y$10$W.ADTXE.8kLcG27qn/TnKO..8y7fVMap2rzKNVY2CO2L86dt8BDR.');
		


CREATE TABLE feedback (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    phone_number varchar (255) not null,
    email varchar(255) not null,
    feedback varchar(5000) not null,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);



  

insert into categories (cat_name) values
('Makeup background'),
('Concealer'),
('Lotion'),
('Lip stick'),
('Services');


insert into status_product ( status_name) values
('Sản phẩm bán chạy'),
('Sản phẩm mới ra '),
('Sản phẩm giá rẻ'),
('Dịch vụ đang được ưa chuộng'),
('Dịch vụ có ưu đãi'),
('Dịch vụ giá rẻ');

/*
insert into orders (cus_id, date) values
(1,date('2017-01-02')),
(1,date('2017-12-12')),
(2,date('2017-01-02')),
(2,date('2018-01-03')),
(2,date('2018-03-01')),
(4,date('2018-03-03'));

  
*/






insert into products(prod_name,code,img,category_id,quantity,new_price,old_price,status_id,imported_date,description)
 
values
('Công nghệ căng da bằng chỉ Collagen Châu Âu','A409OG','dv1.jpg',5,20,'680000','800000',4,date('2018-01-02'),'Căng chỉ COLLAGEN CHÂU ÂU được các nhà khoa khuyên dùng'),
('Tiêm căng bóng da bằng DNA cá đàn hồi','AT62G09OG','dv2.jpg',5,30,'175000','250000',4,date('2018-11-02'),'Sở hữu một làn da đẹp như các minh tinh điện ảnh là mơ ước'),
('Lăn Kim Trị Sẹo Tăng Sinh Collagen , Trắng Da','GHA45HW','dv3.jpg',5,15,'238000','300000',4,date('2018-01-12'),'Do nhiều
 nguyên nhân như tuổi tác, môi trường ô nhiễm hay những sai lầm '),
('04 gói dịch vụ làm tóc cao cấp','TER45GGR','dv4.jpg',5,15,'238000','300000',4,date('2018-01-12'),'Uốn - Duỗi - Nhộm , sản phẩm lò real của pháp đồng giá 199k/gói '),
('CHĂM SÓC DA:IPL + LAZER trị mụn,trị thâm','CSDLZ05TT','dv5.jpg',5,23,'2000000','2500000',5,date('2019-01-15'),'IPL + LAZER trị mụn, cho da bạn luôn luôn tươi trẻ'),
('Công nghệ căng da bằng chỉ Collagen Châu Âu','CNCDBC07','dv1.jpg',5,30,'700000','850000',5,date('2018-05-12'),'Ứng dụng công nghệ từ châu Âu,sản phảm chất lượng chuẩn quốc tế'),
('Tăng nhan sắt và là giảm tàn nhan, lột muộn, dưỡng da cao cấp','HUEHWC44RE','dv2.jpg',5,23,'2050000','2500000',5,date('2019-01-12'),'Tiêm căng bóng da bằng bóng hồng mang lại làn da mịn màng và sáng đẹp'),
('Lăn Kim Trị Sẹo Tăng Sinh Collagen , Trắng Da','CSDLZ06T','dv3.jpg',5,41,'690000','4000000',5,date('2018-05-20'),'Bao gồm tất cả các công đoạn từ gội đầu đến sấy khô và làm đẹp da , cạo mi mắt và cạo mặt' ),
('CHĂM SÓC DA + THẢI ĐỘC CHÌ + ĐIỆN DI C','GHRN32EVR','dv6.jpg',5,12,'715000','850000',5,date('2018-05-12'),'Ứng dụng công nghệ từ châu Âu,sản phảm chất lượng chuẩn quốc tế giúp CHĂM SÓC DA + THẢI ĐỘC CHÌ + ĐIỆN DI C'),
('UỐN – DUỖI – NHUỘM  SẢN PHẨM LO`REAL CỦA PHÁP','CDF43SA','gt2.jpg',5,41,'3500000','4000000',5,date('2018-05-10'),'Bao gồm tất cả các công đoạn từ gội đầu đến sấy khô'),
('GÓI ƯU ĐÃI SPA 01 – Tảo Tuấn SPA','HU525FD','gt1.jpg',5,10,'558000','790000',6,date('2018-01-12'),'Gói 1: Massage bụng giảm cân + Quấn gel tan mỡ + Massage bấm huyệt đầu vai cổ + Chạy Collagen tươi + Đắp .'),
('Massage body Thụy Điển kết hợp Thái bằng đá nóng','GJG23HH','gt2.jpg',5,23,'350000','450000',6,date('2019-01-15'),'Những lúc mệt mỏi, căng thẳng vì phải ngồi làm việc nhiều giờ liên tục , khí huyết  không lưu thông hay vừa trải qua.'),
('Điều trị Nám – Tàn nhang bằng Laser công nghệ cao','GD34GE','gt3.jpg',5,30,'600000','950000',6,date('2019-01-12'),'Nám và tàn nhang là nỗi ám ảnh của hàng triệu phái đẹp Việt. Tuy không ảnh hưởng đến sức khỏe nhưng nám và tàn.ế'),
('Trị mụn trứng cá và các tàn nhang, làm trắng da và thu nhỏ lõ chân lông','T654DR','ht.jpg',5,23,'2050000','2500000',6,date('2019-01-1'),'Hệ thống Spa đạt chuẩn Hàn Quốc uy tín hàng đầu Việt Nam tự tim mang lại cho quý khách vẻ đẹp rạng ngời'),
('100% đội ngũ bác sĩ uy tín được cấp chứng chỉ hiệp hội thẩm mỹ Hàn Quốc','WG34 534GE','nhanvien.jpg',5,11,'690000','4000000',6,date('2018-02-20'),'100% đội ngũ bác sĩ uy tín được cấp chứng chỉ hiệp hội thẩm mỹ Hàn Quốc làm cho dịch vụ càng trở nên được yêu chuộng hơn bao giờ hết' ),
('Dịch vụ tắm nắng và làm trắng toàn thân công nghê cologen','GEW35ET','spdieutri3.jpg',5,14,'500000','650000',6,date('2018-05-12'),'Địa chỉ lột xác cho nhiều khách hàng uy tín và đảm bảo '),
('Chăm sóc sức khỏe theo lộ trình phù hợp','1136WEW','lotrinh.jpg',5,23,'3500000','4000000',6,date('2019-01-10'),'Chăm sóc sức khỏe theo lộ trình phù hợp và đảm bảo độ uy tín đáng tin cậy, mang lại cho khách hàng sự tuiww tin với nhan sắc của mình');
 

    
insert into customer_order (id_product,cus_name,gender, phone,email,  address, date_excute, time_excute, money ) values 
(1,'Đỗ Duy Thuận','Nam','0909 543 543', 'doduythuan@gmail.com', '1 Lê Lợi', '2019-01-25' , '10:00:00', 350000),
(2,'Đỗ Duy Thanh','Nam','0543 535 253','doduythanh@gmail.com', '2 Lê Lai', '2019-01-26' , '11:00:00', 400000 ),
(3,'Đỗ Duy Thọ','Nam','0953 545 453', 'doduytho@gmail.com', '3 Lê Văn Tám ', '2019-01-27' , '12:00:00', 600000);




/*
insert into prod_orders values
(1,1,2),
(7,1,1),
(2,2,1),
(8,2,1),
(10,2,1);*/


 