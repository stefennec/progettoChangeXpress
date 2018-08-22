<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comuni;

/**
 * ComuniSearch represents the model behind the search form of `app\models\Comuni`.
 */
class ComuniSearch extends Comuni
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pop_residente', 'pop_straniera', 'densita_demogr', 'superficie_kmq', 'altezza_min', 'altezza_max', 'altezza_centro', 'zona_altimetrica', 'tipo_comune', 'latitudine_g1', 'latitudine_g2', 'longitudine_g1', 'longitudine_g2'], 'integer'],
            [['comune', 'istat', 'provincia', 'prov', 'regione', 'area_geo', 'grado_urbaniz', 'indice_montanita', 'zona_climatica', 'zona_sismica', 'classe_comune1', 'classe_comune2', 'classe_comune_descr1'], 'safe'],
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
        $query = Comuni::find();

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
            'pop_residente' => $this->pop_residente,
            'pop_straniera' => $this->pop_straniera,
            'densita_demogr' => $this->densita_demogr,
            'superficie_kmq' => $this->superficie_kmq,
            'altezza_min' => $this->altezza_min,
            'altezza_max' => $this->altezza_max,
            'altezza_centro' => $this->altezza_centro,
            'zona_altimetrica' => $this->zona_altimetrica,
            'tipo_comune' => $this->tipo_comune,
            'latitudine_g1' => $this->latitudine_g1,
            'latitudine_g2' => $this->latitudine_g2,
            'longitudine_g1' => $this->longitudine_g1,
            'longitudine_g2' => $this->longitudine_g2,
        ]);

        $query->andFilterWhere(['like', 'comune', $this->comune])
            ->andFilterWhere(['like', 'istat', $this->istat])
            ->andFilterWhere(['like', 'provincia', $this->provincia])
            ->andFilterWhere(['like', 'prov', $this->prov])
            ->andFilterWhere(['like', 'regione', $this->regione])
            ->andFilterWhere(['like', 'area_geo', $this->area_geo])
            ->andFilterWhere(['like', 'grado_urbaniz', $this->grado_urbaniz])
            ->andFilterWhere(['like', 'indice_montanita', $this->indice_montanita])
            ->andFilterWhere(['like', 'zona_climatica', $this->zona_climatica])
            ->andFilterWhere(['like', 'zona_sismica', $this->zona_sismica])
            ->andFilterWhere(['like', 'classe_comune1', $this->classe_comune1])
            ->andFilterWhere(['like', 'classe_comune2', $this->classe_comune2])
            ->andFilterWhere(['like', 'classe_comune_descr1', $this->classe_comune_descr1]);

        return $dataProvider;
    }
}
