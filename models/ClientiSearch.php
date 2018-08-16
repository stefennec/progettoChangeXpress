<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clienti;

/**
 * ClientiSearch represents the model behind the search form of `app\models\Clienti`.
 */
class ClientiSearch extends Clienti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'luogoNascita', 'residenteItalia', 'tipoDocumento', 'ente', 'luogoEmissione', 'provincia'], 'integer'],
            [['nomeCliente', 'cognomeCliente', 'dataNascita', 'nazionalita', 'codFiscale', 'sesso', 'numeroDocumento', 'fidelity'], 'safe'],
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
        $query = Clienti::find();

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
            'dataNascita' => $this->dataNascita,
            'luogoNascita' => $this->luogoNascita,
            'residenteItalia' => $this->residenteItalia,
            'tipoDocumento' => $this->tipoDocumento,
            'ente' => $this->ente,
            'luogoEmissione' => $this->luogoEmissione,
            'provincia' => $this->provincia,
        ]);

        $query->andFilterWhere(['like', 'nomeCliente', $this->nomeCliente])
            ->andFilterWhere(['like', 'cognomeCliente', $this->cognomeCliente])
            ->andFilterWhere(['like', 'nazionalita', $this->nazionalita])
            ->andFilterWhere(['like', 'codFiscale', $this->codFiscale])
            ->andFilterWhere(['like', 'sesso', $this->sesso])
            ->andFilterWhere(['like', 'numeroDocumento', $this->numeroDocumento])
            ->andFilterWhere(['like', 'fidelity', $this->fidelity]);

        return $dataProvider;
    }
}
