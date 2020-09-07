<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    //主キーフィールド"id"を覗く全てのフィールドを一括代入可能にします
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) >0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}