<?php
/* @var $this MediaBinderController */

$this->breadcrumbs=array(
	'Link Files',
);
?>
<h1><?php //echo $this->id . '/' . $this->action->id; ?></h1>

<?php 
//print_r($cfileDir->contents);
$cfHelper = new CFileHelper();
echo Yii::getPathOfAlias('uploadPath');
$uploadPath = Yii::getPathOfAlias('uploadPath');

$retResult = CFileHelper::findFiles($uploadPath,
								array('fileTypes'=>array('mp3'),)	);
//print_r($retResult);
foreach($retResult as $foundFile){
	//echo print_r($foundFile);
	echo '<p>File Found'.$foundFile.'<p/>';
}


?>