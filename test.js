function openbox(id) {
  var all = document.querySelectorAll(".shopzone");

  for (var i = 0; i < all.length; i++) {
    if (all[i].id == id) {
    	
       all[i].style.display = 'block';
    } else {
    	
      all[i].style.display = 'none';
    }
  }
}

