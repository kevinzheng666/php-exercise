<?php
class user_message {
    public $message = 'Hello All, I am ';
    public function introduce($name) 
    {
        return $this->message.$name;
    }
    }
$mymessage = new user_message();
echo $mymessage->introduce('Scott');
?>