<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Music;
use app\models\MusicSearch;
use PHPUnit\Util\Json;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MusicSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Get a random playlist
     * @return json
     **/
    public function actionGetRandomPlaylist()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $musics = $this->arrayCleaner( Music::find()->all() );
        shuffle($musics);
        return $musics;
    }

    /**
     * 
     * @return array
     */
    private function arrayCleaner($array){
        foreach ($array as $arr) {
            foreach ($arr as $key => $value)
                $a[$key] = $value;
            $data[] = $a;
        }
        return $data;
    }

}
