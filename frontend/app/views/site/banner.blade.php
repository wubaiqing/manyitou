<div class="content_login">
	<ul class="bg_ul">
		@foreach ($banner as $key => $item)
			<li index="{{ $key }}" style="width: 1425px; background:#{{ $item->color }} url({{ $item->image}}) no-repeat 50% 50%;"></li>
		@endforeach
	</ul>
	<div class="content-bd">
		<div class="headbg_index" style="top: 320px;">
			@foreach ($banner as $key => $item)
			<span index="{{ $key }}" class=""></span>
			@endforeach
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#login_frame").css("right", ($(window).width() - 1000) / 2);
		var spans = $(".content_login .content-bd .headbg_index span");
		var lis = $(".content_login .bg_ul li");

		for(var j = 0; j < lis.length; j++){
			$(lis[j]).css("width", $(window).width());
		}

		$(spans[0]).addClass("index_cur");
		$(lis[0]).addClass("cur_li");
		var isScroll = true;
		setInterval(scrollHeadBg, 4500);

		$('#J_loginTab,.content_login .bg_ul').hover(function(){isScroll = false;},function(){isScroll = true;})


		function scrollHeadBg(){
			if (isScroll){
				var index = $("#content .content_login .bg_ul li.cur_li").attr("index");
				var next = parseInt(index) + 1;
				if (next > spans.length - 1){
					next = 0;
				}

				$(spans).removeClass("index_cur");
				$(lis).removeClass("cur_li");
				for(var i = 0; i < spans.length; i++){
					if (next == $(spans[i]).attr("index")){
						$(spans[i]).addClass("index_cur");
						$(lis[i]).addClass("cur_li");
						$(".content_login .bg_ul").css("margin-left", -next*$(lis[i]).width()+'px');
						break;
					}
				}
			}
		}
		//点击
		$(".headbg_index span").hover(function(){
			isScroll = false;
			var index = $(this).attr("index");
			$(spans).removeClass("index_cur");
			$(lis).removeClass("cur_li");

			$(spans[index]).addClass("index_cur");
			$(lis[index]).addClass("cur_li");
			$(".content_login .bg_ul").css("margin-left", -index*$(lis[index]).width()+'px');
		}, function(){isScroll = true;});
	});

</script>