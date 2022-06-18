<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CertificadoFixture
 */
class CertificadoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'certificado';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idCertificado' => 1,
                'codigo' => 'Lorem ipsum dolor sit amet',
                'idInstitucion' => 1,
                'fecha' => '2022-06-18 01:05:01',
                'ciudad' => 'Lorem ipsum dolor sit amet',
                'pais' => 'Lorem ipsum dolor sit amet',
                'idTipoCertificado' => 1,
                'idEmpleado' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:05:01',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:05:01',
            ],
        ];
        parent::init();
    }
}
