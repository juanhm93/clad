const mediumBp = matchMedia('(min-width: 1320px)');
const changeSize = mql => {
	if(mql.matches){

		
		document.getElementById('main-nav').style.width = '40%';
		document.getElementById('main-nav').style.marginBottom = '-16px'; 	
		document.getElementById('idioma').style.marginTop = '0px';
		document.getElementById('idioma').style.marginBottom = '0px';
	}else{
		
		document.getElementById('main-nav').style.width = '90%';
		document.getElementById('main-nav').style.marginBottom = '0px';
		document.getElementById('idioma').style.marginTop = '20px';
		document.getElementById('idioma').style.marginBottom = '10px';
	}
	
}

mediumBp.addListener(changeSize);
changeSize(mediumBp);




jQuery(document).ready(function(){

	/*jQuery('.menu li:has(ul)').click(function(e){
	
		console.log('estamos aqui');
		if (jQuery(this).hasClass('active')) {
			jQuery(this).removeClass('active');
			jQuery(this).children('ul').slideUp();
		} else{
			jQuery('.menu li ul').slideUp();
			jQuery('.menu li').removeClass('active');
			jQuery(this).addClass('active');
			jQuery(this).children('ul').slideDown();
		}
	});*/

	jQuery('li').click(function(e){ 
		
		if(!jQuery(this).children('ul').length){
			if (jQuery(this).hasClass('active')) {
			 
			} else{
				console.log('llegamos aqui1');
				//jQuery('li').removeClass('active');	
				console.log(jQuery(this).addClass('active'));
			}	
		}
		
	});

});//end document