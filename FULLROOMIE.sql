
use FullRoomie;

create table House(
	HouseID varchar(20),
    PropertyAddress varchar(50),
    PropertyName varchar(20),
    PropertyCost Int,
    constraint HousePk primary key (HouseID),
    constraint HouseUID unique key (PropertyAddress)
    );

create table User(
	Username varchar(20),
    Password varchar(20),
    UserID varchar(10),
    constraint UserPK primary key (UserID),
    constraint UsernameUK Unique key (Username)
    );

create table Profile(
	UserID varchar(20),
    Name varchar(40),
    age Int,
    gender char(1),
    politics varchar(15),
    religion varchar(20),
    budget Int,
    bio text,
    interests text,
    HouseID varchar(20),
    likes text,
    constraint UserPK primary key (UserID),
    constraint UserFk1 foreign key (UserID) references User (UserID) on update cascade on delete cascade,
    constraint UserFK foreign key (HouseID) references House (HouseID) on update cascade
    );

create table UserMatchGroup(
	UserID varchar(20),
    MatchID varchar(20),
    constraint UserMatchGroupPK primary key (UserID, MatchID),
    constraint UserMatchGroupFK foreign key (UserID) references User (UserID) on update cascade on delete cascade
    );
    
create table ChatBox(
	UserID varchar(20),
    ChatBoxNumber int,
    message text,
    OrderNumber int,
    constraint ChatBoxPK primary key (UserID, ChatBoxNumber),
    constraint ChatBoxFK foreign key (UserID) references User (UserID) on update cascade on delete cascade
    );

