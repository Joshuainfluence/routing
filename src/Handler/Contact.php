<?php 

declare(strict_types=1);

namespace App\Handler;

class Contact{
    public function execute(array $params): void{
        $username = $params['username'] ?? 'Guest';
        require_once __DIR__ . "/../../templates/contact.phtml";
    }
}