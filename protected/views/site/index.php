<?php 
$this->pageTitle=Yii::app()->name;
$totals = 10 ;
$td_num = 3;
$tr_num = floor($totals / $td_num);
?>
<table>
<?php for($i = 0;$i < $tr_num;$i++){?>
<tr>
<?php for($j = 0;$j < $td_num;$j++){?>
<td>
<div id = "activity-bar">
	<img id = "activity-img" src = ""/>
	<div id = "activity-font">
		<div id = "activity-title"><a href ="#">activity name</a></div>
		<div>
			<p>时间:2011-12-42 15:20</p>
			<p>地点:zztztt</p>
			<p>1000人参加</p>
			<p>类型:讲座,旅游,聚会</p>
		</div>
	</div>
</div>
</td>
<?php } ?>
</tr>
<?php } ?>
<tr>
<?php
$last = $totals - $tr_num * $td_num;
for($i = 0 ; $i < $last; $i++){?>
<td>
<div id = "activity-bar">
        <img id = "activity-img" src = ""/>
        <div id = "activity-font">
                <div id = "activity-title"><a href ="#">activity name</a></div>
                <div>
                        <p>时间:2011-12-42 15:20</p>
                        <p>地点:zztztt</p>
                        <p>1000人参加</p>
			<p>类型:讲座,旅游,聚会</p>
                </div>
        </div>
</div>
</td>
<?php }?>
</tr>
</table>
<div>
</div>
