<?php
/**
 * Created by PhpStorm.
 * User: HFJY
 * Date: 2018-11-27
 * Time: 17:19
 */

class LoopQueue
{
    public $data = [];

    public $tail;

    public $head;

    private $MaxSize;

    /**
     * LoopQueue constructor.
     * @param int $size
     * 初始化循环队列大小，最后位置不放置数据，实际大小为size++
     */
    public function __construct($size = 10)
    {
        $this->MaxSize = ++$size;
    }

    /**
     * @param $data
     * @return int
     * @Author 叶方勇
     * @DateTime 2018-11-27
     * 入队 判断队满的条件为(this->tail + 1) % $this->MaxSize == $this->head
     */
    public function enqueue($data)
    {
        if (($this->tail + 1) % $this->MaxSize == $this->head) {
            return -1;
        }
        $this->data[$this->tail] = $data;
        $this->tail = (++$this->tail) % $this->MaxSize;
    }

    /**
     * @return int|mixed
     * @Author 叶方勇
     * @DateTime 2018-11-27
     * 出队
     */
    public function dequeue()
    {
        if ($this->tail == $this->head) {
            return -1;
        }
        $data = $this->data[$this->head];
        unset($this->data[$this->head]);
        $this->head = (++$this->head) % $this->MaxSize;
        return $data;
    }

    /**
     * @return int
     * @Author 叶方勇
     * @DateTime 2018-11-27
     * 获取长度
     */
    public function getLength()
    {
        return ($this->tail - $this->head + $this->MaxSize) % $this->MaxSize;
    }
}

$queue = new LoopQueue(4);
// var_dump($queue);
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->enQueue(4);
// $queue->enQueue(5);
var_dump($queue->getLength());
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
var_dump($queue);
