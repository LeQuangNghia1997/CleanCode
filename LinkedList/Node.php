<?php
class Node {
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data=$data;
        $this->next= Null;
    }
    function  readNode(){
        return $this->data;
    }
}