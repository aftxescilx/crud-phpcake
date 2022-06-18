<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleado Entity
 *
 * @property int $idEmpleado
 * @property string $numero
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string|null $apellidoMaterno
 * @property string $genero
 * @property string $ciudad
 * @property string $pais
 * @property \Cake\I18n\FrozenTime $fechaNacimiento
 * @property string $rfc
 * @property string $dni
 * @property int $idTipoEmpleado
 * @property string|null $estatus
 * @property int|null $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Empleado extends Entity
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
        'numero' => true,
        'nombre' => true,
        'apellidoPaterno' => true,
        'apellidoMaterno' => true,
        'genero' => true,
        'ciudad' => true,
        'pais' => true,
        'fechaNacimiento' => true,
        'rfc' => true,
        'dni' => true,
        'idTipoEmpleado' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
