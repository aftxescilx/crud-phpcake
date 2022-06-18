<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 */
class UsuarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idUsuario' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoPaterno' => 'Lorem ipsum dolor sit amet',
                'apellidoMaterno' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'clave' => 'Lorem ipsum dolor sit amet',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:11:58',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:11:58',
            ],
        ];
        parent::init();
    }
}
