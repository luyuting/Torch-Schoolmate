<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2015/12/7
 * Time: 9:19
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>在校证明材料</title>
    <link href="css/meterial.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
    <form name="frm_material" action="#" method="post">
        姓&nbsp;&nbsp;&nbsp;名：<input name="name" type="text"><br/>
        辅导员：<input name="teacher" type="text"><br/>
        为了确认您的身份，请输入两个大学同学的姓名：
        <br/>
        <input id="schoolmate1" name="sch_mate_name1" type="text" >
        <input id="schoolmate2" name="sch_mate_name2" type="text" >
        <br/>
        材料详情：
        <textarea rows="10" placeholder="填写你所需要的材料，比如党员证明材料或学历证明材料……"></textarea>
        <br/>
        <div id="con_sub"><input id="submit" name="material_submit" type="submit" value="提      交"></div>
    </form>
</div>
</body>
</html>
