<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emprestimos Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\LivrosTable&\Cake\ORM\Association\BelongsTo $Livros
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\Emprestimo newEmptyEntity()
 * @method \App\Model\Entity\Emprestimo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emprestimo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Emprestimo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmprestimosTable extends Table
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

        $this->setTable('emprestimos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
        ]);
        $this->belongsTo('Livros', [
            'foreignKey' => 'livro_id',
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'emprestimo_funcionario_id',
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'devolucao_funcionario_id',
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
            ->dateTime('data_emprestimo')
            ->allowEmptyDateTime('data_emprestimo');

        $validator
            ->dateTime('data_devolucao')
            ->allowEmptyDateTime('data_devolucao');

        $validator
            ->scalar('observacao')
            ->allowEmptyString('observacao');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'), ['errorField' => 'cliente_id']);
        $rules->add($rules->existsIn(['livro_id'], 'Livros'), ['errorField' => 'livro_id']);
        $rules->add($rules->existsIn(['emprestimo_funcionario_id'], 'Usuarios'), ['errorField' => 'emprestimo_funcionario_id']);
        $rules->add($rules->existsIn(['devolucao_funcionario_id'], 'Usuarios'), ['errorField' => 'devolucao_funcionario_id']);

        return $rules;
    }
}
