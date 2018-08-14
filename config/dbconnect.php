<?php
        $pdo = null;


        -//creo una funcion para realizar la conexion
        function connect_to_db()
        {
            //creo varias variables la cual me permitiran conectarmen ak server y bd
            $dbengine   = 'mysql';
            $dbhost     = 'localhost';
            $dbuser     = 'root';
            $dbpassword = '';
            $dbname     = 'news';

// intento una conexon al aerver con la variable pdo
            try{
                $pdo = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


                //si la coneion fue done me  return pdfo
                return $pdo;
            }  
            //ccatch cualquier error 
            catch (PDOException $e){

                //me devuelve el error que paso cuanto intente conectarme.
            
                $e->getMessage();
            }
        }
