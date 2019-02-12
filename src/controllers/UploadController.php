<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace wodrow\yii2wwredactor\controllers;

use yii\web\Response;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class UploadController extends \yii\web\Controller
{

    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON
                ],
            ]
        ];
    }

    public function actions()
    {
        return [
            'file' => 'wodrow\yii2wwredactor\actions\FileUploadAction',
            'image' => 'wodrow\yii2wwredactor\actions\ImageUploadAction',
            'image-json' => 'wodrow\yii2wwredactor\actions\ImageManagerJsonAction',
            'file-json' => 'wodrow\yii2wwredactor\actions\FileManagerJsonAction',
        ];
    }

}
