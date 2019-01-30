<?php
include "MyList.php";
$listInteger = new MyList();
$listInteger ->add(1);
$listInteger->add('Hello');
$listInteger->add('Ahihi');
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);
echo implode('-',$listInteger->mylist);