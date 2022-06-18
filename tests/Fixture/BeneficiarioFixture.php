<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BeneficiarioFixture
 */
class BeneficiarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'beneficiario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idBeneficiario' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'rfc' => '',
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 00:45:20',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 00:45:20',
            ],
        ];
        parent::init();
    }
}
