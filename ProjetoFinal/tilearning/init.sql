-- init.sql: banco para Laragon (MySQL)
CREATE DATABASE IF NOT EXISTS tilearning DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE tilearning;

-- users
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
role ENUM('admin','instructor','student') NOT NULL DEFAULT 'student',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- courses
CREATE TABLE courses (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
slug VARCHAR(255) NOT NULL UNIQUE,
description TEXT,
level ENUM('iniciante','intermediario','avancado') DEFAULT 'iniciante',
hours INT DEFAULT 0,
instructor_id INT DEFAULT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (instructor_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB;

-- enrollments
CREATE TABLE enrollments (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
course_id INT NOT NULL,
enrolled_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
UNIQUE KEY ux_enroll (user_id, course_id),
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- lessons (simplificado)
CREATE TABLE lessons (
id INT AUTO_INCREMENT PRIMARY KEY,
course_id INT NOT NULL,
title VARCHAR(255) NOT NULL,
content TEXT,
position INT DEFAULT 0,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- forum posts (simplificado)
CREATE TABLE forum_posts (
id INT AUTO_INCREMENT PRIMARY KEY,
course_id INT NOT NULL,
user_id INT NOT NULL,
message TEXT NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE,
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- dados iniciais: usuários
INSERT INTO users (fullname, email, password, role) VALUES
('Administrador TILearning', 'admin@tilearning.local', '" . password_hash('admin123', PASSWORD_DEFAULT) . "', 'admin'),
('Professor Exemplo', 'prof@tilearning.local', '" . password_hash('prof123', PASSWORD_DEFAULT) . "', 'instructor'),
('Aluno Exemplo', 'aluno@tilearning.local', '" . password_hash('aluno123', PASSWORD_DEFAULT) . "', 'student');

-- OBS: O PHP fará o hash se você preferir. Se o import falhar por causa das funções, existe alternativa abaixo.

-- Cursos de exemplo (inserir ids reais de instrutores depois de importar usuários)
INSERT INTO courses (title, slug, description, level, hours, instructor_id) VALUES
('Introdução a PHP', 'introducao-php', 'Curso básico de PHP para iniciantes.', 'iniciante', 8, 2),
('Fundamentos de Redes', 'fundamentos-redes', 'Conceitos de redes para infra.', 'iniciante', 6, 2);

-- Lessons exemplo
INSERT INTO lessons (course_id, title, content, position) VALUES
(1, 'Instalação e Ambiente', 'Conteúdo da aula 1', 1),
(1, 'Sintaxe Básica', 'Conteúdo da aula 2', 2);