<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StInciden;

/**
 * StIncidenSearch represents the model behind the search form about `app\models\StInciden`.
 */
class StIncidenSearch extends StInciden
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['hora_inc', 'fecha_inc', 'lugar_inc', 'nombre_inc', 'apellido_inc', 'departamento_inc', 'observaciones_inc'], 'safe'],
            [['status_inc'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = StInciden::find();

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
            'status_inc' => $this->status_inc,
        ]);

        $query->andFilterWhere(['like', 'hora_inc', $this->hora_inc])
            ->andFilterWhere(['like', 'fecha_inc', $this->fecha_inc])
            ->andFilterWhere(['like', 'lugar_inc', $this->lugar_inc])
            ->andFilterWhere(['like', 'nombre_inc', $this->nombre_inc])
            ->andFilterWhere(['like', 'apellido_inc', $this->apellido_inc])
            ->andFilterWhere(['like', 'departamento_inc', $this->departamento_inc])
            ->andFilterWhere(['like', 'observaciones_inc', $this->observaciones_inc]);

        return $dataProvider;
    }
}
