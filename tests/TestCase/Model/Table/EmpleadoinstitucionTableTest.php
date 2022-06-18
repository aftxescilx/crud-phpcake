<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpleadoinstitucionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpleadoinstitucionTable Test Case
 */
class EmpleadoinstitucionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpleadoinstitucionTable
     */
    protected $Empleadoinstitucion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Empleadoinstitucion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empleadoinstitucion') ? [] : ['className' => EmpleadoinstitucionTable::class];
        $this->Empleadoinstitucion = $this->getTableLocator()->get('Empleadoinstitucion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Empleadoinstitucion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmpleadoinstitucionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
