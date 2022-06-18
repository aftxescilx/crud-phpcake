<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipovisitaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipovisitaTable Test Case
 */
class TipovisitaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipovisitaTable
     */
    protected $Tipovisita;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipovisita',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipovisita') ? [] : ['className' => TipovisitaTable::class];
        $this->Tipovisita = $this->getTableLocator()->get('Tipovisita', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipovisita);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipovisitaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
