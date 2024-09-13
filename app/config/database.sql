
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    age INT NOT NULL
);

-- CREATE TABLE IF NOT EXISTS courses (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     CourseName VARCHAR(255) NOT NULL,
--     Unit INT(25) NOT NULL
-- );

-- CREATE TABLE IF NOT EXISTS levels (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(50) NOT NULL,
--     nick_name VARCHAR(20) NULL

-- );



-- Add more table creation queries as needed
