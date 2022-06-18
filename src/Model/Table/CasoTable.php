<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Caso Model
 *
 * @method \App\Model\Entity\Caso newEmptyEntity()
 * @method \App\Model\Entity\Caso newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Caso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Caso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Caso findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Caso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Caso[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Caso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Caso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Caso[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Caso[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Caso[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Caso[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CasoTable extends Table
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

        $this->setTable('caso');
        $this->setDisplayField('idCaso');
        $this->setPrimaryKey('idCaso');
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
            ->scalar('codigo')
            ->maxLength('codigo', 6)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 1)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->dateTime('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmptyDateTime('fechaInicio');

        $validator
            ->dateTime('fechaCierre')
            ->allowEmptyDateTime('fechaCierre');

        $validator
            ->integer('idEquipo')
            ->requirePresence('idEquipo', 'create')
            ->notEmptyString('idEquipo');

        $validator
            ->integer('idEspecialidad')
            ->requirePresence('idEspecialidad', 'create')
            ->notEmptyString('idEspecialidad');

        $validator
            ->scalar('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->allowEmptyString('idUsuarioCrea');

        $validator
            ->dateTime('fechaCrea')
            ->allowEmptyDateTime('fechaCrea');

        $validator
            ->integer('idUsuarioModifica')
            ->allowEmptyString('idUsuarioModifica');

        $validator
            ->dateTime('fechaModifica')
            ->allowEmptyDateTime('fechaModifica');

        return $validator;
    }
}
