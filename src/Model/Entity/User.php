<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

use Cake\Auth\DefaultPasswordHasher; // Add this line

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property \Cake\I18n\FrozenDate|null $date_birth
 * @property int $phone_number
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $role
 */
class User extends Entity
{
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'gender' => true,
        'date_birth' => true,
        'phone_number' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'created' => true,
        'role' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
