function loadALotOfStuff(callback) {
	// stuff happens

	callback();
}





// somewhere else
loadALotOfStuff(function() {
	alert("Bank alert message goes here");
});

addEventListener("what are we listening for",function(evt) {
	// this is the callback function code
},false);