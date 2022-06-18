<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Certificado Model
 *
 * @method \App\Model\Entity\Certificado newEmptyEntity()
 * @method \App\Model\Entity\Certificado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Certificado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Certificado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Certificado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Certificado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Certificado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Certificado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Certificado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Certificado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Certificado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Certificado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Certificado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CertificadoTable extends Table
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

        $this->setTable('certificado');
        $this->setDisplayField('idCertificado');
        $this->setPrimaryKey('idCertificado');
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
            ->maxLength('codigo', 50)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->integer('idInstitucion')
            ->requirePresence('idInstitucion', 'create')
            ->notEmptyString('idInstitucion');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->scalar('ciudad')
            ->maxLength('ciudad', 50)
            ->requirePresence('ciudad', 'create')
            ->notEmptyString('ciudad');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 50)
            ->requirePresence('pais', 'create')
            ->notEmptyString('pais');

        $validator
            ->integer('idTipoCertificado')
            ->requirePresence('idTipoCertificado', 'create')
            ->notEmptyString('idTipoCertificado');

        $validator
            ->integer('idEmpleado')
            ->requirePresence('idEmpleado', 'create')
            ->notEmptyString('idEmpleado');

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
