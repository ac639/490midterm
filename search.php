<?php
	include('490_authsys/testRabbitMQClient2.php');

        session_start();

        $usrName = $_SESSION['username'];
	$srch = $_POST['srch'];

     	if (!isset($_SESSION['username'])) {
             //echo "You are not logged in";
     	} else {
	      $response = searchMatch($usrch);
	      if ($response == true) {
	           //echo "Bet Placed";
		   
	      } else {
	         // echo "Incorrect match ID/Team or bet already placed";
                  //header("refresh:2; url=../matches.php?placebet=error");
	      }
	}

?>
