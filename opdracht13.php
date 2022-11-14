<?php
function check_vote() //function has been declared
{
    $name = "Rakesh";
    $age = 19;
    if ($age >= 18) {
        echo $name . ", you Are Eligible For Vote";
    } else {
        echo $name . ", you are not eligible for vote. ";
    }
}
check_vote(); //function has been called

?>