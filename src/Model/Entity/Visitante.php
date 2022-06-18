<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visitante Entity
 *
 * @property int $idVisitante
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property string $correo
 * @property string $telefono
 * @property \Cake\I18n\FrozenTime $fechaNacimiento
 * @property string $dni
 * @property string|null $estatus
 * @property int|null $idUsuarioCrea
 * @property \Cake\I18n\FrozenTime|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property \Cake\I18n\FrozenTime|null $fechaModifica
 */
class Visitante extends Entity
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
        'nombre' => true,
        'apellidoPaterno' => true,
        'apellidoMaterno' => true,
        'correo' => true,
        'telefono' => true,
        'fechaNacimiento' => true,
        'dni' => true,
        'estatus' => true,
        'idUsuarioCrea' => true,
        'fechaCrea' => true,
        'idUsuarioModifica' => true,
        'fechaModifica' => true,
    ];
}
