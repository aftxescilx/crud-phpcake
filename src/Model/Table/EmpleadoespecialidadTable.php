<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleadoespecialidad Model
 *
 * @method \App\Model\Entity\Empleadoespecialidad newEmptyEntity()
 * @method \App\Model\Entity\Empleadoespecialidad newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoespecialidad[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadoespecialidadTable extends Table
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

        $this->setTable('empleadoespecialidad');
        $this->setDisplayField('idEmpleadoEspecialidad');
        $this->setPrimaryKey('idEmpleadoEspecialidad');
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
