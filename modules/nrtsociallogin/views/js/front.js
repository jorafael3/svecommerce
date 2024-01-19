$(document).ready(function(){	
	$('body').on('click','.js-social-login',function(e) {
		setCookieSw();
		if(window.innerWidth > 1199){
        	return !window.open(this.href, 'popup','width=450, height=450, left='+((window.screen.width - 450) / 2)+', top='+((window.screen.height - 450) / 2)+'');
		}
    });
});

function setCookieSw() {
	var name = 'cookieSw';
	var value = window.innerWidth;
	var expire = new Date();
	expire.setMonth(expire.getMonth()+12);
	document.cookie = name + "=" + escape(value) +";path=/;" + ((expire==null)?"" : ("; expires=" + expire.toGMTString()))
}