<?php
class Person{
    private $name;
    private $lastName;
    private $friends;
    public function __construct(string $name,string $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->friends = [];

    }
    
    private function getName(): string{
        return $this->name;
    }

    private function getFullName(): string
    {
return $this->name . ' ' . $this->lastName;
    }

    public function sayHello(): string
    {
       
        $greeting =$this->whoIs() . sprintf('Hello my name %s .Nice to meet you',$this->getFullName());
        return $greeting;
    }
    public function whoIs():string{
        return "($this->name):";
    }
    public function sayHelloToPeople(Person $first,Person $second):string
    {
        if(in_array($first,$this->friends)){
$firstGreeting = 'Hi, '.$first->getName();
        }
        else{
            $firstGreeting = 'Nice to meet you, '.$first->getName();
        }
        if(in_array($second,$this->friends)){
            $secondGreeting = 'Hi, '.$second->getName();
                    }
                    else{
                        $secondGreeting = 'Nice to meet you, '.$second->getName();
                    }

        $greeting=
         sprintf('%sHello my name %s %s. %s. %s.',
         $this->whoIs(),
        $this->name,
        $this->lastName,
        $firstGreeting,
        $secondGreeting,
    );
    $this->friends[]= $first;  
    $this->friends[]= $second;   
 
     return $greeting;
    }
}
$angelina=new Person('Angelina','Jolie');
$spiderMan=new Person('Peter','Parker');
$brad=new Person('Brad','Pitt');

echo $angelina->sayHello();
echo "\n";
echo $spiderMan->sayHelloToPeople($angelina,$brad);
echo "\n";
echo $brad->sayHelloToPeople($angelina,$spiderMan);
echo "\n";
echo $brad->sayHelloToPeople($angelina,$spiderMan);
echo "\n";
?>
