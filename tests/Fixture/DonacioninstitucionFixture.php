<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonacioninstitucionFixture
 */
class DonacioninstitucionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'donacioninstitucion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idDonacionInstitucion' => 1,
                'idDonacion' => 1,
                'idInstitucion' => 1,
                'estatus' => 'Lorem ipsum dolor sit amet',
                'idUsuarioCrea' => 1,
                'fechaCrea' => '2022-06-18 01:12:45',
                'idUsuarioModifica' => 1,
                'fechaModifica' => '2022-06-18 01:12:45',
            ],
        ];
        parent::init();
    }
}
