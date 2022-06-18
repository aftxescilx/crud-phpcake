<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visita Model
 *
 * @method \App\Model\Entity\Visitum newEmptyEntity()
 * @method \App\Model\Entity\Visitum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Visitum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visitum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visitum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Visitum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visitum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visitum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VisitaTable extends Table
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

        $this->setTable('visita');
        $this->setDisplayField('idVisita');
        $this->setPrimaryKey('idVisita');
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
            ->maxLength('codigo', 5)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->integer('idTipoVisita')
            ->requirePresence('idTipoVisita', 'create')
            ->notEmptyString('idTipoVisita');

        $validator
            ->integer('idVisitante')
            ->requirePresence('idVisitante', 'create')
            ->notEmptyString('idVisitante');

        $validator
            ->integer('idPase')
            ->requirePresence('idPase', 'create')
            ->notEmptyString('idPase');

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
