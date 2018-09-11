<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Transazioni".
 *
 * @property int $id
 * @property string $ora
 * @property int $valuta
 * @property int $supporto
 * @property string $quantita
 * @property string $cambio
 * @property string $spese
 * @property string $percentuale
 * @property string $netto
 * @property string $commissioni
 * @property string $lordo
 * @property int $tipologiaNazioneCliente
 * @property int $idCliente
 * @property int $operatore
 * @property string $fidelityCliente
 */
class Transazioni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Transazioni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ora'], 'safe'],
            [['valuta', 'supporto', 'tipologiaNazioneCliente', 'idCliente', 'operatore'], 'integer'],
            [['quantita', 'cambio', 'spese', 'percentuale', 'netto', 'commissioni', 'lordo'], 'number'],
            [['fidelityCliente'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ora' => 'Ora',
            'valuta' => 'Valuta',
            'supporto' => 'Supporto',
            'quantita' => 'Quantita',
            'cambio' => 'Cambio',
            'spese' => 'Spese',
            'percentuale' => 'Percentuale',
            'netto' => 'Netto',
            'commissioni' => 'Commissioni',
            'lordo' => 'Lordo',
            'tipologiaNazioneCliente' => 'Tipologia Nazione Cliente',
            'idCliente' => 'Id Cliente',
            'operatore' => 'Operatore',
            'fidelityCliente' => 'Fidelity Cliente',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TransazioniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TransazioniQuery(get_called_class());
    }

    public function getValute()
{
    return $this->hasOne(Valute::className(), ['id' => 'valuta']);
}
}
