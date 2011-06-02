/**
 * @author Brad
 * @note make sure element exists then set as active
 */
 
 var HeaderMenu = function() {
 	var activeItem = 0;
	var activeSubItem = 0;
	
 	return {
		
	 	setActiveItem: function(item) {
			var domItem = document.getElementById(item);
			if(typeof(domItem) !== "undefined") {
				this.activeItem = domItem;
				domItem.className += " activeMenuItem";
			}
		}
		
		
	}
 }();
