<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departamentoreactivo Model
 *
 * @method \App\Model\Entity\Departamentoreactivo newEmptyEntity()
 * @method \App\Model\Entity\Departamentoreactivo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Departamentoreactivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departamentoreactivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departamentoreactivo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Departamentoreactivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departamentoreactivo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departamentoreactivo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamentoreactivo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamentoreactivo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamentoreactivo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamentoreactivo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamentoreactivo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DepartamentoreactivoTable extends Table
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

        $this->setTable('departamentoreactivo');
        $this->setDisplayField('idDepartamentoReactivo');
        $this->setPrimaryKey('idDepartamentoReactivo');
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
            ->integer('idDepartamento')
            ->requirePresence('idDepartamento', 'create')
            ->notEmptyString('idDepartamento');

        $validator
            ->integer('idReactivo')
            ->requirePresence('idReactivo', 'create')
            ->notEmptyString('idReactivo');

        $validator
            ->scalar('lote')
            ->maxLength('lote', 5)
            ->requirePresence('lote', 'create')
            ->notEmptyString('lote');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 10)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->dateTime('fechaEmpaque')
            ->requirePresence('fechaEmpaque', 'create')
            ->notEmptyDateTime('fechaEmpaque');

        $validator
            ->dateTime('fechaCaducidad')
            ->requirePresence('fechaCaducidad', 'create')
            ->notEmptyDateTime('fechaCaducidad');

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
