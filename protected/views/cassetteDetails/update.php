<?php
/** @var CassetteDetailsController $this */
/** @var CassetteDetails $model */
$this->breadcrumbs=array(
	$model->label(2) => array('index'),
	Yii::t('app', $model->id) => array('view', 'id'=>$model->id),
	Yii::t('AweCrud.app', 'Update'),
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . CassetteDetails::label(2), 'icon' => 'list', 'url' => array('index')),
	//array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CassetteDetails::label(), 'icon' => 'plus', 'url' => array('create')),
	//array('label' => Yii::t('AweCrud.app', 'View'), 'icon' => 'eye-open', 'url'=>array('view', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
	array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'Update') . ' ' . CassetteDetails::label(); ?> <?php echo CHtml::encode($model) ?></legend>
    <?php echo $this->renderPartial('_form',array('model' => $model)); ?>
    
    
</fieldset>
<div>
<h3>Upload Side A</h3>
<?php

 $this->widget('ext.EAjaxUpload.EAjaxUpload',
 array(
    'id'=>'uploadFileA',
    'config'=>array(
    'action'=>Yii::app()->createUrl('site/upload'),
    'allowedExtensions'=>array("mp3","mp4","wav","m4ua","m4a",),//array("jpg","jpeg","gif","exe","mov" and etc...
    'sizeLimit'=>1000*1024*1024,// maximum file size in bytes
    'minSizeLimit'=>1*1024,
    'auto'=>true,
    'multiple' => true,
    'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
    'messages'=>array(
    'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
	  'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
	  'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
	  'emptyError'=>"{file} is empty, please select files again without it.",
	  'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
	 ),
	'showMessage'=>"js:function(message){ alert(message); }"
	)
													  
	 ));
?>
</div>
<p>
<div>
<h3>Upload Side B</h3>
<?php

 $this->widget('ext.EAjaxUpload.EAjaxUpload',
 array(
    'id'=>'uploadFileB',
    'config'=>array(
    'action'=>Yii::app()->createUrl('site/upload'),
    'allowedExtensions'=>array("mp3","mp4","wav","m4ua","m4a",),//array("jpg","jpeg","gif","exe","mov" and etc...
    'sizeLimit'=>1000*1024*1024,// maximum file size in bytes
    'minSizeLimit'=>1*1024,
    'auto'=>true,
    'multiple' => true,
    'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
    'messages'=>array(
    'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
	  'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
	  'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
	  'emptyError'=>"{file} is empty, please select files again without it.",
	  'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
	 ),
	'showMessage'=>"js:function(message){ alert(message); }"
	)
													  
	 ));
?>
</div>