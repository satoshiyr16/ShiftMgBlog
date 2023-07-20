<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shift Entity
 *
 * @property int $id
 * @property string $company
 * @property int $time
 * @property int $subtle
 * @property int|null $money
 * @property int|null $rest
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Shift extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'company' => true,
        'time' => true,
        'subtle' => true,
        'money' => true,
        'rest' => true,
        'created' => true,
        'modified' => true,
    ];
}
