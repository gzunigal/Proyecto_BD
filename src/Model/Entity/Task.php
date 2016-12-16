<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property int $mission_id
 * @property string $nombre_tarea
 * @property string $descripcion_tarea
 *
 * @property \App\Model\Entity\Mission $mission
 * @property \App\Model\Entity\Problem[] $problems
 * @property \App\Model\Entity\Request[] $requests
 * @property \App\Model\Entity\Ability[] $abilities
 * @property \App\Model\Entity\Doc[] $docs
 * @property \App\Model\Entity\User[] $users
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
        'id' => false
    ];
}
