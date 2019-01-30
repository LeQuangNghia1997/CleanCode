<?php

class MyList
{
    public $mylist;

    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->mylist = $arr;
        else
            $this->mylist = array();
    }

    public function add($obj)
    {
        array_push($this->mylist, $obj);
    }

    public function clear()
    {
        $this->mylist = array();
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
    public function size(){
        return count($this->mylist);

    }
    public function get($index){
        if($this->isInteger($index)&&$index<$this->size()){
            return $this->mylist[$index];
        }
        else {
            die("ERROR in MyList.get");
        }
    }
    public function remove($index){
        if($this->isInteger($index)){
            $newMyList = array();
            for($i =0;$i<$this->size();$i++)
                if($index != $i) $newMyList[]= $this->get($i);
                $this->mylist= $newMyList;

        }
        else {
            die("ERROR in MyList.remove <br> Interger value required");
        }
    }
    public function sort(){
        sort($this->mylist);
    }
     public function toArray(){
        return $this->mylist;
     }

}