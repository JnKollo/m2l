displayBreadCrumb(breadCrumbArray);

var nameFormation = document.querySelector("#nameFormation");
var dateDebutFormation = document.querySelector("#dateDebutFormation");
var dateFinFormation = document.querySelector("#dateFinFormation");
var creditsFormation = document.querySelector("#creditsFormation");
var daysFormation = document.querySelector("#daysFormation");

$(function () {
	$('.slider').slider();

	jQuery('#maroon').change(function() {
		getFormationSearch(getParams());
	});
	jQuery('#purple').change(function() {
		getFormationSearch(getParams());
	});

});

nameFormation.addEventListener("input",function(){
	getFormationSearch(getParams());
});
dateDebutFormation.addEventListener("input",function(){
	getFormationSearch(getParams());
});
dateFinFormation.addEventListener("input",function(){
	getFormationSearch(getParams());
});



function getParams(){
	var params = {};

	if(nameFormation.value !== ""){
		params.label = nameFormation.value;
	}
	if(dateDebutFormation.value !== ""){
		params.dateMin = dateDebutFormation.value;
	}
	if(dateFinFormation.value !== ""){
		params.dateMax = dateFinFormation.value;
	}
	
	var splitDaysFormation = daysFormation.value.split(",");
	var splitCreditsFormation = creditsFormation.value.split(",");

	params.dayMin = splitDaysFormation[0];
	params.dayMax = splitDaysFormation[1];
	params.creditMin = splitCreditsFormation[0];
	params.creditMax = splitCreditsFormation[1];

	return params;
}

function displayFormationSearch(response){
	var tableauCSS = document.querySelector("#searchFormation");
  	var myFormations = response.formations;
    var tr = " <th>Nom</th><th>Date</th><th>Durée (en heure)</th> <th>Jours / requis</th><th>Points / requis</th><th style='width: 185px'>Statut</th><th style='width: 80px'></th>";
    
    myFormations.forEach(function(element){
        var classStatus = "";
        switch (element.status){
            case 'refusée' : classStatus = "bg-red";
            break;
            case 'en cours de validation' : classStatus = "bg-yellow";
            break;
            case 'indisponible' : classStatus = "bg-red";
            break;
            default : classStatus = "bg-green";
        }
        tr += "<tr><td><a href='index.php?controller=formation&action=show&id="+element.id+"'>"+element.name+"</a></td><td>"+element.date+"</td><td>"+element.duration+"</td><td>"+element.days+"</td><td>"+element.credits+"</td><td><span class='badge "+classStatus+"'>"+element.status+"</span></td><td><a href='index.php?controller=formation&action=show&id="+element.id+"'><i class='fa fa-fw fa-pencil-square-o'></i></a></td></tr>";
    });
    tableauCSS.innerHTML = tr;
}	

function getFormationSearch(parameters){
	var str = jQuery.param(parameters);
	console.log("index.php?controller=search&action=result&"+str);
	var xhr = new XMLHttpRequest();
	xhr.open('GET', "index.php?controller=search&action=result&"+str, true);
	xhr.send();
	xhr.onreadystatechange = function() {
	    if (xhr.readyState == 4 && xhr.status==200) {  
	          	displayFormationSearch(JSON.parse(this.response));
	          	console.log(JSON.parse(this.response));
	    }
	}
}