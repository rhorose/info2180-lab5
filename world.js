window.onload = function(){


var btn = document.getElementById("lookup");
var btn2 = document.getElementById("lookupC");
// var results = getElementById("result");

btn.addEventListener("click",appears);
btn2.addEventListener("click",appearing)



function appears(){


var tables= document.getElementById("country").value
var url = "world.php?country=" + tables;
var ourRequest = new XMLHttpRequest();
ourRequest.open('GET',url, true);
ourRequest.send();

console.log("clicking")

ourRequest.onreadystatechange= function(){
if(ourRequest.readyState===XMLHttpRequest.DONE){
    if(ourRequest.status===200){
        document.getElementById("result").innerHTML=this.responseText;

       


    }
}


}
}

function appearing(){


    var tables= document.getElementById("country").value
    var url = "world.php?cities=" + tables;
    var htmlRequest = new XMLHttpRequest();
    htmlRequest.open('GET',url, true);
    htmlRequest.send();
    
    console.log("clicking")
    
    htmlRequest.onreadystatechange= function(){
    if(htmlRequest.readyState===XMLHttpRequest.DONE){
        if(ourRequest.status===200){
            document.getElementById("result").innerHTML=this.responseText;
    
           
    
    
        }
    }
    
    
    }

}
}