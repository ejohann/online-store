CREATE DATABASE online_store;

CREATE TABLE main_cat(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE sub_cat(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    sub_category_name VARCHAR(100) NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY(category_id) REFERENCES main_cat(id),
    UNIQUE KEY(sub_category_name, category_id)
);