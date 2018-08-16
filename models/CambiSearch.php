<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cambi;

/**
 * CambiSearch represents the model behind the search form of `app\models\Cambi`.
 */
class CambiSearch extends Cambi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'valuta'], 'integer'],
            [['descrizione'], 'safe'],
            [['rateUfficialeAcquisto', 'rateUfficialeVendita', 'spreadAcquisto', 'spreadVendita', 'prezzoMedioAcquisto', 'prezzoMedioVendita'], 'number'],
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
        $query = Cambi::find();

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
            'valuta' => $this->valuta,
            'rateUfficialeAcquisto' => $this->rateUfficialeAcquisto,
            'rateUfficialeVendita' => $this->rateUfficialeVendita,
            'spreadAcquisto' => $this->spreadAcquisto,
            'spreadVendita' => $this->spreadVendita,
            'prezzoMedioAcquisto' => $this->prezzoMedioAcquisto,
            'prezzoMedioVendita' => $this->prezzoMedioVendita,
        ]);

        $query->andFilterWhere(['like', 'descrizione', $this->descrizione]);

        return $dataProvider;
    }
}
