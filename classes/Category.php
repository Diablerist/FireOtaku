<?php

class Category {
    private $id;
    private $type;
    private $title;
    private $totalMediaCount;
    private $image;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setType($t) {
        $this->type = $t;
    }
    public function getType() {
        return $this->type;
    }

    public function setTitle($t) {
        $this->title = $t;
    }
    public function getTitle() {
        return $this->title;
    }

    public function setTotalMediaCount($t) {
        $this->totalMediaCount = $t;
    }
    public function getTotalMediaCount() {
        return $this->totalMediaCount;
    }

    public function setImage($i) {
        $this->image = $i;
    }
    public function getImage() {
        return $this->image;
    }
}