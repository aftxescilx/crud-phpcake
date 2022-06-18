<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleadoequipo Model
 *
 * @method \App\Model\Entity\Empleadoequipo newEmptyEntity()
 * @method \App\Model\Entity\Empleadoequipo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoequipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoequipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleadoequipo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleadoequipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoequipo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoequipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadoequipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadoequipo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoequipo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoequipo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoequipo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadoequipoTable extends Table
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

        $this->setTable('empleadoequipo');
        $this->setDisplayField('idEmpleadoEquipo');
        $this->setPrimaryKey('idEmpleadoEquipo');
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
            ->integer('idEmpleado')
            ->requirePresence('idEmpleado', 'create')
            ->notEmptyString('idEmpleado');

        $validator
            ->integer('idEquipo')
            ->requirePresence('idEquipo', 'create')
            ->notEmptyString('idEquipo');

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
