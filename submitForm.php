<?php

    $balance = $_GET['balance'];     // This would be reduced each time.  * TO DO * get value from form
    $bet = 10;          //by 10
    $winning =0;

    $val=$_GET['val'];  // option  :  1(less) , 2(Equal), 3(Greater)
    echo "Value =".$val;

    $dice1 = rand(1,7);
    echo "</br>Dice 1 = ".$dice1;

    $dice2 = rand(1,7);
    echo "</br>Dice 2 = ".$dice2;

    $total = $dice1+$dice2;
    echo "</br></br>Total = ".$total;



    if(($total<7 && $val==1) || ($total>7 && $val==3))
    {
        // echo "total is lees than 7";
        $winning = $bet*2;
        $balance = $balance-$bet;
        $balance = $balance + $winning;

        echo "</br></br>Congratulations! You win. Your balance is now = ".$balance;
    }
    
    else if($total==7)
    {
        $winning = 30;
        $balance = $balance-$bet;
        $balance = $balance + $winning;
        echo "</br></br>Congratulations! Lucky 7!!! You win. Your balance is now = ".$balance;
    }

    else            // Loss
    {
        $balance = $balance-$bet;
        echo "</br></br>You lost this round! Your balance is now = ".$balance;
    }

    echo "</br></br><form type='POST' action='index.php'><input type='text' hidden name='balance' value=".$balance."><button type='submit'>Continue</button></form><form type='POST' action='index.php'><input type='text' hidden name='balance' value='100''><button type='submit'>Reset</button></form>"
?>