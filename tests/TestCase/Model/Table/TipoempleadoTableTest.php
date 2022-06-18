<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoempleadoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoempleadoTable Test Case
 */
class TipoempleadoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoempleadoTable
     */
    protected $Tipoempleado;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipoempleado',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoempleado') ? [] : ['className' => TipoempleadoTable::class];
        $this->Tipoempleado = $this->getTableLocator()->get('Tipoempleado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoempleado);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoempleadoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
