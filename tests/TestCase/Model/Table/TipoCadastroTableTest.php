<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoCadastroTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoCadastroTable Test Case
 */
class TipoCadastroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoCadastroTable
     */
    protected $TipoCadastro;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TipoCadastro',
        'app.Clientes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TipoCadastro') ? [] : ['className' => TipoCadastroTable::class];
        $this->TipoCadastro = $this->getTableLocator()->get('TipoCadastro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TipoCadastro);

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
}
