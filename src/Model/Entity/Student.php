<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property int $studen_id
 * @property string $student_password
 * @property string $student_email
 * @property string $student_phone_number
 * @property string $student_html_point
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Studen $studen
 */
class Student extends Entity
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
        'studen_id' => true,
        'student_password' => true,
        'student_email' => true,
        'student_phone_number' => true,
        'student_html_point' => true,
        'created' => true,
        'modified' => true,
        'studen' => true
    ];
}
