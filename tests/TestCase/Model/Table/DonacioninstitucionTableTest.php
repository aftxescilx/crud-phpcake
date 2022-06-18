<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonacioninstitucionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonacioninstitucionTable Test Case
 */
class DonacioninstitucionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonacioninstitucionTable
     */
    protected $Donacioninstitucion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Donacioninstitucion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Donacioninstitucion') ? [] : ['className' => DonacioninstitucionTable::class];
        $this->Donacioninstitucion = $this->getTableLocator()->get('Donacioninstitucion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Donacioninstitucion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonacioninstitucionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
