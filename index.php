<pre>
<?php
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);

spl_autoload_register(function ($className) {
    $className = end(explode('\\', $className));
    if (file_exists(getcwd() . "/{$className}.php")) {
        require_once getcwd() . "/{$className}.php";
    } else {
        foreach (['core', 'request', 'request/alliance'] as $dir) {
            if (file_exists(getcwd() . "/{$dir}/{$className}.php")) {
                require_once getcwd() . "/{$dir}/{$className}.php";
            }
        }
    }
});

/*if (isset($_REQUEST['code'])) {
    var_dump(\ESC\ESI::app()->oauth->getToken($_REQUEST['code']));
} elseif (isset($_REQUEST['token'])) {
    var_dump(\ESC\ESI::app()->oauth->refreshToken($_REQUEST['token']));
} elseif (isset($_REQUEST['accessToken'])) {
    var_dump(\ESC\ESI::app()->oauth->getCharacterID($_REQUEST['accessToken']));
} else {
    Header("Location: " . \ESC\ESI::app()->oauth->auth());
}*/

var_dump(\ESC\ESI::app()->rest->send(new \ESC\request\alliance\Alliance(99007037)));
?>
</pre>
