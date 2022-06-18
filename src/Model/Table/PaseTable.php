<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pase Model
 *
 * @method \App\Model\Entity\Pase newEmptyEntity()
 * @method \App\Model\Entity\Pase newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pase findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pase[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pase|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pase saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pase[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pase[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pase[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pase[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PaseTable extends Table
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

        $this->setTable('pase');
        $this->setDisplayField('idPase');
        $this->setPrimaryKey('idPase');
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
            ->dateTime('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmptyDateTime('fechaInicio');

        $validator
            ->dateTime('fechaFinal')
            ->requirePresence('fechaFinal', 'create')
            ->notEmptyDateTime('fechaFinal');

        $validator
            ->integer('idTipoPase')
            ->requirePresence('idTipoPase', 'create')
            ->notEmptyString('idTipoPase');

        $validator
            ->integer('idInstitucion')
            ->requirePresence('idInstitucion', 'create')
            ->notEmptyString('idInstitucion');

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
