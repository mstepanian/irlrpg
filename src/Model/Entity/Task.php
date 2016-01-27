<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\Time $due_time
 * @property int $attribute_id
 * @property \App\Model\Entity\Attribute $attribute
 * @property int $quest_id
 * @property \App\Model\Entity\Quest $quest
 * @property bool $active
 */
class Task extends Entity
{

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
        '*' => true,
        'id' => false,
    ];
}
