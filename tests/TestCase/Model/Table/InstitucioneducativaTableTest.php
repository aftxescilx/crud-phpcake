<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitucioneducativaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitucioneducativaTable Test Case
 */
class InstitucioneducativaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitucioneducativaTable
     */
    protected $Institucioneducativa;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Institucioneducativa',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Institucioneducativa') ? [] : ['className' => InstitucioneducativaTable::class];
        $this->Institucioneducativa = $this->getTableLocator()->get('Institucioneducativa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Institucioneducativa);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InstitucioneducativaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
