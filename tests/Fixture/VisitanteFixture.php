<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisitanteFixture
 */
class VisitanteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'visitante';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idVisitante' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'telefono' => '',
                'fechaNacimiento' => '2022-06-18 01:12:23',
                'dni' => '',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:12:23',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:12:23',
            ],
        ];
        parent::init();
    }
}
