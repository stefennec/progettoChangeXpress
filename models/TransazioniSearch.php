<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Transazioni;

/**
 * TransazioniSearch represents the model behind the search form of `app\models\Transazioni`.
 */
class TransazioniSearch extends Transazioni
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'valuta', 'supporto', 'tipologiaNazioneCliente', 'idCliente', 'operatore'], 'integer'],
            [['ora', 'fidelityCliente'], 'safe'],
            [['quantita', 'cambio', 'spese', 'percentuale', 'netto', 'commissioni', 'lordo'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Transazioni::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'ora' => $this->ora,
            'valuta' => $this->valuta,
            'supporto' => $this->supporto,
            'quantita' => $this->quantita,
            'cambio' => $this->cambio,
            'spese' => $this->spese,
            'percentuale' => $this->percentuale,
            'netto' => $this->netto,
            'commissioni' => $this->commissioni,
            'lordo' => $this->lordo,
            'tipologiaNazioneCliente' => $this->tipologiaNazioneCliente,
            'idCliente' => $this->idCliente,
            'operatore' => $this->operatore,
        ]);

        $query->andFilterWhere(['like', 'fidelityCliente', $this->fidelityCliente]);

        return $dataProvider;
    }
}
