var check;
var price;
var totalPrice;
var totalDiv;
var btn;

window.addEventListener("load",start,false);


function start(){
    //btn = document.getElementById("menuButton");
    //btn.addEventListener("click", calculate, false);
    $('#menuButton').on('click', calculate);
}

function calculate(){
   // var totalDiv= document.getElementById("totals");
    totalPrice= 0;
   // totalDiv.innerHTML="";

    var totalDiv = $('#totals');
    totalDiv.html("");

    
    for( var i = 1; i<13; i++){

        //var item = document.getElementById("check"+i);
        var item = $('#check'+i);

        //var priceItem = document.getElementById("price"+i);
        var priceItem = $('#price'+i);
        
        //totalPrice += parseInt(priceItem.innerHTML)*parseInt(item.value);
        totalPrice += parseInt(priceItem.html())*parseInt(item.val());

    }

    //totalDiv.innerHTML = totalPrice + "$";
    totalDiv.html(totalPrice + "$");
}

