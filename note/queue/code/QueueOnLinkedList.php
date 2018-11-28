<?php
/**
 * Created by PhpStorm.
 * User: HFJY
 * Date: 2018-11-27
 * Time: 16:06
 */
require_once  'SingleLinkedListNode.php';
class QueueOnLinkedList
{
    /**
     * @var SingleLinkedListNode
     * 队列的头结点
     */
    public $head;

    /**
     * @var
     * 队列的尾部节点
     */
    public $tail;

    /**
     * @var
     * 队列的长度
     */
    private $length;

    public function __construct()
    {
        $this->head = new SingleLinkedListNode();
        $this->tail = $this->head;
        $this->length = 0;
    }

    /**
     * @param $data
     * @Author yefy
     * @DateTime 2018-11-27
     * 入队操作
     */
    public function enqueue($data)
    {
        $newNode = new SingleLinkedListNode();
        $newNode->data = $data;
        $this->tail->next = $newNode;
        $this->tail = $newNode;
        $this->length++;
    }

    /**
     * @return bool|null|SingleLinkedListNode
     * @Author yefy
     * @DateTime 2018-11-27
     * 出队操作
     */
    public function dequeue()
    {
        if ($this->length == 0) {
            return false;
        }
        $node = $this->head->next;
        $this->head->next = $this->head->next->next;
        $this->length--;
        return $node;
    }

    /**
     * @return int
     * @Author yefy
     * @DateTime 2018-11-27
     * 返回队列的长度
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @Author yefy
     * @DateTime 2018-11-27
     * 打印队列
     */
    public function printQueue()
    {
        if ($this->length == 0) {
            echo "empty queue" . PHP_EOL;
            die;
        }
        $curNode = $this->head;
        echo "head.next ->";
        while ($curNode->next) {
            echo $curNode->next->data . "->";
            $curNode = $curNode->next;
        }
        echo "NULL" . PHP_EOL;
    }
}