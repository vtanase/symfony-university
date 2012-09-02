CREATE TABLE news (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, body TEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE teacher (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, degree VARCHAR(50) NOT NULL, interests VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE teacher_publication (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, authors VARCHAR(255), publicationyear BIGINT NOT NULL, teacher_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX teacher_id_idx (teacher_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE teacher_publication ADD CONSTRAINT teacher_publication_teacher_id_teacher_id FOREIGN KEY (teacher_id) REFERENCES teacher(id) ON DELETE CASCADE;
