var img = document.getElementById("upload-photo").addEventListener(
"change", function() {
	var file = this.files[0];
	var fileReader = new FileReader();

	fileReader.readAsDataURL(file);

fileReader.onload	= function(event){
var imageSrcData = event.target.result;
document.getElementById("img-holder").style.backgroundImage = "url("+imageSrcData+")";
document.getElementById("img-holder").style.display = "block";
}

});