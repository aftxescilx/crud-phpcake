<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visitante Model
 *
 * @method \App\Model\Entity\Visitante newEmptyEntity()
 * @method \App\Model\Entity\Visitante newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Visitante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visitante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visitante findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Visitante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visitante[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visitante|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitante[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitante[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitante[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitante[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VisitanteTable extends Table
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

        $this->setTable('visitante');
        $this->setDisplayField('idVisitante');
        $this->setPrimaryKey('idVisitante');
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
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidoPaterno')
            ->maxLength('apellidoPaterno', 50)
            ->requirePresence('apellidoPaterno', 'create')
            ->notEmptyString('apellidoPaterno');

        $validator
            ->scalar('apellidoMaterno')
            ->maxLength('apellidoMaterno', 50)
            ->requirePresence('apellidoMaterno', 'create')
            ->notEmptyString('apellidoMaterno');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 50)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo')
            ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 10)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->dateTime('fechaNacimiento')
            ->requirePresence('fechaNacimiento', 'create')
            ->notEmptyDateTime('fechaNacimiento');

        $validator
            ->scalar('dni')
            ->maxLength('dni', 13)
            ->requirePresence('dni', 'create')
            ->notEmptyString('dni');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['correo']), ['errorField' => 'correo']);

        return $rules;
    }
}
