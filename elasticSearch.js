function showSuggestions(inputString) {

	if(inputString.length == 0){
		document.getElementById('search_output').innerHTML = 'Search field empty!';
	}else{
		// create xmlhttp request object to exchange data with server behind the scenes
		var xmlhttp=new XMLHttpRequest();
		// 'onreadystatechange' Defines a function to be called when the readyState property changes
		xmlhttp.onreadystatechange = function() {
			
			if(this.readyState == 4 && this.status == 200){

				document.getElementById("search_output").innerHTML = this.responseText;

			}

		}
		
		xmlhttp.open('GET', 'suggest_data.php?q='+inputString ,true);
		xmlhttp.send();
	}


}