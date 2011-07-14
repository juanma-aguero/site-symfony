CREATE TABLE post (id BIGINT AUTO_INCREMENT, category_id BIGINT NOT NULL, title VARCHAR(255), body TEXT, INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE post_category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE post ADD CONSTRAINT post_category_id_post_category_id FOREIGN KEY (category_id) REFERENCES post_category(id) ON DELETE CASCADE;
