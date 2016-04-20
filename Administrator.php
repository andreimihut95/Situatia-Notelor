<?php
session_start();
if(isset($_SESSION['username']))
   if($_SESSION['username'] == "admin")
{
   echo '
      <!doctype html>
      <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="css/styles_adm.css">
         <script src="js/jquery-admin.js" type="text/javascript"></script>
         <script src="js/jquery-admin2.js"></script>
         <title>Administrator</title>
      </head>
      <body>
      <div id="cssmenu">
      
      <ul>
         <li class="active has-sub"><a href="#"><span>Adauga</span></a>
            <ul>
               <li><a href="Adauga_Student"><span>Adauga Student</span></a>
               </li>
               <li><a href="Adauga_Materie">Adauga Materie</a>
               </li>
               <li><a href="Adauga_Nota" class="myButton">Adauga Note</a>
               </li>
            </ul>
         </li>
      
         <li class="active has-sub"><a href="#"><span>Stergere</span></a>
            <ul>
               <li><a href="Sterge_Student">Sterge Student</a>
               </li>
               <li><a href="Sterge_Materie">Sterge Materie</a>
               </li>
            </ul>
         </li>
      
         <li class="active has-sub"><a href="#"><span>Modificare</span></a>
            <ul>
               <li><a href="Modificare_Student" >Modifica Student</a> </li>
               <li><a href="Modificare_Materie" >Modifica Materie</a> </li>
                <li><a href="Modificare_Note">Modifica Note</a> </li>
            </ul>
         </li>
         <li class="active has-sub"><a href="#"><span>Afisare</span></a>
            <ul>
               <li><a href="Afisare_Studenti">Afisare Studenti</a>
               </li>
               <li><a href="Afisare_Materii">Afisare Materii</a>
               </li>
            </ul>
         </li>
        <li><a href="logout.php"><span>Logout</span></a></li>
      </ul>
      </div>
      </body>
      <html>';
   }
   else
   {
       echo "<script type='text/javascript'>window.location='404';</script>";
   }
    else
   {
       echo "<script type='text/javascript'>window.location='404';</script>";
   }

?>