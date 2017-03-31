
function addEventListenerList(list, event, fn) {
    for (var i = 0, len = list.length; i < len; i++) {
        list[i].addEventListener(event, fn, false);
    }
}

function displayBreadCrumb(obj){
        var contentHeader = document.querySelector("section.content-header");
        var breadCrumbHtml = "<h5>";
        var i = "";

        obj.forEach(
            function(element){
                breadCrumbHtml += i+"<a href="+element.redirect+">" + element.name + "</a>";
                i = " <i class='fa fa-breadcrum fa-chevron-right'></i> ";
            });
        breadCrumbHtml += "</h5>";
        contentHeader.innerHTML = breadCrumbHtml;
}

function clickPagination(event){
    var tab = event.currentTarget.parentNode.parentNode.parentNode.parentNode;
    console.log(tab);
    var li = event.currentTarget;
    var page = li.dataset.page;

    var liActive = document.querySelector("#"+tab.getAttribute("id")+" ul .active");
    var pageActive =  liActive.dataset.page;

    if(page == pageActive) {
        return null;
    } else if (page === "left" && pageActive == 1){
        return  null;
    }
    else if (page === "right" && pageActive == numberPage){
        return  null;
    }
    else if(page === "left" && pageActive != 1){
        page = pageActive;
        page--;
        liActive.previousElementSibling.classList.add("active");
    } else if(page === "right" && pageActive != numberPage) {
        page = pageActive;
        page++;
        liActive.nextElementSibling.classList.add("active");
    }

    else if(page !== "right" && page !== "left"){
        page = li.dataset.page;
        li.classList.add("active");
    }
    liActive.classList.remove("active");
    getFormations(tab.dataset.tabname,page);
}

function displayFormations(tableau,arrayFormation){
    var tableauCSS = document.querySelector("#table-"+tableau);
    var myFormations = arrayFormation.formations;
    console.log(myFormations);
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

function getFormations(tableau,page){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', "index.php?controller=formation&action=paginate&tableau="+tableau+"&page="+page, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status==200) {  
            displayFormations(tableau,JSON.parse(this.response));
        }
    }
    return this.response;
}


