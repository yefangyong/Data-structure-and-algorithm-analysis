<?php
/**
 * Created by PhpStorm.
 * User: HFJY
 * Date: 2018-11-27
 * Time: 16:27
 */
require_once 'QueueOnLinkedList.php';

$queueOnLinkedList = new QueueOnLinkedList();
$queueOnLinkedList->enqueue(1);
$queueOnLinkedList->enqueue(2);
$queueOnLinkedList->enqueue(3);
$queueOnLinkedList->enqueue(4);
$queueOnLinkedList->printQueue();

$queueOnLinkedList->dequeue();
$queueOnLinkedList->dequeue();
$queueOnLinkedList->printQueue();

$queueOnLinkedList->dequeue();
$queueOnLinkedList->dequeue();
$queueOnLinkedList->printQueue();