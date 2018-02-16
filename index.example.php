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
            'request/alliances',
            'request/characters',
            'request/corporations',
            'response/alliances',
            'response/characters',
            'response/struct',
            'core/logger',
            'core/sorter'
        ];
        foreach ($dirs as $dir) {
            if (file_exists(getcwd() . "/{$dir}/{$className}.php")) {
                require_once getcwd() . "/{$dir}/{$className}.php";
            }
        }
    }
});

set_exception_handler(function ($exception) {
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
    print_r(\ESC\ESI::app()->oauth->refreshToken(''));
} elseif (isset($_REQUEST['access_token'])) {
    print_r(\ESC\ESI::app()->oauth->getCharacterID($_REQUEST['access_token']));
} else {
    $character = new \ESC\core\CharactersFacade(656916134);
    $character->setToken('');
    //$character->details();
    //$character->names([656916134, 534122154, 523375194, 653213313, 90230044]);
    //$character->setId(656916134);
    //print_r($character->portraits());
    //$character->agentsResearch());
    //$character->blueprints());
    //print_r($character->bookmarksFolders());
    //$character->chatChannels();
    //$character->corporationHistory();
    //$character->fatigue();
    //$character->medals();
    //$character->notifications();
    //$character->contactsNotifications();
    //$character->roles();
    //$character->standings();
    //print_r($character->assets());
    //print_r($character->assetsLocations([1016499019528, 1794091545, 899694798]));
    //print_r($character->assetsNames([1782876119, 1006192138849, 1022538575080]));
    print_r($character->stats());

    /*Header("Location: " . \ESC\ESI::app()->oauth->auth([
            'characterContactsRead',
            'esi-characters.read_agents_research.v1',
            'esi-characters.read_blueprints.v1',
            'esi-characters.read_chat_channels.v1',
            'esi-characters.read_fatigue.v1',
            'esi-characters.read_medals.v1',
            'esi-characters.read_notifications.v1',
            'esi-characters.read_corporation_roles.v1',
            'esi-characters.read_standings.v1',
            'esi-assets.read_assets.v1',
            'esi-bookmarks.read_character_bookmarks.v1',
            'esi-clones.read_clones.v1',
            'esi-clones.read_implants.v1',
            'esi-characters.read_contacts.v1',
            'esi-characterstats.read.v1'
        ])
    );*/

    //$alliancesFacade = new \ESC\core\AlliancesFacade();
    //print_r($alliancesFacade->alliances());
    //print_r($alliancesFacade->names([1354830081, 99005338, 498125261, 99003500, 99003214]));
    //print_r($alliancesFacade->setId(1354830081));
    //print_r($alliancesFacade->details());
    //print_r($alliancesFacade->corporations());
    //print_r($alliancesFacade->icons());
}

//var_dump(\ESC\ESI::app()->rest->call(new \ESC\request\alliances\AlliancesGetRequest()));
?>
</pre>
