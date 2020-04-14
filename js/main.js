const mediumBp = matchMedia('(min-width: 1320px)');
const changeSize = mql => {
	if(mql.matches){

		
		document.getElementById('main-nav').style.width = '40%';
		document.getElementById('main-nav').style.marginBottom = '-20px'; 	
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


// function menu_footer_size(){
// 	var c = document.getElementById("navbarTogglerDemo01").children
// 	console.log('unos vomitos '+c)		
// }



function crear_sessionStorage(recursoID,recurso_Href){
	sessionStorage.setItem("li_ID",recursoID)
	sessionStorage.setItem("li_Href",recurso_Href)
}
function obtener_sessionStorage(){
	if(sessionStorage.getItem('li_ID')){
		let recuso_session_id = sessionStorage.getItem('li_ID')	
		return recuso_session_id
	} 	
}

function obtener_link_sessionStorage(){
	if(sessionStorage.getItem('li_Href')){
		let recuso_session_href = sessionStorage.getItem('li_Href')
		return recuso_session_href
	}
}

function session_sotage_not_childen(idNoChildren,hrefNoChildren){
	sessionStorage.setItem("li_ID_nochild",idNoChildren)
	sessionStorage.setItem("li_Href_nochild",hrefNoChildren)
}

function obtenerSessionStorageNoChildren(){
	if(sessionStorage.getItem('li_ID_nochild')){
		let idNoChildren = sessionStorage.getItem('li_ID_nochild')	
		return idNoChildren
	} 	
}

function obtenerLinkSessionStorageNoChildren(){
	if(sessionStorage.getItem('li_Href_nochild')){
		let hrefNochildren = sessionStorage.getItem('li_Href_nochild')
		return hrefNochildren
	}
}

jQuery(document).ready(function(){
	
	// menu_footer_size()
	var session_id = obtener_sessionStorage()
	var session_href = obtener_link_sessionStorage()
	var IdNoChildren = obtenerSessionStorageNoChildren()
	var hrefNoChildren =  obtenerLinkSessionStorageNoChildren()
	var pathname = window.location;
	if(session_href == pathname){
		jQuery("#"+session_id).addClass('active').parent().addClass('activado')
	}else{
		jQuery("#"+session_id).removeClass('active').parent().removeClass('activado')
	}
	if (hrefNoChildren == pathname) {
		jQuery("#"+IdNoChildren).addClass('act')
	}else{
		jQuery("#"+IdNoChildren).removeClass('act')
	}

		
	jQuery('li').click(function(){
		if(jQuery(this).children().length < 2){
			if(jQuery(this).parent().hasClass("sub-menu")){
				var recurso_id = jQuery(this).attr('id')
				var recurso_href = jQuery(this).children('a').attr('href')
				crear_sessionStorage(recurso_id,recurso_href)	
			}else{
				var recursoIdNoChildren = jQuery(this).attr('id')
				var recursoHrefNoChildren = jQuery(this).children('a').attr('href')
				session_sotage_not_childen(recursoIdNoChildren,recursoHrefNoChildren)
			}
		}
	})
	jQuery('.menu-item-has-children').click(function(e){
		jQuery(this).children('ul').slideToggle('slow')
	})
	jQuery('ul').click(function(p){
		p.stopPropagation()
	})
	
	
});//end document