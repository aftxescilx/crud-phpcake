<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departamentoreactivo Entity
 *
 * @property int $idDepartamentoReactivo
 * @property int $idDepartamento
 * @property int $idReactivo
 * @property string $lote
 * @property string $codigo
 * @property \Cake\I18n\FrozenTime $fechaEmpaque
 * @property \Cake\I18n\FrozenTime $fechaCaducidad
 * @property string|null $estatus
 * @property int|null $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Departamentoreactivo extends Entity
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
        'idDepartamento' => true,
        'idReactivo' => true,
        'lote' => true,
        'codigo' => true,
        'fechaEmpaque' => true,
        'fechaCaducidad' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
