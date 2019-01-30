<?php
include_once ('LinkList.php');
$linkedList = new LinkList();
$linkedList ->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(33);
$linkedList->insertFirst(44);
$linkedList->insertFirst(55);
$linkedList->insertFirst(66);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes;
echo implode('-', $linkData);
