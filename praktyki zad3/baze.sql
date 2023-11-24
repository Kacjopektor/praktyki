create table baze;
use baze;

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(25) unique,
  `password` varchar(25)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'test');