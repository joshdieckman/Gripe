function ajaxpost() {
	var data = new FormData();
	data.append("username", document.getElementById("username").value);
	data.append("profileimage", document.getElementById("profileimage").value);
	data.append("gripe", document.getElementById("gripe").value);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "gripeinsert.php");
	xhr.onload = function () {
      document.getElementById('gripe').value = "";
    };
	xhr.send(data);
	return false;
}
