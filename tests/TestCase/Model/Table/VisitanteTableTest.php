<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitanteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitanteTable Test Case
 */
class VisitanteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitanteTable
     */
    protected $Visitante;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Visitante',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Visitante') ? [] : ['className' => VisitanteTable::class];
        $this->Visitante = $this->getTableLocator()->get('Visitante', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Visitante);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VisitanteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VisitanteTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
