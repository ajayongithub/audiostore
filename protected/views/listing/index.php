<?php
/* @var $this SandboxController */

?>
<h1>Listing</h1>
<div class="span6">
<?php
/* $this->widget(
    'CTreeView',
    array('url' => array('ajaxFillTree'))
); */
if(isset($dataTree))
$this->widget('CTreeView',array(
		'data'=>$dataTree,
		'animated'=>'fast', //quick animation
		'collapsed'=>'false',//remember must giving quote for boolean value in here
		'htmlOptions'=>array(
	//			'class'=>'treeview-red',//there are some classes that ready to use
		),
));
else{ 
	echo "Data Tree is not set";
}
?></div>

<div class="span5" >
<audio id="prePlayer" controls >
  <source src="<?php //echo Yii::app()->baseUrl."/tobereviewed/".$filePath?>" type="audio/mpeg"/>
Your browser does not support the audio element.
</audio>
</div>

<?php  $cs = Yii::app()->getClientScript();  
$cs->registerScript(
  'my-player-script',
  '
	$(".preview").on("click",function(){
		console.log(($(this).attr("url")));
		$("#prePlayer").attr("src",$(this).attr("url")	) ;
		//$("#prePlayer").play();
	});	
	
	',
  CClientScript::POS_END
);
?>
