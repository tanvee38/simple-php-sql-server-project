
--
-- Database: `db_contact`
--

create database student_db

use student_db

CREATE SCHEMA student_db_user;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

create table registration (
id int, 
name varchar(100),
email varchar(100),
phoneNumber varchar(100)
);


--
-- insert data for table `registration`
--
insert into registration values (1, 'moin', 'moin@mahmud.com', '123456789');
