<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CasoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CasoTable Test Case
 */
class CasoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CasoTable
     */
    protected $Caso;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Caso',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Caso') ? [] : ['className' => CasoTable::class];
        $this->Caso = $this->getTableLocator()->get('Caso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Caso);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CasoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
