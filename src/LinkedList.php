<?php
/**
 * single-linked
 *
 * @author Dean Haines
 * @copyright Dean Haines, 2018, UK
 * @license GPL V3+ See LICENSE.md
 */

namespace vbpupil;


/**
 * Class LinkedList
 */
class LinkedList
{
    /**
     * @var
     */
    protected $node;

    /**
     * @var int
     */
    protected $count = 0;

    /**
     * LinkedList constructor.
     * @param $data
     * @throws \Exception
     */
    public function __construct($data)
    {
        $this->add($data);

        return $this;
    }

    /**
     * @param $data
     * @return $this
     * @throws \Exception
     */
    public function add($data)
    {
        if (is_null($this->node)) {
            if (is_null($data)) {
                throw new \Exception('Data is required to insert a new item.');
            }

            $this->node = new ListNode($data);
        } else {
            $newNode = new ListNode($data);

            $current = $this->node;

            while ($current->next !== NULL) {
                $current = $current->next;
            }

            $current->next = $newNode;
        }

        $this->count++;

        return $this;
    }

    /**
     * @param $data
     * @return $this
     * @throws \Exception
     */
    public function remove($data)
    {
        if (is_null($this->node->data)) {
            throw new \Exception('Empty list!');
        }

        $current = $this->node;
        $located = false;

        /*do while were not at the end of the list*/
        while (!is_null($current->next)) {
            /*okay we found what were looking for in the last loop, now lets start moving up one by one*/
            if($located == true){
                $current->data = $current->next->data;
            }

            /*we found what were after, lets replace it with the one after it*/
            if ($current->data == $data){
                $located = true;
                $current->data = $current->next->data;
            }

            /*lets do some house cleaning & remove the last item as its since been moved up 1*/
            if(is_null($current->next->next)){
                $current->next = null;
                $this->count--;
            }

            /*lets set the current to keep things moving nicely*/
            $current = $current->next;
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }


}