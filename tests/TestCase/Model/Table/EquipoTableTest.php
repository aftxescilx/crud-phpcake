<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquipoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipoTable Test Case
 */
class EquipoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipoTable
     */
    protected $Equipo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Equipo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Equipo') ? [] : ['className' => EquipoTable::class];
        $this->Equipo = $this->getTableLocator()->get('Equipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Equipo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EquipoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
