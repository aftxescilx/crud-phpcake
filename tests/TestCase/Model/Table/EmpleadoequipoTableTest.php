<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpleadoequipoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpleadoequipoTable Test Case
 */
class EmpleadoequipoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpleadoequipoTable
     */
    protected $Empleadoequipo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Empleadoequipo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empleadoequipo') ? [] : ['className' => EmpleadoequipoTable::class];
        $this->Empleadoequipo = $this->getTableLocator()->get('Empleadoequipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Empleadoequipo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmpleadoequipoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
