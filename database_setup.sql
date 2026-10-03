CREATE DATABASE IF NOT EXISTS tasks_for_today;
USE tasks_for_today;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review project priorities', 'pending', CURDATE(), NOW()),
('Plan today\'s schedule', 'in-progress', CURDATE(), NOW()),
('Complete daily progress report', 'pending', CURDATE(), NOW()),
('Review yesterday\'s completed work', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Organize project notes', 'completed', DATE_SUB(CURDATE(), INTERVAL 2 DAY), NOW()),
('Prepare weekly summary', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Check upcoming deadlines', 'pending', DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW()),
('Plan next week\'s goals', 'pending', DATE_ADD(CURDATE(), INTERVAL 3 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('enzotorculas', 'Enzo Joshua Torculas', 'enzojoshuatorculas@gmail.com', NOW());
