use test_db;

create table if not exists TB_user (
	PK_user int not null auto_increment,
    email varchar(255) not null,
    nickname varchar(255),
    StateProvince varchar(255),
    CountryRegion varchar(255) not null,
    PostalCode varchar(255) not null,
    primary key(PK_user)
);