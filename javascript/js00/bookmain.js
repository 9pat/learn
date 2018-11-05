// listen for from summit
document.getElementById('myForm').addEventListener('submit', saveBookmark);

// save bookmark
function saveBookmark(e){
	//console.log('It Works');
	
	// get form value
	var siteName = document.getElementById('siteName').value;
	var siteURL = document.getElementById('siteURL').value;
	
	if(!validateForm(siteName, siteURL)){
		return false;
	}
	
	var bookmark = {
		name: siteName,
		url: siteURL
	}
	
	/*
	
	// local storage test
	localStorage.setItem('test', 'hellp');
	localStorage.getItem('test');
	localStorage.removeItem('test');
	
	*/
	
	// Test if bookmark is null
	if(localStorage.getItem('bookmarks') === null){
		// Init Array
		var bookmarks = [];
		// Add to array
		bookmarks.push(bookmark);
		// Set to localstorage
		localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
	} else {
		// get bookmarks from localStorage
		var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
		// Add bookmark to Array
		bookmarks.push(bookmark);
		// Re-set it back to localStorage
		localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
	}
	
	// Clear form
	document.getElementById('myForm').reset();
	
	// Re-fetch Bookmarks
	fetchBookMakrs();
	
	// prevent form from submitting
	e.preventDefault();
}

// Delete bookmark

function deleteBookmark(url){
	// get bookmark from localStorage
	var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
	// loop through bookmark
	for(i=0 ; i < bookmarks.length ; i++){
		if(bookmarks[i].url == url){
			// remove from array
			bookmarks.splice(i, 1);
		}
	}
	
	// Re-set back to LocalStorage
	localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
	
	// Re-fetch Bookmarks
	fetchBookMakrs();
}

// fetch bookmarks

function fetchBookMakrs(){
	// get bookmarks from localStorage
	var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
	
	// Get output id
	var bookmarksResults = document.getElementById('bookmarksResults');
	
	// Build Output
	bookmarksResults.innerHTML = '';
	
	for(i=0 ; i < bookmarks.length ; i++){
		var name = bookmarks[i].name;
		var url = bookmarks[i].url;
		
		bookmarksResults.innerHTML += 
			'<div class="well">' + 
			'<h3>' + name + 
			'<a class="btn btn-default" target="_blank" href="' + url + '"> Open Link </a>' +
			'<a onclick="deleteBookmark(\''+ url +'\')" class="btn btn-danger" href="#"> Delete </a>' +			
			'</h3>' + 
			'</div>';
	}

}

// Validate Form 

function validateForm(siteName, siteURL){

	if(!siteName || !siteURL){
		alert('please fill in the form');
		return false;
	}
	
	var expression = /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/;
	var regex = new RegExp(expression);
	
	if(!siteURL.match(regex)){
		alert('Please use the valid URL');
		return false;
	}
	
	return true;
}










