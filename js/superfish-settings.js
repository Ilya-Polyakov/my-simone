/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function($){
	var breakpoint = 600;
    var sf = $('ul.nav-menu');
	
    if($(document).width() >= breakpoint){
        sf.superfish({
            delay: 200,
            speed: 'fast'
        });
    }
	
    $(window).resize(function(){
        if($(document).width() >= breakpoint & !sf.hasClass('sf-js-enabled')){
            sf.superfish({
                delay: 200,
                speed: 'fast'
            });
        } else if($(document).width() < breakpoint) {
            sf.superfish('destroy');
        }
    });
});