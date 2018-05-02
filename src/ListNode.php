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
 * Class ListNode
 * @package vbpupil
 */
class ListNode
{

    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $next;


    /**
     * ListNode constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}