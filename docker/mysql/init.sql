CREATE DATABASE IF NOT EXISTS `integrated`;

CREATE USER 'integrated'@'%' IDENTIFIED BY 'integrated';

GRANT ALL PRIVILEGES ON integrated.* TO 'integrated'@'%';
