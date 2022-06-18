<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonacionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonacionTable Test Case
 */
class DonacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonacionTable
     */
    protected $Donacion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Donacion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Donacion') ? [] : ['className' => DonacionTable::class];
        $this->Donacion = $this->getTableLocator()->get('Donacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Donacion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonacionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
