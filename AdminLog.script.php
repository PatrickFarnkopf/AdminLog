<?php

namespace Scripts;

class AdminLog extends \Classes\Scripting\UserScript {
    function OnLogin(\Classes\User $user) {
        \Classes\Singleton::getInstance('\Classes\MySQL')
        ->tableAction('admin_log')
        ->insert(
            [
                'uid' => $user->getId(),
                'action' => 'User angemeldet',
                'data' => 'Verschiedene Daten'
            ]
        );
    }

    function OnLogout(\Classes\User $user) {
        \Classes\Singleton::getInstance('\Classes\MySQL')
        ->tableAction('admin_log')
        ->insert(
            [
                'uid' => $user->getId(),
                'action' => 'User abgemeldet',
                'data' => 'Verschiedene Daten'
            ]
        );
    }

    function OnRegister(\Classes\User $user, &$status) {
        \Classes\Singleton::getInstance('\Classes\MySQL')
        ->tableAction('admin_log')
        ->insert(
            [
                'uid' => $user->getId(),
                'action' => 'User registriert',
                'data' => 'Status: '.$status
            ]
        );
    }
}

?>
