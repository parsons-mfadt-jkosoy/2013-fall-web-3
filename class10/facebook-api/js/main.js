var facebookLogin = document.querySelector("a");
facebookLogin.addEventListener("click",function(evt) {
	evt.preventDefault();

	 FB.login(function(response) {
	   if (response.authResponse) {
	     console.log('Welcome!  Fetching your information.... ');

	     document.getElementById("login").classList.add("hide");
	     document.getElementById("logged-in").classList.remove("hide");

	     FB.api('/me', function(response) {
	     	loadFacebookImage(response.id);
	     });
	   } else {
	     console.log('User cancelled login or did not fully authorize.');
	   }
	 });
});

function loadFacebookImage(id) {
	var img = new Image();
	img.onload = function() {
		document.querySelector(".profile-photo").appendChild(img);
	}
	img.src = "http://graph.facebook.com/" + id + "/picture";	
}

document.querySelector(".input.file").addEventListener('change',function(evt) {
		var fd = new FormData();
		fd.append("myUploadedFile", evt.target.files[0]);

        var xhr = new XMLHttpRequest();
        xhr.addEventListener("load", function(evt) {

        	var data = JSON.parse(evt.target.responseText);
        	console.log(data);
        	
//        	data['filename'];
        }, false);
        xhr.open("POST", "/facebook-api/upload.php");
        xhr.send(fd);
});