CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

INSERT INTO products (name, price) VALUES ('Laptop', 999.99), ('Smartphone', 599.99);


create the product table in mysql