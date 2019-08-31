-- Database name / creation
CREATE DATABASE InformaionLookupSystem;
 
-- GID   = Game ID
-- CID   = Console ID 
-- NID   = Release Note ID
-- CPID  = Client Profile ID

-- Make tables
CREATE TABLE games (
	GID                INT(11)       NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title              VARCHAR(50)   NULL,
    userReview         VARCHAR(11)       NULL,
    description        VARCHAR(250)  NULL,
    stock              INT(11)       NULL,   
    price              INT(11)       NULL,
    device             VARCHAR(11)       NULL
);
 
CREATE TABLE Console (
  CID                INT(11)       NOT NULL PRIMARY KEY AUTO_INCREMENT,
  GID                INT(11)       NOT NULL,
  title              VARCHAR(250)  NOT NULL,
  description        VARCHAR(250)  Null,
  FOREIGN KEY (GID) REFERENCES games(GID)	
);

INSERT INTO `games` (`GID`, `title`, `description`, `stock`, `price`, `device`) VALUES
(1,'Minecraft', 'Minecraft is a Lego style adventure game which has massively increased in popularity since it was released two years ago. It now has more than 33 million users worldwide. The video game puts players in a randomly-generated world where they can create their own structures and contraptions out of textured cubes', '#30', '$40', 'PC'),
(2, 'Oculus', 'Minecraft is a Lego style adventure game which has massively increased in popularity since it was released two years ago. It now has more than 33 million users worldwide. The video game puts players in a randomly-generated world where they can create their own structures and contraptions out of textured cubes', '#30', '$40', 'PC'),
(3, 'Minecraft', 'Minecraft is a Lego style adventure game which has massively increased in popularity since it was released two years ago. It now has more than 33 million users worldwide. The video game puts players in a randomly-generated world where they can create their own structures and contraptions out of textured cubes', '#30', '$40', 'PC'),
(4, 'SteamVR', 'Minecraft is a Lego style adventure game which has massively increased in popularity since it was released two years ago. It now has more than 33 million users worldwide. The video game puts players in a randomly-generated world where they can create their own structures and contraptions out of textured cubes', '#30', '$40', 'PC'),
  (5, 'Arma', 'Minecraft is a Lego style adventure game which has massively increased in popularity since it was released two years ago. It now has more than 33 million users worldwide. The video game puts players in a randomly-generated world where they can create their own structures and contraptions out of textured cubes', '#30', '$40', 'PC'),
(6, 'Nvidia', 'Minecraft is a Lego style adventure game which has massively increased in popularity since it was released two years ago. It now has more than 33 million users worldwide. The video game puts players in a randomly-generated world where they can create their own structures and contraptions out of textured cubes', '#30', '$40', 'PC');

INSERT INTO `Console` (`CID`, `GID`, `title`, `description`) VALUES
(1, 1, 'PC', 'Personal computer'),
(2, 2, 'xbox', 'Best Console'),
(3, 3, 'Ps4', 'Best Console');
