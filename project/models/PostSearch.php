<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

class PostSearch extends Post
{
    public $username;

    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['title', 'content', 'created_at', 'username'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Post::find();
        $query->joinWith(['user']);
    
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
    
        $dataProvider->sort->attributes['username'] = [
            'asc' => ['user.username' => SORT_ASC],
            'desc' => ['user.username' => SORT_DESC],
        ];
    
        $this->load($params);
    
        if (!$this->validate()) {
            return $dataProvider;
        }
    
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
        ]);
    
        $query->andFilterWhere(['like', 'title', $this->title])
              ->andFilterWhere(['like', 'content', $this->content])
              ->andFilterWhere(['like', 'users.username', $this->username]);
    
        return $dataProvider;
    }
}
