<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MobiliarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MobiliarioTable Test Case
 */
class MobiliarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MobiliarioTable
     */
    protected $Mobiliario;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Mobiliario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Mobiliario') ? [] : ['className' => MobiliarioTable::class];
        $this->Mobiliario = $this->getTableLocator()->get('Mobiliario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Mobiliario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MobiliarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
