function initJsCommun(){
	function activeSideBarMenu(){
		var sideBarMenu = document.querySelectorAll(".sidebar-menu > li");
	    var pageName = document.querySelector(".content-header > h1").innerText;
	    console.log("pageNae")
	    if(pageName.indexOf("Gestion d'équipe") !== -1 ){
	        sideBarMenu[3].classList.add("active");
	    } else if(pageName.indexOf("Gestion des formations") !== -1){
	        sideBarMenu[2].classList.add("active");
	    } else if(pageName.indexOf("Page d'accueil") !== -1){
	        sideBarMenu[1].classList.add("active");
	    }
	}
	activeSideBarMenu();
}

window.addEventListener("DOMContentLoaded",initJsCommun);
