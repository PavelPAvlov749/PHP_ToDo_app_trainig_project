<?php
    class Todo {
        public string $title;
        public string $text;
        public string $id;
        public string $status;
        public function __construct(string $title,string $text,int $id,string $status) {
            $this->id = $id;
            $this->text = $text;
            $this->title = $title;
            $this->status = $status;
        }
        public function toggleStatus() {
            $this->status = !$this->status;
        }
    }

?>