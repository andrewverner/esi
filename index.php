<pre>
<?php
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);

spl_autoload_register(function ($className) {
    $className = end(explode('\\', $className));
    if (file_exists(getcwd() . "/{$className}.php")) {
        require_once getcwd() . "/{$className}.php";
    } else {
        foreach (['core'] as $dir) {
            if (file_exists(getcwd() . "/{$dir}/{$className}.php")) {
                require_once getcwd() . "/{$dir}/{$className}.php";
            }
        }
    }
});

if (isset($_REQUEST['code'])) {
    var_dump(\ESC\ESI::app()->oauth->getToken($_REQUEST['code']));
} else {
    Header("Location: " . \ESC\ESI::app()->oauth->auth());
}
?>
</pre>
