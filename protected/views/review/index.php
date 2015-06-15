<?php
/* @var $this ReviewController */

$this->breadcrumbs=array(
	'Review',
);
?>
	<h1>Files to be reviewed by <?php echo Yii::app()->user->data()->profile->firstname ?></h1>
	<table>
	<thead>
	<th>Set Name</th>
	<th>Tape No </th>
	<th>Tape File </th>
	<th>Status </th>
	<th>Listen</th>
	</thead>
	<tbody>
	<?php
		//print_r($toBeReviewed);
//		
		
		foreach($toBeReviewed as $fileId){
			$tape_file = TapeFile::model()->findByPk($fileId->tape_file_id);
			echo "<tr>";
			echo "<td> Tape Set: ".$tape_file->set->set_name."</td>";
			echo "<td> Tape No: ".$tape_file->tape_no."</td>";
			echo "<td> ".basename($tape_file->file_detail)."</td>";
			echo "<td> ".$fileId->status." </td>";
			echo '<td><a href="'.Yii::app()->createUrl("/review/review?id=".$tape_file->id.'&reviewId='.$fileId->id).'">Listen</a></td>';
			echo "</tr>";
				
		}
	?>
	</tbody>
	</table>
<p>
</p>
