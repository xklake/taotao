<?php

namespace frontend;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employee;

/**
 * controller represents the model behind the search form about `app\models\Employee`.
 */
class controller extends Employee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address'], 'safe'],
            [['Age', 'Email'], 'integer'],
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
        $query = Employee::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Age' => $this->Age,
            'Email' => $this->Email,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Address', $this->Address]);

        return $dataProvider;
    }
}
