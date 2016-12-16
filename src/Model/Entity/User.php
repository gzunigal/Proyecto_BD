<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $run
 * @property int $commune_id
 * @property string $nombre_usuario
 * @property string $name
 * @property string $surname
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property bool $disponibilidad
 * @property bool $admin
 *
 * @property \App\Model\Entity\Commune $commune
 * @property \App\Model\Entity\Emergency[] $emergencies
 * @property \App\Model\Entity\Message[] $messages
 * @property \App\Model\Entity\Mission[] $missions
 * @property \App\Model\Entity\Request[] $requests
 * @property \App\Model\Entity\Ability[] $abilities
 * @property \App\Model\Entity\Notification[] $notifications
 * @property \App\Model\Entity\Task[] $tasks
 */
class User extends Entity
{
    /**
     * Funcion que obtiene la lista de misiones asociadas a un usuario
     *
     * @return Lista de Entity Mission asociadas a Usuario, NULL si no existen.
     */
    public function getMissions(){
        $missionsTable = TableRegistry::get('Missions');
        
        $result = $missionsTable->find()->where(['user_id'=>$this->id]);

        return $result;
    }

    /**
     * Funcion que verifica si existen misiones asociadas a un usuario
     *
     * @return 1 si existe, 0 si no
     */
    public function hasMissions(){
        $missionsTable = TableRegistry::get('Missions');
        
        $result = $missionsTable->find()->where(['user_id'=>$this->id])->first();

        return ($result)? 1 : 0;
    }

    /**
     * Funcion que verifica si existen mensajes no vistas asociadas a un usuario
     *
     * @return 1 si existe, 0 si no
     */
    public function hasMessages(){
        $missionsTable = TableRegistry::get('MessagesUsers');
        
        $result = $missionsTable->find()->where(['user_id'=>$this->id,'visto'=>0])->first();

        return ($result)? 1 : 0;
    }

    /**
     * Funcion que verifica si existen notificaciones no vistas asociadas a un usuario
     *
     * @return 1 si existe, 0 si no
     */
    public function hasNotifications(){
        $missionsTable = TableRegistry::get('NotificationsUsers');
        
        $result = $missionsTable->find()->where(['user_id'=>$this->id,'visto'=>0])->first();

        return ($result)? 1 : 0;
    }

    public function getAbilities(){
        $tabla = $missionsTable = TableRegistry::get('AbilitiesUsers');

        return $tabla->find()->where(['user_id'=>$this->id])->contain(['Abilities']);

    }

    /**
     * Funcion que verifica si coincide una password ingresada
     *
     * @return Lista de Entity Mission asociadas a Usuario, NULL si no existen.
     */
    public function checkPass($pass){
        $valid = (new DefaultPasswordHasher)->check($pass,$this->password);

        return $valid;
    }



    /********************************/
    /*** METODOS CREADOS POR BAKE ***/
    /********************************/

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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
