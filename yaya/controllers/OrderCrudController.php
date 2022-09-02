<?php

namespace app\controllers;

use Yii;
use app\models\Order;
use app\models\Worker;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderCrudController implements the CRUD actions for Order model.
 */
class OrderCrudController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Order::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Order model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetOrdersOnDateForProvider($date) {
        /*
        SELECT
        `meal`.`name` AS `meal_name`,
        COUNT(`order`.`meal_id`) AS `meal_amount`,
        `meal`.`price` AS `meal_price`,
        SUM(`meal`.`price`) AS `meal_sum`
        FROM `order`
        JOIN `meal`
        ON `order`.`meal_id`=`meal`.`id`
        WHERE date="2022-09-01"
        GROUP BY `order`.`meal_id`;
        */
        
        $ma = '';
        $ma .= "`meal`.`name` AS `meal_name`,";
        $ma .= "COUNT(`order`.`meal_id`) AS `meal_amount`,";
        $ma .= "`meal`.`price` AS `meal_price`,";
        $ma .= "SUM(`meal`.`price`) AS `meal_sum`";

        $kalata = Order::find()
            ->select($ma)
            ->leftJoin('`meal`','`order`.`meal_id`=`meal`.`id`')
            ->where(['date' => $date])
            ->groupBy("`order`.`meal_id`")
            ->asArray()
            ->all();

        /*
        SELECT
        SUM(`meal`.`price`) AS `meal_sum`
        FROM `order`
        JOIN `meal`
        ON `order`.`meal_id`=`meal`.`id`
        WHERE date="2022-09-01"
        GROUP BY `order`.`date`;
        */

        $ma = 'SUM(`meal`.`price`) AS `meal_sum`';

        $total = Order::find()
            ->select($ma)
            ->leftJoin('`meal`','`order`.`meal_id`=`meal`.`id`')
            ->where(['date' => $date])
            ->groupBy("`order`.`date`")
            ->asArray()
            ->one();
        if($total != null) {
            $total = $total["meal_sum"];
        } else {
            $total = 0;
        }

        return $this->render('orders-on-date-for-provider', [
            'date' => $date,
            'kalata' => $kalata,
            'total' => $total,
        ]);
    }

    public function actionGetOrdersOnDateForWorker($date) {
        $kalara = [];
        /*
        SELECT `id`, `name` FROM `worker`;
        */
        $ma = '';
        $ma .= "`id`,`name`";
        $workers = Worker::find()
            ->select($ma)
            ->asArray()
            ->all();
        foreach($workers as $worker) {
    $kalasa = [];
    /*
    SELECT
    `meal`.`name` AS `meal_name`,
    COUNT(`order`.`meal_id`) AS `meal_amount`,
    `meal`.`price` AS `meal_price`,
    SUM(`meal`.`price`) AS `meal_sum`
    FROM `order`
    JOIN `meal`
    ON `order`.`meal_id`=`meal`.`id`
    WHERE date="2022-09-01"
    AND `order`.`worker_id`=1
    GROUP BY `order`.`meal_id`;
    */
    
    $ma = '';
    $ma .= "`meal`.`name` AS `meal_name`,";
    $ma .= "COUNT(`order`.`meal_id`) AS `meal_amount`,";
    $ma .= "`meal`.`price` AS `meal_price`,";
    $ma .= "SUM(`meal`.`price`) AS `meal_sum`";

    $kalata = Order::find()
        ->select($ma)
        ->leftJoin('`meal`','`order`.`meal_id`=`meal`.`id`')
        ->where(['date' => $date])
        ->andWhere(['worker_id' => $worker["id"]])
        ->groupBy("`order`.`meal_id`")
        ->asArray()
        ->all();


    /*
    SELECT
    SUM(`meal`.`price`) AS `meal_sum`
    FROM `order`
    JOIN `meal`
    ON `order`.`meal_id`=`meal`.`id`
    WHERE date="2022-09-01"
    AND `order`.`worker_id`=1
    GROUP BY `order`.`date`;
    */

    $ma = 'SUM(`meal`.`price`) AS `meal_sum`';

    $total = Order::find()
        ->select($ma)
        ->leftJoin('`meal`','`order`.`meal_id`=`meal`.`id`')
        ->where(['date' => $date])
        ->andWhere(['worker_id' => $worker["id"]])
        ->groupBy("`order`.`date`")
        ->asArray()
        ->one();
    if($total != null) {
        $total = $total["meal_sum"];
    } else {
        $total = 0;
    }

    $kalasa["worker_name"] = $worker["name"];
    $kalasa["orders"] = $kalata;
    $kalasa["total"] = $total;
    //
    $kalara[] = $kalasa;
    //
        }

        return $this->render('orders-on-date-for-worker', [
            'date' => $date,
            'kalara' => $kalara,
        ]);
    }
}
