
	var proindex = 0;
	// var proindex = 0;
	var count = 0; 
	var iterate = 0;
	document.querySelectorAll(".top-seller-profile")[proindex].classList.add("scale-profile");
	function profileScroll(){
		iterate = iterate+1;
		count = (count-175)+iterate;
		$(".postad1").addClass("postad-ani");
		
		// $("#postani-icon").addClass("posticon");
		
		function postadAni(){
			// // $(".postad1").addClass("postads");
			// document.querySelector(".posticon1").style.padding='0px';
			// document.querySelector(".postad1").style.flexDirection='row';
			// $("#postani-icon").addClass("posticon");
			// $(".postad1").addClass("postads");
			// $("#main-cont").addClass("posttitle");

			$("#main-cont").addClass("ani-transfrom");
			document.querySelector(".postads").style.display='flex';
			
		}

		postadAni();
		
		if(proindex <= document.querySelectorAll(".top-seller-profile").length-1){
			// document.querySelector(".top-seller-cont").scrollLeft=document.querySelector(".top-seller-cont").scrollLeft + 190;
			document.querySelectorAll(".top-seller-profile")[0].style.marginLeft=count+'px';

			// if(proindex == document.querySelectorAll(".top-seller-profile").length-1){
			
			// document.querySelectorAll(".top-seller-profile")[0].style.marginLeft=count;
			// document.querySelectorAll(".top-seller-profile")[proindex].style.transform='translateX(-40px)';
			//}


		document.querySelectorAll(".top-seller-profile")[proindex].classList.remove("scale-profile");
		proindex++;
		document.querySelector(".dir-left").style.display='block';
		document.querySelector(".dir-left").style.opacity='1';

		document.querySelectorAll(".top-seller-profile")[proindex].classList.add("scale-profile");
		if(proindex == document.querySelectorAll(".top-seller-profile").length-1){
			document.querySelector(".dir-right").style.display='none';
			// count-10;
		}
		
		}
		
		
	}


	function profileScrollRight(){
		iterate = iterate-1.1;
		count = (count+175)-iterate;
		console.log(count);
		if(proindex == document.querySelectorAll(".top-seller-profile").length-1){
			// document.querySelectorAll(".top-seller-profile")[0].style.marginLeft=count+'px';
			// document.querySelectorAll(".top-seller-profile")[proindex].style.transform='translateX(30px)';
			document.querySelectorAll(".top-seller-profile")[proindex].classList.remove("scale-profile");
			document.querySelector(".dir-right").style.display='block';
		}




		if(proindex > 0){
			document.querySelectorAll(".top-seller-profile")[0].style.marginLeft=count+'px';

			// document.querySelector(".top-seller-cont").append(document.querySelector(".top-seller-profile"));
				proindex--;
			document.querySelectorAll(".top-seller-profile")[proindex].classList.add("scale-profile");
				proindex++;
			document.querySelectorAll(".top-seller-profile")[proindex].classList.remove("scale-profile");
				proindex--;
				console.log(proindex);
			
		}
		if (proindex==0) {
			document.querySelector(".dir-left").style.display='none';
		}
	}

// This is the scroll script

	// setInterval(function(){
	// 		$(".clonediv").clone().appendTo(".hotdealscrollcont");
	// 	},20000)
	// 	 setInterval(function(){
	// 	 	document.querySelector(".hotdealscrollcont").scrollLeft =
	// 	 	document.querySelector(".hotdealscrollcont").scrollLeft + 1
		 	

		 

 // 			},15)


 // filter function
 function filterLocation(a,b,c,d){
 	a = '.'+a;
 	b = '.'+b;
 	c = '.'+c;
 	d = '#'+d;
 	$(a).toggleClass("hide");
 	$(b).toggleClass("hide");
 	$(c).toggleClass("hide");
 	var x = document.querySelector(a);
 	if ($(a).hasClass("hide")){
 		$("#loc").attr('class','fa-solid fa-angle-up');
 		$(d).attr("src","../img/checkbox2.png");
 	}else{
 		$("#loc").attr('class','fa-solid fa-angle-down');
 		$(d).attr("src","../img/checkbox.png");
 	}
 	
 }
