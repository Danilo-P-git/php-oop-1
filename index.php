<?php

class User {
  public $name;
  public $lastname;
  public $email;
  public $username;
  public $password;

  public function __construct($_username, $_email, $_password)
  {
    $this->username = $_username;
    $this->email = $_email;
    $this->password = $_password;
  }

}

$user1 = new User("d_patane", "danilopatane98@tiscali.it", "passwordDanilo");
$user2 = new User("francsar", "francescosardo@hotmail.com", "passwordFra");
$user3 = new User("giusepfra", "giuseppe.francesco@gmail.com", "passwordGiuseppe");

$users = [$user1, $user2, $user3];



 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-oop-1</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <div class="row">

       <div class="col-4">
         <h2>USERNAME</h2>
         <?php foreach ($users as $user ){?>
         <p><?php echo $user->username ?></p>
       <?php } ?>
       </div>
       <div class="col-4">
         <h2>EMAIL</h2>
         <?php foreach ($users as $user ){?>
         <p><?php echo $user->email ?></p>
       <?php } ?>
       </div>
       <div class="col-4">
         <h2>PASSWORD</h2>
         <?php foreach ($users as $user ){?>
         <p><?php echo $user->password ?></p>
       <?php } ?>
       </div>
   </div>

   </body>
 </html>
