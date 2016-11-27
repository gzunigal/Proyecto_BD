<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocsTask Entity
 *
 * @property int $id
 * @property int $doc_id
 * @property int $task_id
 *
 * @property \App\Model\Entity\Doc $doc
 * @property \App\Model\Entity\Task $task
 */
class DocsTask extends Entity
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
