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
    print_r(\ESC\ESI::app()->oauth->refreshToken('z0YYQqQROAwMuLnWlg3O_MUhyC3lSWDMOVnVBX0VTlkOX19UOtGv_u97yJSPSZ7CXWjV_dajPlVn04vWa95WwQ2'));
} elseif (isset($_REQUEST['access_token'])) {
    print_r(\ESC\ESI::app()->oauth->getCharacterID($_REQUEST['access_token']));
} else {
    $character = new \ESC\core\CharacterFacade(656916134);
    //print_r($character->details());
    //print_r($character->names([656916134, 534122154, 523375194, 653213313, 90230044]));
    $character->setToken('5KdID9tzGffiszDdsP_pdFZ5xW1sHcvJL6pK7-zKcK-IwXPCeMPKZ-KbSKbHr8gEKdDgFC3S01YXbqrFS8fGIg2');
    //z0YYQqQROAwMuLnWlg3O_MUhyC3lSWDMOVnVBX0VTlkOX19UOtGv_u97yJSPSZ7CXWjV_dajPlVn04vWa95WwQ2
    //$character->agentsResearch());
    //$character->blueprints());
    //$character->chatChannels();
    //$character->corporationHistory();
    //$character->fatigue();
    //$character->medals();
    //$character->notifications();
    //$character->contactsNotifications();
    //$character->roles();
    //$character->standings();

    /*Header("Location: " . \ESC\ESI::app()->oauth->auth([
            'characterContactsRead',
            'esi-characters.read_agents_research.v1',
            'esi-characters.read_blueprints.v1',
            'esi-characters.read_chat_channels.v1',
            'esi-characters.read_fatigue.v1',
            'esi-characters.read_medals.v1',
            'esi-characters.read_notifications.v1',
            'esi-characters.read_corporation_roles.v1',
            'esi-characters.read_standings.v1'
        ])
    );*/
}

//var_dump(\ESC\ESI::app()->rest->call(new \ESC\request\alliance\Alliances()));
?>
</pre>
