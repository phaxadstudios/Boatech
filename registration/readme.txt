
Bro Isreal, create a database and name it registration.. Then, Copy and paste the codes below into the mysql query box..

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(14) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  `active_status` varchar(100) NOT NULL,
  `iplocation` varchar(100) NOT NULL,
  `ip_country` varchar(100) NOT NULL,
  `ipware` varchar(100) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
