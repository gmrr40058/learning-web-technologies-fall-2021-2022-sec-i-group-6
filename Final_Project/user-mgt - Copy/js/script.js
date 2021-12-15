function search(){
	let name = document.getElementById('name').value;
	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'search.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('div1').innerHTML = this.responseText;
		}
	}
}