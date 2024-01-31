<?php

/**
 * Team:对影成三人队
 * By wukui
 * news wource search func
 */

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\NewsSource;

/**
 * NewsSourceSearch represents the model behind the search form of `common\models\NewsSource`.
 */
class NewsSourceSearch extends NewsSource
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source_name', 'source_introduction', 'source_twitter', 'source_facebook', 'source_instagram', 'source_photo'], 'safe'],
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
        $query = NewsSource::find();

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
        $query->andFilterWhere(['like', 'source_name', $this->source_name])
            ->andFilterWhere(['like', 'source_introduction', $this->source_introduction])
            ->andFilterWhere(['like', 'source_twitter', $this->source_twitter])
            ->andFilterWhere(['like', 'source_facebook', $this->source_facebook])
            ->andFilterWhere(['like', 'source_instagram', $this->source_instagram])
            ->andFilterWhere(['like', 'source_photo', $this->source_photo]);

        return $dataProvider;
    }
}
