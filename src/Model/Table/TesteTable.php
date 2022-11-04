<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teste Model
 *
 * @property \App\Model\Table\LivrosTable&\Cake\ORM\Association\BelongsTo $Livros
 *
 * @method \App\Model\Entity\Teste newEmptyEntity()
 * @method \App\Model\Entity\Teste newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Teste[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Teste get($primaryKey, $options = [])
 * @method \App\Model\Entity\Teste findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Teste patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Teste[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Teste|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teste saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teste[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Teste[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Teste[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Teste[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TesteTable extends Table
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

        $this->setTable('teste');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Livros', [
            'foreignKey' => 'livro_id',
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
            ->maxLength('nome', 22)
            ->allowEmptyString('nome');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['livro_id'], 'Livros'), ['errorField' => 'livro_id']);

        return $rules;
    }
}
