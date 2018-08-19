<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cassa1;

/**
 * Cassa1Search represents the model behind the search form of `app\models\Cassa1`.
 */
class Cassa1Search extends Cassa1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idValuta', 'valuta'], 'integer'],
            [['quantita', 'controvalore', 'prezzoMedio', 'medioEuro'], 'number'],
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
        $query = Cassa1::find();

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
            'idValuta' => $this->idValuta,
            'valuta' => $this->valuta,
            'quantita' => $this->quantita,
            'controvalore' => $this->controvalore,
            'prezzoMedio' => $this->prezzoMedio,
            'medioEuro' => $this->medioEuro,
        ]);

        return $dataProvider;
    }
}
