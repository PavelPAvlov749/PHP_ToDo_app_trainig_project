<?php
    class Database {
        private string $hostname = "localhost";
        private string $login = "phpmyadmin";
        private string $db_password = "34rty7q43";
        private string $db_name = "todos";

        // MySQL SELECTORS
        private string $get_all = "SELECT * FROM tasks";
        private string $delete_item = "DELETE FROM `tasks` WHERE `task`.`id` = ";
        private $db_connection;
        // CONSTRUCTOR
        public function __construct() {
            $this->db_connection =  mysqli_connect($this->hostname,$this->login,$this->db_password,$this->db_name);
        }
        // GET ALL TASKS
        public function get_all_items () {
            $query = mysqli_query($this->db_connection,$this->get_all);
            return mysqli_fetch_all($query);
        }
        // GET TASK BY ID
        public function get_task_by_id (string $id) {
            $query = mysqli_query($this->db_connection,"SELECT * FROM `tasks` WHERE `tasks`.`id` = '$id'");
            $task =  mysqli_fetch_assoc($query);
            return $task;
        }
        // ADD NEW ITEM INTO THE DATABASE
        public function create_todo (string $text) {
            if(!$text) {
                die("Error : Fill all fields");
            } else {
               
                mysqli_query($this->db_connection,"INSERT INTO tasks (`id`, `task`) 
                VALUES (NULL,'$text')");
            }
        }
        // DELETE ITEM FROM DTABASE
        public function delete_todo (int $id) {
            
            mysqli_query($this->db_connection,"DELETE FROM `tasks` WHERE `tasks`.`id` = '$id'");
        }
        // UPDATE TODO 
        public function update_todo (int $id,string $text) {
            mysqli_query($this->db_connection,"UPDATE `tasks` 
            SET `task` = '$text'  
            WHERE `tasks`.`id` = '$id' ");
        }

        public function delete_all_todos () {
            mysqli_query($this->db_connection,"DELETE * FROM `tasks`");
        }
    }
    // CREATE INSTANCE OF DATABASE CLASS
    
    $database = new Database();


?>