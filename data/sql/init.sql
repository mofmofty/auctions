CREATE TABLE sample_table
(
  id              INT(10) AUTO_INCREMENT,
  name            VARCHAR(100) NOT NULL,
  created_at      DATETIME DEFAULT NULL,
  modified_at     DATETIME DEFAULT NULL,
  PRIMARY KEY (id)
);

INSERT INTO sample_table(name) VALUES ('name1');
INSERT INTO sample_table(name, created_at) VALUES ('name2', '2020-02-01 12:00:00');
INSERT INTO sample_table(name, created_at, modified_at) VALUES ('name3', '2020-03-01 12:00:00', '2020-03-01 18:00:00');
