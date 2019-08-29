-- Database name / creation
CREATE DATABASE InformaionLookupSystem;

-- GID   = Game ID
-- CID   = Console ID 
-- NID   = Release Note ID
-- CPID  = Client Profile ID

-- Make tables
CREATE TABLE games (
	GID                INT(11)       NOT NULL AUTO_INCREMENT,
	title              VARCHAR(50)   NULL,
    userReview         INT(11)       NULL,
    description        VARCHAR(250)  NULL,
    stock              INT(11)       NULL,   
    price              INT(11)       NULL,
    device             INT(11)       NULL,
	PRIMARY KEY (GID),
    FOREIGN KEY (CID) REFEERENCES Console(CID)
);
 
CREATE TABLE Console (
  CID                INT(11)       NOT NULL AUTO_INCREMENT,
  GID                INT(11)       NOT NULL,
  title              INT(11)       NOT NULL,
  description        Varchar(250)  Null,
  followers          INT(11)       NULL,
  PRIMARY KEY (CID),
  FOREIGN KEY (GID)	
);



CREATE TABLE releaseNotes (

NID     INT(11) NOT NULL AUTO_INCREMENT,
posted  Date(dd,mm,yy) NOT Null     
PRIMARY KEY (NID)
FOREIGN KEY (GID)
REFERENCES TABLE console(CID)

);

CREATE TABLE clientProfile (
  CPID                INT(11)       NOT NULL AUTO_INCREMENT,
  userName			  VARCHAR(50)	NULL UNIQUE,
);
CREATE TABLE accessories (
	AID                 INT(11)       NOT NULL AUTO_INCREMENT,
    name                varchar(70)   NOT NULL,
	stock               INT(11)       NULL,
	                VARCHAR(200)  NOT NULL,
    
    
	PRIMARY KEY (LID),
	FOREIGN KEY (CDID) 	REFERENCES clientData(CDID)
);

INSERT INTO `games` (`GID`, `title`, `description`, `releaseNotes`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', '');

