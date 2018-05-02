# single-linked-list
Simple single linked list mechanism.


In order to use this package simply:

```PHP
<?php

include 'vendor/autoload.php';

use vbpupil\SingleLinkedList;


$list = (new \vbpupil\LinkedList('1'))
        ->add('2')
        ->add('3')
        ->add('4')
        ->add('5')
        ->add('6')
        ->add('7')
        ->remove('2')
        ->add('8');

dump($list);
```