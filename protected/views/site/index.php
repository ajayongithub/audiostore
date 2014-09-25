<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php if( Yii::app()->user->isGuest){
 echo '<p>Please click Login above and enter the username and password provided by the administrator.</p>';
}else{

echo '<p>Please click on \'Listen\' above to start review.</p>';
} 
?>
