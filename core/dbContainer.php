<?php

    use core\App;
    use core\Container;
    use core\Database;

    $container = new Container();
    App::setContainer($container);

    App::bind('core\Database', function(){
        $config = require basePath('config.php');
        return new Database($config,'root','admin@123',PDO::FETCH_ASSOC);

    });
?>