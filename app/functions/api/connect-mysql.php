<?php

$config = array(

    "host" => "localhost",
    
    "username" => "logowanie",

    "password" => "PyKBjqfUhH1DLgyy",
    
    "database" => "logowanie",
        
);
$mysql["login"] = new mysqli($config["host"], $config["username"], $config["password"], $config["database"], 3306);
$config = array(

    "host" => "localhost",
    
    "username" => "logowanie",

    "password" => "PyKBjqfUhH1DLgyy",
    
    "database" => "www",
        
);
$mysql["www"] = new mysqli($config["host"], $config["username"], $config["password"], $config["database"], 3306);

$config = array(

    "host" => "localhost",
    
    "username" => "global",

    "password" => "fnJdXpgInVXRy3FA",
    
    "database" => "global",
        
);
$mysql["global"] = new mysqli($config["host"], $config["username"], $config["password"], $config["database"], 3306);

$config = array(

    "host" => "localhost",
    
    "username" => "Portfel",

    "password" => "TPhAaOiJnRNf3dO4",
    
    "database" => "Portfel",
        
);
$mysql["portfel"] = new mysqli($config["host"], $config["username"], $config["password"], $config["database"], 3306);

$config = array(

    "host" => "localhost",
    
    "username" => "mediumhc",

    "password" => "FeBKif7XBy1o72wQ",
    
    "database" => "mediumhc",
        
);
$mysql["mediumhc"] = new mysqli($config["host"], $config["username"], $config["password"], $config["database"], 3306);

?>