<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Institucioneducativa Model
 *
 * @method \App\Model\Entity\Institucioneducativa newEmptyEntity()
 * @method \App\Model\Entity\Institucioneducativa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Institucioneducativa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Institucioneducativa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Institucioneducativa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Institucioneducativa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Institucioneducativa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Institucioneducativa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institucioneducativa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institucioneducativa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Institucioneducativa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Institucioneducativa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Institucioneducativa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InstitucioneducativaTable extends Table
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

        $this->setTable('institucioneducativa');
        $this->setDisplayField('idInstitucionEducativa');
        $this->setPrimaryKey('idInstitucionEducativa');
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('ciudad')
            ->maxLength('ciudad', 50)
            ->requirePresence('ciudad', 'create')
            ->notEmptyString('ciudad');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 50)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 50)
            ->requirePresence('pais', 'create')
            ->notEmptyString('pais');

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
