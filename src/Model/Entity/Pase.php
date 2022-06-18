<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pase Entity
 *
 * @property int $idPase
 * @property string $codigo
 * @property \Cake\I18n\FrozenTime $fechaInicio
 * @property \Cake\I18n\FrozenTime $fechaFinal
 * @property int $idTipoPase
 * @property int $idInstitucion
 * @property string|null $estatus
 * @property int|null $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Pase extends Entity
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
        'codigo' => true,
        'fechaInicio' => true,
        'fechaFinal' => true,
        'idTipoPase' => true,
        'idInstitucion' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
