function showSuggestions(inputString) {

	// AJAX SEARCH JAVASCRIPT
	
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
	
	// AJAX SEARCH USING JQUERY
	/*
	if(inputString.length == 0){
		document.getElementById('search_output').innerHTML = 'Search field empty!';
	}else{
		$.ajax({
			url: "suggest_data.php",
			method:"GET",
			data: { 'q' : inputString},
			dataType:'text',
			success: function(result){
	        document.getElementById('search_output').innerHTML = result;
		    }
		});
	}
	*/
}