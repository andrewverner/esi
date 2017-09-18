<pre>
<?php
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);

spl_autoload_register(function ($className) {
    $className = end(explode('\\', $className));
    if (file_exists(getcwd() . "/{$className}.php")) {
        require_once getcwd() . "/{$className}.php";
    } else {
        $dirs = [
            'core',
            'request',
            'response',
            'request/alliance',
            'request/characters',
            'response/alliance',
            'response/characters',
            'response/struct',
            'core/logger'
        ];
        foreach ($dirs as $dir) {
            if (file_exists(getcwd() . "/{$dir}/{$className}.php")) {
                require_once getcwd() . "/{$dir}/{$className}.php";
            }
        }
    }
});

set_exception_handler(function (Exception $exception) {
    $code = $exception->getCode();
    $message = $exception->getMessage();
    $file = $exception->getFile();
    $line = $exception->getLine();
    $msg = <<<MSG
    
<h3>$code: $message in $file:$line</h3>
MSG;

    echo $msg;

});

if (isset($_REQUEST['code'])) {
    print_r(\ESC\ESI::app()->oauth->getToken($_REQUEST['code']));
} elseif (isset($_REQUEST['token'])) {
    print_r(\ESC\ESI::app()->oauth->refreshToken($_REQUEST['token']));
} elseif (isset($_REQUEST['access_token'])) {
    print_r(\ESC\ESI::app()->oauth->getCharacterID($_REQUEST['access_token']));
} else {
    $character = new \ESC\core\CharacterFacade(656916134);
    //print_r($character->details());
    //print_r($character->names([656916134, 534122154, 523375194, 653213313, 90230044]));
    //$character->setToken('');
    //$character->agentsResearch());
    //$character->blueprints());
    //$character->chatChannels();
    print_r($character->corporationHistory());

    //Header("Location: " . \ESC\ESI::app()->oauth->auth(['characterContactsRead', 'esi-characters.read_agents_research.v1', 'esi-characters.read_chat_channels.v1']));
}

//var_dump(\ESC\ESI::app()->rest->call(new \ESC\request\alliance\Alliances()));
?>
</pre>
