<?php
abstract class MyBaseClass
{
    abstract protected function getItem();
    abstract protected function quantity($qty);

    public function listItem() {
      $result = '<p>' . $this->getItem() . '</p>';
        return $result;
    }
}

class MyChildClass extends MyBaseClass
{
    protected function getItem() {
        return "This is an Item";
    }

    public function quantity($qty) {
        return '<p>Your quantity is ' . $qty . '.</p>';
    }
}

$myObject = new MyChildClass;
echo $myObject->quantity(5);
echo $myObject->listItem();