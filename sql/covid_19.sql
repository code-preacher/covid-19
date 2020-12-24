
CREATE TABLE `admin_login` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Peter', 'a@a.com', '123456');


CREATE TABLE `center` (
  `id` int(30) NOT NULL,
  `state_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `date_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `diagnosis` (
  `id` int(30) NOT NULL,
  `fv` int(1) NOT NULL,
  `cg` int(1) NOT NULL,
  `fq` int(1) NOT NULL,
  `ht` int(1) NOT NULL,
  `sb` int(1) NOT NULL,
  `ba` int(1) NOT NULL,
  `ha` int(1) NOT NULL,
  `ls` int(1) NOT NULL,
  `st` int(1) NOT NULL,
  `rn` int(1) NOT NULL,
  `vm` int(1) NOT NULL,
  `dr` int(1) NOT NULL,
  `result` text NOT NULL,
  `advice` text NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `report` (
  `id` int(30) NOT NULL,
  `uid` int(30) NOT NULL,
  `fv` int(1) NOT NULL,
  `cg` int(1) NOT NULL,
  `fq` int(1) NOT NULL,
  `ht` int(1) NOT NULL,
  `sb` int(1) NOT NULL,
  `ba` int(1) NOT NULL,
  `ha` int(1) NOT NULL,
  `ls` int(1) NOT NULL,
  `st` int(1) NOT NULL,
  `rn` int(1) NOT NULL,
  `vm` int(1) NOT NULL,
  `dr` int(1) NOT NULL,
  `result` text NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa Ibom '),
(4, 'Anambra '),
(5, 'Bauchi'),
(6, 'Bayelsa '),
(7, 'Benue '),
(8, 'Borno '),
(9, 'Cross River '),
(10, 'Delta '),
(11, 'Ebonyi '),
(12, 'Edo '),
(13, 'Ekiti '),
(14, 'Enugu '),
(15, 'FCT'),
(16, 'Gombe '),
(17, 'Imo '),
(18, 'Jigawa '),
(19, 'Kaduna '),
(20, 'Kano '),
(21, 'Katsina '),
(22, 'Kebbi '),
(23, 'Kogi '),
(24, 'Kwara '),
(25, 'Lagos '),
(26, 'Nasarawa '),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau '),
(33, 'Rivers '),
(34, 'Sokoto '),
(35, 'Taraba '),
(36, 'Yobe '),
(37, 'Zamfara ');

CREATE TABLE `suggestion` (
  `id` int(30) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user_login` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `center`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `center`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `diagnosis`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `report`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `suggestion`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user_login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

