CREATE TABLE following
(
  from_user INT NOT NULL,
  to_user   INT NOT NULL
);

CREATE TABLE tweets
(
  id         VARCHAR(60) NOT NULL,
  text       VARCHAR(60) NULL    ,
  created_at VARCHAR(60) NULL    ,
  username   INT         NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE users
(
  full_name  VARCHAR(60) NULL    ,
  username   INT         NOT NULL auto_increment,
  text       VARCHAR(60) NULL    ,
  created_at VARCHAR(60) NULL    ,
  PRIMARY KEY (username)
);

ALTER TABLE tweets
  ADD CONSTRAINT FK_users_TO_tweets
    FOREIGN KEY (username)
    REFERENCES users (username);

ALTER TABLE following
  ADD CONSTRAINT FK_users_TO_following
    FOREIGN KEY (from_user)
    REFERENCES users (username);

ALTER TABLE following
  ADD CONSTRAINT FK_users_TO_following1
    FOREIGN KEY (to_user)
    REFERENCES users (username);