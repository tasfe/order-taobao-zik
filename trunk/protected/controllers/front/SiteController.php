<?php

class SiteController extends Controller
{
    public $layout = 'column2';
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        if (Yii::app()->user->isGuest) {

            $this->redirect(array('site/login'));
        } else {
            $model = new OrderData('search');
            $model->unsetAttributes(); // clear any default values
            if (isset($_GET['OrderData']))
                $model->attributes = $_GET['OrderData'];

            $this->render('index', array(
                'model' => $model,
            ));


        }




    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                    "Reply-To: {$model->email}\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model = new LoginForm;

        // if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            $user = new User();
//            $user->email = $model->
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionRegister()
    {
        $model = new RegForm();

        if (isset($_POST['RegForm'])) {
//            var_dump($_POST['RegForm']);
//            die();
            $model->attributes = $_POST['RegForm'];
            $user = new User();
            $user_info = new UserInfo();
            $time = date("Y-m-d H:i:s");
            $user_value_key = str_replace(' ', '', date("Ymd His"));


            $user->email = $model->email;
            $user->name = $model->name;
            $user->password = $model->password;
            $user->reg_at = $time;
            $user->status = 0;
            $user->user_key = $user_value_key;

            $user_info->acc_bank = $model->acc_bank;
            $user_info->address = $model->address;
            $user_info->city = $model->city;
            $user_info->cmt = $model->cmt;
            $user_info->facebook_link = $model->facebook_link;
            $user_info->phone = $model->phone;
            $user_info->acc_bank = $model->acc_bank;
            $user_info->name_bank = $model->name_bank;
            $user_info->skype = $model->skype;

            $user_info->website = $model->website;
            $user_info->yahoo = $model->yahoo;

            $user_info->dob = $model->dob;
            $dob = DateTime::createFromFormat('m/d/Y', $user_info->dob)->format('Y-m-d');
            $user_info->dob = $dob;

            $user_info->user_key = $user_value_key;

            $model->validate();
            if (User::model()->exists('email=:email', array(':email' => $model->email))) {
                $model->addError('email', 'Email này đã được đăng ký.');
            }

            if (!$model->hasErrors()) {
                if ($user->save() && $user_info->save()) {
                    $this->redirect('site/login');
                }
            }

//            echo '<pre>';
//            var_dump($model);
//            echo '</pre>';
//            die();


        }


        $this->render('register', array('model' => $model));
    }
}