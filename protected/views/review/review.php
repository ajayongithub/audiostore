<?php
/* @var $this ReviewController */
//$filePath = $prefix.'_'.basename($fileDetails->file_detail) ;
$filePath = '/uploads/'.basename($fileDetails->file_detail) ;
?>
	<h2>Tape No: <?php echo $fileDetails->tape_no?><br>Set: <?php echo $fileDetails->set->set_name?> </h2>
	<h4>File Name: <?php echo basename($fileDetails->file_detail);?></h4>
	<?php echo '<h4>Spl Instruction for review :</h4>'.$fileDetails->remarks;?><br/>
	<note>In order to give feedback you can either listen to the file below or 
	     you can <a href="<?php echo Yii::app()->baseUrl.$fileDetails->file_detail?>">download</a> the file to hear it on another device.</note>
 
	     <br/>
	
	<br/><br/>
	<div class="span12">
<audio controls class="span11" >
<!--  <source src="horse.ogg" type="audio/ogg">-->
  <!-- <source src="<?php echo "/audiostore/uploads/".basename($fileDetails->file_detail)?>" type="audio/ogg"/>-->
  <!--<source src="<?php echo "/audiostore/uploads/".basename($fileDetails->file_detail)?>" type="audio/mpeg"/>-->
 <!-- <source src="<?php echo Yii::app()->baseUrl."/tobereviewed/".$filePath?>" type="audio/mpeg"/>-->
 <source src="<?php echo Yii::app()->baseUrl.$fileDetails->file_detail?>" type="audio/mpeg"/>-->
Your browser does not support the audio element.
</audio>
</div>
<br/><br/><br/>
<div id="completeInst" align="center">
<p>After you have completed the review,<br/> Please click <input type="button" id="completeBtn" class="btn btn-primary" value="Review Completed" /></p>
<p><em>Note:After clicking the button you will be unable to add further comments for it.</em></p> 
</div>
<h4>Feedback:</h4>
<table>
<thead>
<th>Problem Category*</th><th>Starts at*</th><th>Ends at</th><th>Description of Problem*</th><th></th>
<tr><td>	<select id="problemType">
	<option>Unable to hear recording</option>
	<option>Audio Clarity</option>
	<option>Volume</option>
	<option>Audio Break</option>
	<option>Only Left or Only Right Audio</option>
	<option>Disturbance</option>
	<option>Content Mismatch</option>
	<option>Other</option>
	</select>
</td>
<td>
<select id="startHr" class="span1">
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
</select>:
<select id="startMin" class="span1">
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
</select>:
<select id="startSec" class="span1">
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
</select>
<br/><h5>hours:minutes:seconds</h5></td>
<td><select id="endHr"class="span1">
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
</select>:
<select id="endMin" class="span1">
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
</select>:
<select id="endSec" class="span1">
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
</select><br/><h5>hours:minutes:seconds</h5></td>
<td><textarea id="description" rows="3" cols="40"></textarea></td>
<td>	<?php echo CHtml::button('Add Feedback',array(
				'id'=>'addFeedback',
				'ajax' => array(
					'type'=>'POST',
					'url'=>CController::createUrl("reviewFeedback/create"),
					'update'=>'#returnSet',
					'data'=>array('ReviewFeedback[problem_type]'=>'js:$("#problemType option:selected").val()',
									'ReviewFeedback[description]'=>'js:$("#description").val()',
									'ReviewFeedback[start_time]'=>'js:$("#startHr option:selected").val()+":"+$("#startMin option:selected").val()+":"+$("#startSec option:selected").val()',
									'ReviewFeedback[end_time]'=>'js:$("#endHr option:selected").val()+":"+$("#endMin option:selected").val()+":"+$("#endSec option:selected").val()',
									'ReviewFeedback[tape_reviewer_id]'=>$prefix									

								),
					
					'success'=>'function(data){	            $("#returnSet").html(data);		alert("Your feedback has been added to the list below.");}'
					)
			));?></td>
</tr>
</thead>
</table>


<div id="returnSet">
</div>

<?php  $cs = Yii::app()->getClientScript();  
$cs->registerCoreScript('jquery');
$cs->registerScript(
		'jquery-script-1',
		'$(document).ready(function () {
			
	if("Review Completed".localeCompare("'.$status.'")==0){
				$("#completeInst").hide();
				$("#addFeedback").hide();					
			}

    $.ajax({
        url: "'.Yii::app()->baseUrl.'/reviewFeedback/postCreate'.'",
        data: {
            "ReviewFeedback[tape_reviewer_id]": "'.$prefix.'" 
        },
        type: "POST",
        dataType: "html",
        success: function (data) {
//            var result = $("#returnSet").append(data).find("#showresults").html();
            $("#returnSet").html(data);
 
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$("#showresults").slideDown("slow")
        }
    	});
	});

$("#completeBtn").click(function(){
	var choice = confirm("Are you sure you want to mark the review as Completed");
	if(choice==false) return ;
			$.ajax({

		 url: "/audiostore/tapeReviewer/markComplete",
        data: {
            "TapeReviewer[id]": "'.$prefix.'" 
        },
        type: "POST",
        dataType: "json",
        success: function (data) {
//            var result = $("#returnSet").append(data).find("#showresults").html();
            //$("#returnSet").html(data);
			console.log(data);
			if(data.s==1){
        		alert("Your review has been marked completed!");
        		$("#addFeedback").hide();
				$("#completeInst").hide();
 			}else{
			alert("Unable to mark as completed! Please try after some time.");
			}
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$("#showresults").slideDown("slow")
        }
    	}
					);
});

',
		CClientScript::POS_END
);

?>

