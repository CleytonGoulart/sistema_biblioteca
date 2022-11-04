<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmprestimosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmprestimosTable Test Case
 */
class EmprestimosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmprestimosTable
     */
    protected $Emprestimos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Emprestimos',
        'app.Clientes',
        'app.Livros',
        'app.Usuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Emprestimos') ? [] : ['className' => EmprestimosTable::class];
        $this->Emprestimos = $this->getTableLocator()->get('Emprestimos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Emprestimos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
