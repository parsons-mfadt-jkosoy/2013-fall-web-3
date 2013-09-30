var h1 = document.getElementById("my-h1");
console.log(h1);


var container = document.querySelector(".another-container .container");
console.log(container);

var everySinglePTag = container.querySelectorAll("p");
console.log(everySinglePTag);

var secondParagraph = everySinglePTag.item(1);
console.log(secondParagraph);

/*
secondParagraph.addEventListener('click',function(evt) {
	evt.preventDefault(); // stop the default behavior (like a link going to another page)

	evt.stopPropagation(); // stop the listener from continuing down your page, otherwise events will "fire" all the way down to the body tag


	secondParagraph.classList.toggle("is-active");



},false);
*/

for(var i=0;i<everySinglePTag.length;i++) {
	var p = everySinglePTag.item(i);
	p.addEventListener('click',function(evt) {
		evt.preventDefault();
		evt.stopPropagation();
		this.classList.toggle("is-active");
	});
}