<?php

        // echo "prev balance = ".$POST['balance'];
        // echo "prev balance = ".$GET['balance'];

    // if(isset($_GET['balance']))
    // {
        $prev_balance = $_GET['balance'];
        // echo "prev balance = ".$POST['balance'];
        // echo "prev balance = ".$GET['balance'];
    // }
    // else
    //     $prev_balance = 100;

    
?>

<!DOCTYPE html>

<h2>Welcome to Lucky 7</h2>

<h3>Balance : <?php echo $prev_balance; ?></h3>
<h5>Place your bet (Rs 10) : </h5>
<p style="color:red">[Below 7] [7] [Above 7]</p>

<form type="POST" action="submitForm.php">
    <input type="text" hidden name="balance" value=<?php echo $prev_balance; ?>>
    <input name='val' id='val' type="radio" value=1>Below 7</input>
    <input name='val' id='val' type="radio" value=2>7</input>
    <input name='val' id='val' type="radio" value=3>Above 7</input>    
    </br>
    <button type="submit">Submit</button>
</form>


</html>