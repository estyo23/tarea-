<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bfijivaoaeyhrxgzxgp1-mysql.services.clever-cloud.com","uontbtm3gdsnkwhr","DJFQGyWaG5hsKRxaiKSh","bfijivaoaeyhrxgzxgp1");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }