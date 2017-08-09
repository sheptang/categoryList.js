/*

categoryList.js  Copyright (C) 2017  Anıl Yarkın Yücel - GNU General Public License v3.0

http://sheptang.com/software/categoryList/

*/

//function that runs after any checkbox is either checked or unchecked. "checkboxClick" should be changed if there are any changes in index.php file regarding the function.
function checkboxClick(elem){
	if($("#"+elem).hasClass("parent")){
		var boxType="cat";
		if($("input#"+elem).is(":checked")){
			$("input#"+elem).parents(".cat").parent().find("input[type='checkbox']").prop("checked",true);
		}else if($("input#"+elem).not(":checked")){
			$("input#"+elem).parents(".cat").parent().find("input[type='checkbox']").prop("checked",false);
		}
	}else if($("#"+elem).hasClass("child")){
		var boxType="sub";
		var subsCat=$("input#"+elem).parents(".subcont").siblings(".cat").find("input[type='checkbox']");
		if($("input#"+elem).is(":checked") && $(subsCat).not(":checked")){
			$(subsCat).prop("checked",true);
		}else if($("input#"+elem).not(":checked") && $(subsCat).is(":checked")){
			if($("input#"+elem).parents(".subcont").find(".child").filter(":checked").length==0){
				$(subsCat).prop("checked",false);
			}
		}
	}
}

//creates a log entry on console that describes how many main category checkboxes and sub-category checkboxes there are.
$(document).ready(function(){
	var catCount=$(".catcont").length;
	var subCount=$(".sub").length;
	console.log("Total main category: "+catCount);
	console.log("Total sub-category: "+subCount);
});