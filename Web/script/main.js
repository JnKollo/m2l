$(document).ready(function(){
    $('#pagination').on('click', function(){
        window.history.back();
        return false;
    });
});

function setPagination(element,tableau){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', "index.php?controller=formation&action=paginate&tableau="+tableau+"&page=1", true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status==200) {
            var totalCount = parseFloat(JSON.parse(this.response).totalCount);
            var nbPage = Math.ceil(totalCount / 10);
            var elementCss = document.querySelector(element+" .box-footer > ul");
            var i=0;
            if( nbPage < 2){
                return null;
            }
            while(i<nbPage){
                i++;
                var domElementA = document.createElement("a");
                var domElementLi = document.createElement("li");
                if(i === 1){
                    domElementLi.classList.add("active");
                }
                domElementLi.addEventListener("click",clickPagination);
                domElementLi.setAttribute("data-page",i);
                elementCss.appendChild(domElementLi);
                domElementLi.appendChild(domElementA);
                domElementA.innerText = i;
            }

        } else {
            return null;
        }
    }
}