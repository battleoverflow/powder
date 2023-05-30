<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

use Jinx\Jinx;

class jinx_20230527_initial_config
{
    /*
        This migration is the minimum required to run the Powder example website using the Jinx Framework
    */

    public function up()
    {
        $db = Jinx::$jinx->db;

        $create_users_table = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(255) NOT NULL,
            last_name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(255) NOT NULL,
            profile_img VARCHAR(255) NOT NULL,
            github_username VARCHAR(255) NOT NULL,
            password VARCHAR(512) NOT NULL,
            status TINYINT DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;";

        $db->pdo_handler->exec($create_users_table);
    }

    public function down()
    {
        $db = Jinx::$jinx->db;
        $drop_users_table = "DROP TABLE users";
        $db->pdo_handler->exec($drop_users_table);
    }
}

?>