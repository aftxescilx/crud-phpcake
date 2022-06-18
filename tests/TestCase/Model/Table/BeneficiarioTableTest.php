<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BeneficiarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BeneficiarioTable Test Case
 */
class BeneficiarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BeneficiarioTable
     */
    protected $Beneficiario;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Beneficiario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Beneficiario') ? [] : ['className' => BeneficiarioTable::class];
        $this->Beneficiario = $this->getTableLocator()->get('Beneficiario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Beneficiario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BeneficiarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
