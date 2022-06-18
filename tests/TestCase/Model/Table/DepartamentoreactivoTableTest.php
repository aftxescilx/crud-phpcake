<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartamentoreactivoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartamentoreactivoTable Test Case
 */
class DepartamentoreactivoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartamentoreactivoTable
     */
    protected $Departamentoreactivo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Departamentoreactivo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Departamentoreactivo') ? [] : ['className' => DepartamentoreactivoTable::class];
        $this->Departamentoreactivo = $this->getTableLocator()->get('Departamentoreactivo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Departamentoreactivo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DepartamentoreactivoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
