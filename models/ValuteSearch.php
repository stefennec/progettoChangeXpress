<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Valute;

/**
 * ValuteSearch represents the model behind the search form of `app\models\Valute`.
 */
class ValuteSearch extends Valute
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nome', 'isoCode', 'imgBandiera'], 'safe'],
            [['RateUfficialeAcquisto', 'RateUfficialeVendita'], 'number'],
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
        $query = Valute::find();

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
            'RateUfficialeAcquisto' => $this->RateUfficialeAcquisto,
            'RateUfficialeVendita' => $this->RateUfficialeVendita,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'isoCode', $this->isoCode])
            ->andFilterWhere(['like', 'imgBandiera', $this->imgBandiera]);

        return $dataProvider;
    }
}
