CREATE TABLE `teacher` ( `name` VARCHAR(20) NOT NULL 
                        , `username` VARCHAR(17) NOT NULL UNIQUE 
                        , `email` VARCHAR(20) NOT NULL  UNIQUE
                        , `password` VARCHAR(18) NOT NULL 
                       ) ENGINE = InnoDB;