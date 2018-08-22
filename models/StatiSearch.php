<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Stati;

/**
 * StatiSearch represents the model behind the search form of `app\models\Stati`.
 */
class StatiSearch extends Stati
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stati'], 'integer'],
            [['nome_stati', 'sigla_numerica_stati', 'sigla_iso_3166_1_alpha_3_stati', 'sigla_iso_3166_1_alpha_2_stati'], 'safe'],
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
        $query = Stati::find();

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
            'id_stati' => $this->id_stati,
        ]);

        $query->andFilterWhere(['like', 'nome_stati', $this->nome_stati])
            ->andFilterWhere(['like', 'sigla_numerica_stati', $this->sigla_numerica_stati])
            ->andFilterWhere(['like', 'sigla_iso_3166_1_alpha_3_stati', $this->sigla_iso_3166_1_alpha_3_stati])
            ->andFilterWhere(['like', 'sigla_iso_3166_1_alpha_2_stati', $this->sigla_iso_3166_1_alpha_2_stati]);

        return $dataProvider;
    }
}
