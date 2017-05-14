<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/15/2017
 * Time: 3:28 AM
 */

namespace app\controllers;
use Yii;
use app\controllers\AppController;
use yii\web\Response;

class PinneappleController extends AppController
{

    public function actionFeedback()
    {
        // ajax validation
        if (Yii::$app->request->isAjax) {

            $data = json_decode($_POST['feedback']);

            $htmlMail = '<h3>User Information </h3> Browser Version: ' . $data->browser->appVersion
                . '<p>User Agent: ' . $data->browser->userAgent.'</p>'
                . '<p>Platform: ' . $data->browser->platform.'</p><hr>'
                . '<p>URL: ' . $data->url .'</p>'
                . '<p>Note: ' . $data->note .'</p>';

            // Send email with image attached as HTML file
            Yii::$app->mailer->compose()
                ->setFrom('EMAIL_ADDRESS_HERE@gmail.com')
                ->setTo('SEND_TO_ADDRESS_HERE@gmail.com')
                ->setSubject('SUBJECT_GOES_HERE')
                ->setHtmlBody($htmlMail)
                ->attachContent('<!DOCTYPE html><html><body><img src="' . $data->img .'" /></body></html>', ['fileName' => 'screengrab.html', 'contentType' => 'text/html'])
                ->send();
            Yii::$app->response->format = Response::FORMAT_JSON;
            return $data;
        }
        return false;
    }
}