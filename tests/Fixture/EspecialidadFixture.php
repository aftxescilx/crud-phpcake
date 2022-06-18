<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EspecialidadFixture
 */
class EspecialidadFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'especialidad';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idEspecialidad' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'idDepartamento' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:09:00',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:09:00',
            ],
        ];
        parent::init();
    }
}
