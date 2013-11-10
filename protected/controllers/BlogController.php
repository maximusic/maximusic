<?php

class BlogController extends Controller {

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
        
        $article = ArticleModel::model()->findAll();
        $category = CategoryModel::model()->findAll();
        
        $this->render('index',array(
                'article'   => $article,
                'category'  => $category
        ));
    }
    
    public function actionReadArticle(){
        $articleId = Yii::app()->request->getParam('articleid');
        $article = ArticleModel::model()->findByAttributes(array('id' => $articleId));
        $ViewComment = CommentModel::model()->findAllByAttributes(array('acrticleId' =>$articleId));
        $comment = new CommentModel('addComment');
        
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'commentform') {
            echo CActiveForm::validate($comment);
            Yii::app()->end();
        }   
        $post = Yii::app()->request->getPost('CommentModel');
            if(isset($post)) {
                
                $comment->attributes = $post;
                $comment->userIdAddComment = Yii::app()->user->getId();
                $comment->userIdReplyComment = CommentModel::ADMIN_COMMENT;
                $comment->acrticleId = $articleId;
                if($comment->save()) {
                    Yii::app()->user->setFlash('addComment','Your comment has been saved once it is verified, we will post it');
                    $this->refresh();
                }
                
            }
        $this->render('viewArticle',array(
            'article' => $article,
            'comment' => $ViewComment,
            'model'   => $comment
        ));
    }
    
    public function actionLike(){
        $like = new LikesModel;
        $userId = Yii::app()->request->getParam('userId');
        $articleId = Yii::app()->request->getParam('articleId');
        $userAlreadyLikes = LikesModel::model()->findByAttributes(array('articleId'=>$articleId,'userIdLike' =>$userId));
            if(!empty($articleId) && !empty($userId) && !empty($userAlreadyLikes)) {
                $userAlreadyLikes->delete();
            }
            else {
                $like->userIdLike = $userId;
                $like->articleId = $articleId;
                $like->save();
            }
                
        $this->redirect(Yii::app()->request->urlReferrer);
    }
    
}