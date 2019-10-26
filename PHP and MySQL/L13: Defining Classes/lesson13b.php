$someProperty = 'anotherProperty';
$anotherProperty = 'Hello';
echo $this->someProperty; // displays 'anotherProperty'
echo $this->$someProperty; // displays 'Hello'