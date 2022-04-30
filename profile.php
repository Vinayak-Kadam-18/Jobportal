<?php
session_start();

if(isset($_SESSION['eid']))
	{
        header('Location:employee/profile.php');
      }
      else
      {
                header('Location:jobseeker/profile1.php');

      }
      ?>