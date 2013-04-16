CREATE TABLE `admin_log` (
    id int(10) PRIMARY KEY AUTO_INCREMENT,
    uid int(10),
    action varchar(255),
    data varchar(255)
);
