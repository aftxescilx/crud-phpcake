<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donacion Model
 *
 * @method \App\Model\Entity\Donacion newEmptyEntity()
 * @method \App\Model\Entity\Donacion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Donacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donacion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Donacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donacion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donacion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donacion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donacion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donacion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donacion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonacionTable extends Table
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

        $this->setTable('donacion');
        $this->setDisplayField('idDonacion');
        $this->setPrimaryKey('idDonacion');
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
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->integer('valor')
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

        $validator
            ->integer('idBeneficiario')
            ->requirePresence('idBeneficiario', 'create')
            ->notEmptyString('idBeneficiario');

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
