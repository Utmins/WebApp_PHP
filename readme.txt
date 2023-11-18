Remember to replace placeholder values like your_mysql_server, your_mysql_username, your_mysql_password, your_database_name, and your_table_name with your actual MySQL server information and table name.

SQL TABLE

CREATE TABLE users (
  id VARCHAR(30) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) UNIQUE NOT NULL,
  first_name VARCHAR(30),
  last_name VARCHAR(30),
  age INT,
  address VARCHAR(30),
  city VARCHAR(30),
  state VARCHAR(30),
  country VARCHAR(30),
  zip_code INT,
  sin INT);

INSERT INTO users (username, first_name, last_name, age, address, city, state, country, zip_code, sin) VALUES
  ('admin', 'John', 'Smith', 40, '123 Main Street', 'Chicago', 'IL', 'USA', 60007, 411468775),
  ('user1', 'Rick', 'Stallone', 35, '777 Broadway Avenue', 'New York', 'NY', 'USA', 10001, 535702719),
  ('user2', 'Allan', 'Roberts', 30, '5579 Yong Road', 'Seattle', 'WA', 'USA', 98101, 197340685),
  ('user3', 'Mike', 'Burns', 45, '37 Melrose Place', 'Miami', 'FL', 'USA', 33101, 346978120);
