document.onreadystatechange = function() { 
    if (document.readyState !== "complete") { 
        document.querySelector("body").style.visibility = "hidden"; 
        document.querySelector(".pageLoader").style.visibility = "visible"; 
        console.log("complete")
    } else { 
        document.querySelector(".pageLoader").style.display = "none"; 
        document.querySelector("body").style.visibility = "visible"; 
        console.log("incomplete")
    } 
}; 
