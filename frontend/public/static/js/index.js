$(document).ready(function() {
	$('.imageBox').colorbox({
		'height': '90%',
		'rel': 'imageBox'
	});
	$("img.lazy-index-logo").lazyload();
	$("#J_SlidePlayer_510").slideImg({
		speed: "normal",
		timer: 3000
	});

	$("img.lazy-index-image").lazyload();

	$('.look').click(function () {
		var contact = $(this).attr('data-contact');
		$(this).html(contact);
	});


});

function bookmark() {
	var title = document.title
	var url = document.location.href
	if (window.sidebar)
		window.sidebar.addPanel(title, url, "");

	else if (window.opera && window.print) {
		var mbm = document.createElement('a');
		mbm.setAttribute('rel', 'sidebar');
		mbm.setAttribute('href', url);
		mbm.setAttribute('title', title);
		mbm.click();
	} else if (document.all) {
		window.external.AddFavorite(url, title);
	} else {
		alert('收藏失败,请按Ctrl + D 进行收藏');
	}
}

//设为首页
function SetHomePage(obj,url){
	try{
		obj.style.behavior='url(#default#homepage)';obj.setHomePage(url);
	}catch(e){
		if(window.netscape){
			try{
				netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
			}catch (e){
				return false;
			}
			var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
			prefs.setCharPref('browser.startup.homepage',url);
		}
	}
}

(function($) {
	$.fn.slideImg = function(settings) {
		settings = jQuery.extend({
			speed: "normal",
			timer: 1000
		}, settings);
		return this.each(function() {
			$.fn.slideImg.scllor($(this), settings);
		});
	};

	$.fn.slideImg.scllor = function($this, settings) {
		var index = 0;
		var scllorer=$(".img-box li",$this);
		var size=scllorer.size();
		var slideH=scllorer.outerHeight();
		var $selItem=$("<ul></ul>",{
			"class":"flash_item",
			html:function(){
				var $selItemHTML="";
				if(size==1){
					return;
				}else if(size>1){
					for(var i=0;i<size ;i++){
						i==0?$selItemHTML+='<li class="on">'+(i+1)+'':$selItemHTML+='<li class="">'+(i+1)+'</li>';
					}
					return  $selItemHTML;
				}
			}
		}).appendTo($this);
		var li = $(".flash_item li",$this);
		var showBox = $(".img-box",$this);
		var intervalTime=null;
		li.hover(function() {
			var that=this;
			if (intervalTime) {
				clearInterval(intervalTime);
			}
			intervalTime = setTimeout(function() {
				index = li.index(that);
				ShowAD(index);
			}, 200);
		}, function() {
			clearInterval(intervalTime);
			interval();
		});
		showBox.hover(function() {
			if (intervalTime) {
				clearInterval(intervalTime);
			}
		}, function() {
			clearInterval(intervalTime);
			interval();
		});
		function interval(){
			intervalTime = setInterval(function() {
				ShowAD(index);
				index++;
				if (index == size) {
					index = 0;
				}
			}, settings.timer);
		}
		interval();
		var ShowAD = function(i) {
			showBox.animate({ "top": -i * slideH }, settings.speed);
			li.eq(i).addClass("on").siblings().removeClass("on");
		};
	};
})(jQuery);


