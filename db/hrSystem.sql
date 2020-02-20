CREATE DATABASE hr_system;

\c hr_system;

CREATE TABLE supervisor (
	id SERIAL NOT NULL PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
);

CREATE TABLE department (
	id SERIAL NOT NULL PRIMARY KEY,
	department_name VARCHAR(100) NOT NULL,
	supervisor_id INT NOT NULL REFERENCES supervisor(id),
	location VARCHAR(50) NOT NULL,
);

CREATE TABLE status (
	id SERIAL NOT NULL PRIMARY KEY,
	status VARCHAR(50) NOT NULL,
);

CREATE TABLE employee (
	id SERIAL NOT NULL PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
	birth_date DATE NOT NULL,
	position VARCHAR(50) NOT NULL,
	department_id INT NOT NULL REFERENCES department(id),
	hire_date DATE NOT NULL,
	salary DOUBLE NOT NULL,
	status_id INT NOT NULL REFERENCES status(id),
);









