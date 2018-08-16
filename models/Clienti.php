<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clienti".
 *
 * @property int $id
 * @property string $nomeCliente
 * @property string $cognomeCliente
 * @property string $dataNascita
 * @property string $nazionalita
 * @property int $luogoNascita
 * @property string $codFiscale
 * @property string $sesso
 * @property int $residenteItalia
 * @property string $numeroDocumento
 * @property int $tipoDocumento
 * @property int $ente
 * @property int $luogoEmissione
 * @property int $provincia
 * @property string $fidelity
 */
class Clienti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clienti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataNascita', 'scadenzaDoc'], 'safe'],
            ['nomeCliente', 'required', 'message' => 'Manca nome cliente'],
            [['luogoNascita', 'residenteItalia', 'tipoDocumento', 'ente', 'luogoEmissione', 'provincia'], 'integer'],
            [['cognomeCliente', 'nazionalita', 'codFiscale', 'numeroDocumento'], 'string', 'max' => 255],
            [['sesso', 'fidelity'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomeCliente' => 'Nome Cliente',
            'cognomeCliente' => 'Cognome Cliente',
            'dataNascita' => 'Data Nascita',
            'nazionalita' => 'Nazionalita',
            'luogoNascita' => 'Luogo Nascita',
            'codFiscale' => 'Cod Fiscale',
            'sesso' => 'Sesso',
            'residenteItalia' => 'Residente Italia',
            'numeroDocumento' => 'Numero Documento',
            'tipoDocumento' => 'Tipo Documento',
            'ente' => 'Ente',
            'luogoEmissione' => 'Luogo Emissione',
            'scadenzaDoc' => 'Scadenza Documento',
            'provincia' => 'Provincia',
            'fidelity' => 'Fidelity',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ClientiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientiQuery(get_called_class());
    }
}
