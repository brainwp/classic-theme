jQuery(window).scroll(function(){
    if  (jQuery(window).scrollTop() >= 270){
		 jQuery('.content-1100 .nav-categorias').css({'position': 'fixed', 'z-index':'2000', 'top': '0', 'margin-top': '20px'});
		 jQuery('.produtos-archive').css({'margin-left': '20%'});
    } else {
         jQuery('.content-1100 .nav-categorias').css({'position': 'relative', 'z-index': 'auto', 'margin-top': '10px'});
         jQuery('.produtos-archive').css({'margin-left': '0'});
        }
});