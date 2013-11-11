<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
   public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
                    'cocoCod' => array(
                'class' => 'CocoCodAction',
            ),
		);
	}

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('application.views.site.error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {

        $model = new ContactModel;
        
         if (isset($_POST['ajax']) && $_POST['ajax'] === 'commentform') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    
        if (isset($_POST['ContactModel'])) {
            $model->attributes = $_POST['ContactModel'];
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->save();
                Yii::app()->user->setFlash('success',"Message Send!");
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
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
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    
    /**
     * Action Register
     */
    public function actionRegister(){
            $userModel = new UserModel;
            $post = Yii::app()->request->getPost('UserModel');
            
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'commentform') {
            echo CActiveForm::validate($userModel);
            Yii::app()->end();
            }
                if(!empty($post)){
                    $userModel->attributes = Yii::app()->request->getPost('UserModel');
                    if($userModel->save()){
                        Yii::app()->user->setFlash('register','Thank you for registration.');
                        $this->refresh();
                    }
                }
            $this->render('register',array(
                'model' => $userModel,
            ));
        }
        
        public function actionBlog(){
            $this->render('blog');
        }
        
    public function actionPage(){
        $title = Yii::app()->request->getParam('link');
        $this->layout='main';
        $page = PageModel::model()->findByAttributes(array('link' => $title));
        if(empty($page)) {
           throw new CHttpException(404,'The specified post cannot be found.');
        }
            switch ($page->template) {
            case "1column":
                $this->layout='1columnPage';
                $class = 'full_width';
                break;
            case "2columns with right sidebar":
                $this->layout='2columnRight';
                $class = 'cont';
                break;
        }
        $this->render('dynamicPage',array(
            'page'  => $page,
            'class' => $class    
        ));
    }
    

}