
create DATABASE inner_balance;

CREATE TABLE `users` (
  `SN` int PRIMARY KEY AUTO_INCREMENT,
  `First_Name` varchar(50),
  `Last_Name` varchar(50),
  `Phone` varchar(15) UNIQUE,
  `Email` varchar(100) UNIQUE,
  `Avatar` varchar(255) DEFAULT NULL,
  `User_Role` varchar(100) DEFAULT 'user',
  `Pass` varchar(255) DEFAULT NULL,
  `Reg_Date` datetime DEFAULT now()
);
