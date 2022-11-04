<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoCadastro Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\HasMany $Clientes
 *
 * @method \App\Model\Entity\TipoCadastro newEmptyEntity()
 * @method \App\Model\Entity\TipoCadastro newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TipoCadastro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoCadastro get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoCadastro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TipoCadastro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoCadastro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoCadastro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoCadastro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoCadastro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoCadastro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoCadastro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoCadastro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipoCadastroTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tipo_cadastro');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Clientes', [
            'foreignKey' => 'tipo_cadastro_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        return $validator;
    }
}
