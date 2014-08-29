CREATE TABLE `team`(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`country` varchar(64) NOT NULL
) Engine=InnoDB;

CREATE TABLE `player`(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(64) NOT NULL,
	`id_team` int(11) NOT NULL,
	CONSTRAINT team_id_fk
	FOREIGN KEY (id_team)
	REFERENCES team (id)
	ON DELETE CASCADE
) Engine=InnoDB;

CREATE TABLE `games`(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`team_one` int(11) NOT NULL,
	`team_two` int(11) NULL,
	`game_starts` datetime,
	`winner` int(11) NULL,
	`score` varchar(5) NULL,
	`round` tinyint unsigned NULL,

	CONSTRAINT team_team_one_fk
	FOREIGN KEY (team_one)
	REFERENCES team(id)
	ON DELETE CASCADE,

	CONSTRAINT team_team_two_fk
	FOREIGN KEY (team_two)
	REFERENCES team(id)
	ON DELETE CASCADE,

	CONSTRAINT team_winner_fk
	FOREIGN KEY (winner)
	REFERENCES team(id)
	ON DELETE CASCADE
) Engine=InnoDB;

CREATE TABLE `users`(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`username` varchar(32) NOT NULL,
	`password` varchar(64) NOT NULL
) Engine=InnoDB;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user', 'b32efab270d04a402829a8067565263b1995460f0337c2dea2cfe6a1719b764d');
-- username => user, password => pass