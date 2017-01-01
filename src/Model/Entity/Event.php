<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Cake\I18n\Time $date_create
 * @property \Cake\I18n\Time $date_happening
 * @property \Cake\I18n\Time $date_end
 * @property string $visibility_type
 * @property string $invitation_type
 * @property int $creator_user
 * @property int $creator_service
 * @property int $picture
 */
class Event extends Entity
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
