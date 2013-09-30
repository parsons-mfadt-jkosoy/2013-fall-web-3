var dogFoodGiraffeFace = document.getElementById("an-id"); // "return" a DOMElement with a matching id
dogFoodGiraffeFace.addEventListener...

var aTagsInGiraffeFace = dogFoodGiraffeFace.getElementsByTagName("a"); // and then loop


var barfBarfBarfBarf = document.getElementsByTagName("a"); // returns a "NodeList" of Elements
for(var i=0;i<barfBarfBarfBarf.length;i++) {
	var a = barfBarfBarfBarf[i]; 
}

var byClass = document.getElementsByClassName("a-classname"); // class="a-classname"


var whoa = document.querySelectorAll(".a-classname p a");
var whee = document.querySelector(".a-classname p a");
