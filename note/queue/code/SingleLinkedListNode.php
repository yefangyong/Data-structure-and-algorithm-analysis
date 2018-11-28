<?php
/**
 * Created by PhpStorm.
 * User: HFJY
 * Date: 2018-11-27
 * Time: 16:00
 */

class SingleLinkedListNode
{
    /**
     * @var SingleLinkedListNode
     * 节点中，指向下一个指针的节点
     */
    public $next;

    /**
     * @var null
     * 节点中，指针中的数据域
     */
    public $data;

    public function __construct($data = null)
    {
        $this->next = null;
        $this->data = $data;
    }
}