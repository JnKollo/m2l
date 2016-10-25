window.addEventListener("load", init);





function init(){


	// VAR
	var div = document.querySelectorAll(".text-align-right");
	var modalPassword = document.querySelector("#modal-password");
	var modalConnexion = document.querySelector("#modal-connexion");

	// EVENT
	for(var i=0;div.length>i;i++){
		div[i].addEventListener("click", toggleActive);
	}
	console.log(div);
	// FCT
	function toggleActive(){
	console.log("test");
	modalPassword.classList.toggle("active");
	modalConnexion.classList.toggle("active");
}
}
