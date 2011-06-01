/**
 * @author christopher
 */

 
 var HeaderMenu = function() {
 	var activeItem = 0;
	var activeSubItem = 0;
	
 	return {
		
		setActiveSubItem: function(item) {
			var domItem = getElement(item);
			if(typeof(domItem) !== "undefined") {
				this.activeSubItem = domItem;
				domItem.className += " activeMenuSubItem";
			}
		},
		
	 	setActiveItem: function(item) {
			var domItem = getElement(item);
			if(typeof(domItem) !== "undefined") {
				this.activeItem = domItem;
				domItem.className += " activeMenuItem";
			}
		}
		
		
	}
 }();
