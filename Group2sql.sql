create table Customer(
Email  varchar(50) primary key,
firstname varchar(30),
lastname varchar(40),
Phone int(10));

create table Vendor(
Vendor_id int primary key auto_increment,
Name varchar(40),
address varchar(60),
city varchar(30),
state char(2),
Service varChar(30),
Cost REAL);

create table Event (
Event_id int primary key auto_increment,
Event_Type varchar(30),
Markup REAL,
Email varchar(50),
Event_date varChar(11),
foreign key(Email) references Customer(Email));


create table Reviews(
Review_id int primary key auto_increment,
Event_Type varchar(30),
Email varchar(50),
Rating int(1),
Comments varchar(150),
FOREIGN KEY(Email) REFERENCES Customer(Email));

create table Event_Vendors(
Event_ID int,
Vendor_ID int,
Primary key(Event_ID, Vendor_ID),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID),
FOREIGN KEY(Vendor_ID) REFERENCES Vendor(Vendor_ID));

Create table Vendor_Tags(
Vendor_ID int,
Tags varchar(20),
Primary key(Tags, Vendor_ID),
FOREIGN KEY(Vendor_ID) REFERENCES Vendor(Vendor_ID));

create table Survey_Table(
Survey_id int primary key auto_increment,
Email  varchar(50),
firstname varchar(30),
lastname varchar(40),
Phone int(10),
Event_Type varchar(30),
Budget REAL,
Event_date varChar(11),
Size int,
Comments varchar(250));


create table Login(
Username varchar(20) Primary key,
Password varchar(20));

INSERT INTO `login`(`Username`, `Password`) VALUES ("User","1234");

INSERT INTO `customer`(`Email`, `firstname`, `lastname`, `Phone`) VALUES ("Amgonz@fdu.edu","Anthony","Gonzalez","9732944730");

INSERT INTO `vendor`(`Vendor_id`, `Name`, `address`, `city`, `state`, `Service`, `Cost`) VALUES (1,"DJ Dave", "1 road street","Dover","NJ","DJ",1000.00);
