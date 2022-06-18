<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonacionFixture
 */
class DonacionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'donacion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idDonacion' => 1,
                'fecha' => '2022-06-18 01:08:11',
                'valor' => 1,
                'idBeneficiario' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:08:11',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:08:11',
            ],
        ];
        parent::init();
    }
}
