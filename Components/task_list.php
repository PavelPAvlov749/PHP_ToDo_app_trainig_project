<?php
    class Todo_list {

        private array $task_list = [];
        public function __construct(array $tasks) {
            $this->task_list = $tasks;
        }

        public function getTasks () : array {
            return $this->task_list;
        }

        public function addTask ($task) {
            array_push($this->task_list,$task);
        }
        public function removeTask (int $id) {
            
        }
    }


?>