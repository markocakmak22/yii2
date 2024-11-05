<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Yii Application!</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Users</h2>
                <p>Manage all users in the application. View, create, update, or delete user records as needed.</p>
                <p><?= Html::a('Go to Users', Url::to(['user-db/index']), ['class' => 'btn btn-outline-primary']) ?></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Posts</h2>
                <p>View and manage posts created by users. You can search, edit, and organize posts effectively.</p>
                <p><?= Html::a('Go to Posts', Url::to(['post/index']), ['class' => 'btn btn-outline-primary']) ?></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Comments</h2>
                <p>Access and manage comments related to posts. Review, update, or delete comments as necessary.</p>
                <p><?= Html::a('Go to Comments', Url::to(['comment/index']), ['class' => 'btn btn-outline-primary']) ?></p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h2>Developer Tools</h2>
                <p>Access Yii's Gii code generator for creating models, controllers, and more.</p>
                <p><?= Html::a('Open Gii', Url::to(['gii/']), ['class' => 'btn btn-outline-success btn-lg']) ?></p>
            </div>
        </div>

    </div>
</div>
