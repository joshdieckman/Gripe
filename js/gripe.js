function ajaxpost() {
	var data = new FormData();
	data.append("username", document.getElementById("username").value);
	data.append("profileimage", document.getElementById("profileimage").value);
	data.append("gripe", document.getElementById("gripe").value);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "gripeinsert.php");
	xhr.onload = function () {console.log(this.response); };
	xhr.send(data);
	return false;
}
