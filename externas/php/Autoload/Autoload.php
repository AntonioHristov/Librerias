<?php

namespace comun;



spl_autoload_register
(
    function ($class) 
    {
        $classPath = 
        array
        (
            "./"
            ,
            "../"
        );
    
        //echo "Autoload llamado";
        // en nuestros proyectos
        // ../src/
        // o la ruta a la raíz del proyecto
        //require("$classPath${class}.php");
        

        foreach($classPath as $claveClassPath => $valorClassPath)
        {
            
            $file = str_replace('\\', '/', $class);

            if(file_exists("$valorClassPath${file}.php"))
            {
                //echo "Autocarga funciona!<br>";
                require("$valorClassPath${file}.php");
            }
          
        }

   
    }
);





?>