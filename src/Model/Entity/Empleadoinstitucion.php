<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleadoinstitucion Entity
 *
 * @property int $idEmpleadoInstitucion
 * @property int $idEmpleado
 * @property int $idInstitucion
 * @property \Cake\I18n\FrozenTime $fechaInicio
 * @property \Cake\I18n\FrozenTime|null $fechaFinal
 * @property string|null $estatus
 * @property int|null $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Empleadoinstitucion extends Entity
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
        'idEmpleado' => true,
        'idInstitucion' => true,
        'fechaInicio' => true,
        'fechaFinal' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
