<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpleadoespecialidadTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpleadoespecialidadTable Test Case
 */
class EmpleadoespecialidadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpleadoespecialidadTable
     */
    protected $Empleadoespecialidad;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Empleadoespecialidad',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empleadoespecialidad') ? [] : ['className' => EmpleadoespecialidadTable::class];
        $this->Empleadoespecialidad = $this->getTableLocator()->get('Empleadoespecialidad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Empleadoespecialidad);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmpleadoespecialidadTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
