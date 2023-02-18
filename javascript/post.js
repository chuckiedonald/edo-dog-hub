function hidecat(){
	$(".scnd-sec").hide();
}
function showdog(x){
	x = "."+x;
	$(x).show();
}

function showSelectCat(){
	$(".cat-text").show();
	$(".cat-select-main").show();
}

function addcat(x){
	x = "."+x;
	a = $(x).html();
	$(".cat-val").html(a);
	$(".cat-val").css('color','black');
	$(".cat-select-main").hide();

	if($(".cat-val").html()!='Category*'){
		$("#warning-post").hide();
		$(".uploadbtn1").hide();
		$(".post").hide();
		$(".form-cont").show();
		if(($(".cat-val").html()!='Dog')){
			$(".dogform-cont-main").addClass('hide');
		}
	}
}

function gender(x,a){
	x = "."+x;
	a = "."+a;
	$(x).addClass("gender-title2");
	$(a).show();
}

function youtube(a,x){
	x =  "."+x;
	a =  "."+a;
	$(a).addClass("youtube-title2");
	$(x).focus();
	
}

function breedprompt(){
	var x = prompt("Enter name of breed: ");
}

function descrptCount(){
	x = $(".descpt1").val();
	i = x.length;
	$(".count").html(i);
}