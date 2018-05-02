<?php

use Codeception\Test\Unit;

class BasicTest extends Unit
{
    /**
     * @var \vbpupil\LinkedList
     */
    protected $list;



    protected function _before()
    {
        $this->list = (new \vbpupil\LinkedList('1'))
            ->add('2')
            ->add('3')
            ->add('4')
            ->add('5');
    }

    protected function _after()
    {
    }

    // tests
    public function countIsFive()
    {
        $this->assertEquals(5, $this->list->getCount());
    }
}