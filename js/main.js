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

function crear_sessionStorage(recursoID){

	sessionStorage.setItem("li_ID",recursoID)

}
function obtener_sessionStorage(){
	if(sessionStorage.getItem('li_ID')){
		let recuso_session = sessionStorage.getItem('li_ID')
		jQuery("#"+recuso_session).addClass('active').parent().addClass('activado')
	}
	
}

jQuery(document).ready(function(){

	obtener_sessionStorage()
	
	jQuery('.menu-item-has-children').click(function(e){
		jQuery(this).children('ul').slideToggle('slow')
	})
	jQuery('.sub-menu li').click(function(e){
		var recurso_id = jQuery(this).attr('id')
		crear_sessionStorage(recurso_id)
	})
	jQuery('ul').click(function(p){
		p.stopPropagation()
	})
	/*jQuery('.menu li:has(ul)').click(function(e){
		if (jQuery(this).hasClass('active')) {
			jQuery(this).removeClass('active');
			jQuery(this).children('ul').slideUp();
		} else{
			jQuery('.menu li ul').slideUp();
			jQuery('.menu li').removeClass('active');
			jQuery(this).addClass('active');
			jQuery(this).children('ul').slideDown();
		}
	});

	jQuery('li').click(function(e){ 
		
		if(!jQuery(this).children('ul').length){
			if (jQuery(this).hasClass('active')) {
			 
			} else{
				console.log('llegamos aqui1');
				jQuery('li').removeClass('active');	
				console.log(jQuery(this).addClass('active'));
			}	
		}
	});*/

});//end document