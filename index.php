<!DOCTYPE html>
<!--

class names that are bound to categoryList.js

.catcont
.subcont
.parent
.child
.cat
.sub

should be changed also in categoryList.js file as soon as they change in this file.

-

also "checkboxClick" function name is bound to the categoryList.js file.

-->
<html>
<head>
	<title>categoryList.js Demo</title>
	<link rel="stylesheet" type="text/css" href="css/core.css"/>
</head>
<body>
<form action="#">
	<div class="catcont" id="cat1cont">
		<div class="cat"><input class="parent" onclick="checkboxClick(this.id)" type="checkbox" id="cat1" name="cat1"/><label for="cat1" style="display:inline-block;">CATEGORY 1</label></div>
		<div class="subcont" id="cat1subcont">
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat1sub1" name="cat1sub1"/><label for="cat1sub1"style="display:inline-block;">CATEGORY 1 - SUB 1</label></div>
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat1sub2" name="cat1sub2"/><label for="cat1sub2"style="display:inline-block;">CATEGORY 1 - SUB 2</label></div>
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat1sub3" name="cat1sub3"/><label for="cat1sub3"style="display:inline-block;">CATEGORY 1 - SUB 3</label></div>
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat1sub4" name="cat1sub4"/><label for="cat1sub4"style="display:inline-block;">CATEGORY 1 - SUB 4</label></div>
		</div>
	</div>
	<div class="catcont" id="cat2cont">
		<div class="cat"><input class="parent" onclick="checkboxClick(this.id)" type="checkbox" id="cat2" name="cat2"/><label for="cat2" style="display:inline-block;">CATEGORY 2</label></div>
		<div class="subcont" id="cat2subcont">
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat2sub1" name="cat2sub1"/><label for="cat2sub1"style="display:inline-block;">CATEGORY 2 - SUB 1</label></div>
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat2sub2" name="cat2sub2"/><label for="cat2sub2"style="display:inline-block;">CATEGORY 2 - SUB 2</label></div>
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat2sub3" name="cat2sub3"/><label for="cat2sub3"style="display:inline-block;">CATEGORY 2 - SUB 3</label></div>
		</div>
	</div>
	<div class="catcont" id="cat3cont">
		<div class="cat"><input class="parent" onclick="checkboxClick(this.id)" type="checkbox" id="cat3" name="cat3"/><label for="cat3" style="display:inline-block;">CATEGORY 3</label></div>
		<div class="subcont" id="cat3subcont">
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat3sub1" name="cat3sub1"/><label for="cat3sub1"style="display:inline-block;">CATEGORY 3 - SUB 1</label></div>
			<div class="sub" style="margin-left:20px;"><input class="child" onclick="checkboxClick(this.id)" type="checkbox" id="cat3sub2" name="cat3sub2"/><label for="cat3sub2"style="display:inline-block;">CATEGORY 3 - SUB 2</label></div>
		</div>
	</div>
</form>
</body>
<?php

	include("javasrc.php");

?>
</html>