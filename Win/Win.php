<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>仿QQ音乐抽奖转盘</title>

<style type="text/css">
* { margin: 0; padding: 0;}
body { font-family: "Microsoft Yahei"; background-color: #15734b;}
h1 { width: 900px; margin: 40px auto; font: 32px "Microsoft Yahei"; text-align: center; color: #fff;}
.dowebok { width: 894px; height: 563px; margin: 0 auto; background-image: url(images/s3_bg.png);}
.rotary { position: relative; float: left; width: 504px; height: 504px; margin: 20px 0 0 20px; background-image: url(images/g.png);}
.hand { position: absolute; left: 144px; top: 144px; width: 216px; height: 216px; cursor: pointer;}
.list { float: right; width: 300px; padding-top: 44px;}
.list strong { position: relative; left: -45px; display: block; height: 65px; line-height: 65px; font-size: 32px; color: #ffe63c;}
.list h4 { height: 45px; margin: 30px 0 10px; line-height: 45px; font-size: 24px; color: #fff;}
.list ul { line-height: 36px; list-style-type: none; font-size: 12px; color: #fff;}
.list span { display: inline-block; width: 94px;}
</style>

</head>

<body>
<h1>Instant Win</h1>
<div class="dowebok">
	<div class="rotary">
		<img class="hand" src="images/z.png" alt="">
	</div>
	<div class="list">
		<strong>100%-Win</strong>
		<h4>Game</h4>
		<ul>
			<?php print_r($_POST); ?>
			<li>
				<span>Total</span> <span>200</span>
			</li>
			<li>
				<span>Wins</span> <span>69</span>
			</li>
			<li>
				<span>Remains</span> <span>131</span>
			</li>
		</ul>
	</div>
</div>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.rotate.min.js"></script>
<script>


$(function(){
		
	var rotateFunc = function(awards,angle,text){
		$hand.stopRotate();
		$hand.rotate({
			angle: 0,
			duration: 4000,
			animateTo: angle + 360 * 900
		});
	};
	var $hand = $('.hand');
	data = <?php 
	$data = mt_rand(1, 12);
	echo $data; 
	?>;
	<?php 
	if(6 < $data){
		$msg='ewogICJ0eXBlIjogImJ1YmJsZSIsCiAgImhlcm8iOiB7CiAgICAidHlwZSI6ICJpbWFnZSIsCiAgICAidXJsIjogImh0dHBzOi8vbGluZWJvdC53LWhlYWRzLmNvbS9XaW4vaW1hZ2VzL2cucG5nIiwKICAgICJzaXplIjogImZ1bGwiLAogICAgImFzcGVjdFJhdGlvIjogIjIwOjEzIiwKICAgICJhc3BlY3RNb2RlIjogImNvdmVyIiwKICAgICJhY3Rpb24iOiB7CiAgICAgICJ0eXBlIjogInVyaSIsCiAgICAgICJ1cmkiOiAiaHR0cDovL2xpbmVjb3JwLmNvbS8iCiAgICB9CiAgfSwKICAiYm9keSI6IHsKICAgICJ0eXBlIjogImJveCIsCiAgICAibGF5b3V0IjogInZlcnRpY2FsIiwKICAgICJjb250ZW50cyI6IFsKICAgICAgewogICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICJ0ZXh0IjogIueEoeaWmeaYoOeUu+ODgeOCseODg+ODiOaKvemBuCIsCiAgICAgICAgIndlaWdodCI6ICJib2xkIiwKICAgICAgICAic2l6ZSI6ICJ4bCIKICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ29sZF9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogImljb24iLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJ1cmwiOiAiaHR0cHM6Ly9zY2RuLmxpbmUtYXBwcy5jb20vbi9jaGFubmVsX2RldmNlbnRlci9pbWcvZngvcmV2aWV3X2dvbGRfc3Rhcl8yOC5wbmciCiAgICAgICAgICB9LAogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ3JheV9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAidGV4dCI6ICI0LjAiLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJjb2xvciI6ICIjOTk5OTk5IiwKICAgICAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgICAgICJmbGV4IjogMAogICAgICAgICAgfQogICAgICAgIF0KICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJ2ZXJ0aWNhbCIsCiAgICAgICAgIm1hcmdpbiI6ICJsZyIsCiAgICAgICAgInNwYWNpbmciOiAic20iLAogICAgICAgICJjb250ZW50cyI6IFsKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiYm94IiwKICAgICAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgICAgICJzcGFjaW5nIjogInNtIiwKICAgICAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAgICAgInRleHQiOiAiTnVtYmVyIiwKICAgICAgICAgICAgICAgICJjb2xvciI6ICIjYWFhYWFhIiwKICAgICAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgICAgICJmbGV4IjogMgogICAgICAgICAgICAgIH0sCiAgICAgICAgICAgICAgewogICAgICAgICAgICAgICAgInR5cGUiOiAidGV4dCIsCiAgICAgICAgICAgICAgICAidGV4dCI6ICIzQUJFLTE0RjgtOUExRi0zRzFUIiwKICAgICAgICAgICAgICAgICJ3cmFwIjogdHJ1ZSwKICAgICAgICAgICAgICAgICJjb2xvciI6ICIjNjY2NjY2IiwKICAgICAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgICAgICJmbGV4IjogNQogICAgICAgICAgICAgIH0KICAgICAgICAgICAgXQogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiYm94IiwKICAgICAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgICAgICJzcGFjaW5nIjogInNtIiwKICAgICAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAgICAgInRleHQiOiAi44GK44KB44Gn44Go44GG44GU44GW44GE44G+44GZISIsCiAgICAgICAgICAgICAgICAid3JhcCI6IHRydWUsCiAgICAgICAgICAgICAgICAiY29sb3IiOiAiIzY2NjY2NiIsCiAgICAgICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICAgICAiZmxleCI6IDUKICAgICAgICAgICAgICB9CiAgICAgICAgICAgIF0KICAgICAgICAgIH0KICAgICAgICBdCiAgICAgIH0KICAgIF0KICB9Cn0=';
		}
	else{
		$msg='ewogICJ0eXBlIjogImJ1YmJsZSIsCiAgImhlcm8iOiB7CiAgICAidHlwZSI6ICJpbWFnZSIsCiAgICAidXJsIjogImh0dHBzOi8vbGluZWJvdC53LWhlYWRzLmNvbS9XaW4vaW1hZ2VzL2cucG5nIiwKICAgICJzaXplIjogImZ1bGwiLAogICAgImFzcGVjdFJhdGlvIjogIjIwOjEzIiwKICAgICJhc3BlY3RNb2RlIjogImNvdmVyIiwKICAgICJhY3Rpb24iOiB7CiAgICAgICJ0eXBlIjogInVyaSIsCiAgICAgICJ1cmkiOiAiaHR0cDovL2xpbmVjb3JwLmNvbS8iCiAgICB9CiAgfSwKICAiYm9keSI6IHsKICAgICJ0eXBlIjogImJveCIsCiAgICAibGF5b3V0IjogInZlcnRpY2FsIiwKICAgICJjb250ZW50cyI6IFsKICAgICAgewogICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICJ0ZXh0IjogIueEoeaWmeaYoOeUu+ODgeOCseODg+ODiOaKvemBuCIsCiAgICAgICAgIndlaWdodCI6ICJib2xkIiwKICAgICAgICAic2l6ZSI6ICJ4bCIKICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ29sZF9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogImljb24iLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJ1cmwiOiAiaHR0cHM6Ly9zY2RuLmxpbmUtYXBwcy5jb20vbi9jaGFubmVsX2RldmNlbnRlci9pbWcvZngvcmV2aWV3X2dvbGRfc3Rhcl8yOC5wbmciCiAgICAgICAgICB9LAogICAgICAgICAgewogICAgICAgICAgICAidHlwZSI6ICJpY29uIiwKICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAidXJsIjogImh0dHBzOi8vc2Nkbi5saW5lLWFwcHMuY29tL24vY2hhbm5lbF9kZXZjZW50ZXIvaW1nL2Z4L3Jldmlld19nb2xkX3N0YXJfMjgucG5nIgogICAgICAgICAgfSwKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiaWNvbiIsCiAgICAgICAgICAgICJzaXplIjogInNtIiwKICAgICAgICAgICAgInVybCI6ICJodHRwczovL3NjZG4ubGluZS1hcHBzLmNvbS9uL2NoYW5uZWxfZGV2Y2VudGVyL2ltZy9meC9yZXZpZXdfZ3JheV9zdGFyXzI4LnBuZyIKICAgICAgICAgIH0sCiAgICAgICAgICB7CiAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAidGV4dCI6ICI0LjAiLAogICAgICAgICAgICAic2l6ZSI6ICJzbSIsCiAgICAgICAgICAgICJjb2xvciI6ICIjOTk5OTk5IiwKICAgICAgICAgICAgIm1hcmdpbiI6ICJtZCIsCiAgICAgICAgICAgICJmbGV4IjogMAogICAgICAgICAgfQogICAgICAgIF0KICAgICAgfSwKICAgICAgewogICAgICAgICJ0eXBlIjogImJveCIsCiAgICAgICAgImxheW91dCI6ICJ2ZXJ0aWNhbCIsCiAgICAgICAgIm1hcmdpbiI6ICJsZyIsCiAgICAgICAgInNwYWNpbmciOiAic20iLAogICAgICAgICJjb250ZW50cyI6IFsKICAgICAgICAgIHsKICAgICAgICAgICAgInR5cGUiOiAiYm94IiwKICAgICAgICAgICAgImxheW91dCI6ICJiYXNlbGluZSIsCiAgICAgICAgICAgICJzcGFjaW5nIjogInNtIiwKICAgICAgICAgICAgImNvbnRlbnRzIjogWwogICAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgICJ0eXBlIjogInRleHQiLAogICAgICAgICAgICAgICAgInRleHQiOiAi5qyh44Gu5qmf5Lya44GrISEiLAogICAgICAgICAgICAgICAgIndyYXAiOiB0cnVlLAogICAgICAgICAgICAgICAgImNvbG9yIjogIiM2NjY2NjYiLAogICAgICAgICAgICAgICAgInNpemUiOiAic20iLAogICAgICAgICAgICAgICAgImZsZXgiOiA1CiAgICAgICAgICAgICAgfQogICAgICAgICAgICBdCiAgICAgICAgICB9CiAgICAgICAgXQogICAgICB9CiAgICBdCiAgfQp9';
		}
	?>
	setTimeout(function() {
		$.ajax({
		url:'../send_broadcast.php',
		async:true,// false 일 경우 동기 요청으로 변경
		type:'POST',
		data:{
			msg_content:
			'<?php echo $msg;?>'
		,// 전송할 데이터
		dataType:'text',// xml, json, script, html
		beforeSend:function(jqXHR) {},// 서버 요청 전 호출 되는 함수 return false; 일 경우 요청 중단
		success:function(jqXHR) {},// 요청 완료 시
		error:function(jqXHR) {},// 요청 실패.
		complete:function(jqXHR) {}// 요청의 실패, 성공과 상관 없이 완료 될 경우 호출
	}});
	}, 4000);
	switch(data){
			case 1:
				rotateFunc(1,16,'Number 1');
				break;
			case 2:
				rotateFunc(2,47,'Number 2');
				break;
			case 3:
				rotateFunc(3,76,'Numeber 3');
				break;
			case 4:
				rotateFunc(4,106,'Numeber 4');
				break;
			case 5:
				rotateFunc(5,135,'Numeber 5');
				break;
			case 6:
				rotateFunc(6,164,'Numeber 6');
				break;
			case 7:
				rotateFunc(7,193,'Numeber 7');
				break;
			case 8:
				rotateFunc(8,223,'Numeber 8');
				break;
			case 9:
				rotateFunc(9,252,'Numeber 9');
				break;
			case 10:
				rotateFunc(10,284,'Numeber 10');
				break;
			case 11:
				rotateFunc(11,314,'Numeber 11');
				break;
			case 12:
				rotateFunc(12,345,'Numeber 12');
				break;
		}

	

});
</script>

</body>
</html>