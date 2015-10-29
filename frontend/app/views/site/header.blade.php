<div class="index_header">
    <div class="header_info">
        <a href="/index.php" class="logo" alt="满意投">满意投</a>
        <div class="top_nav">
            <div class="fl" style="height:20px;margin-right:5px;">
               <span class="gray"></span> <a id="setHomepage" href="javascript:void(0);">设为首页</a> <span class="gray">|</span> <a href="javascript:bookmark();">加入收藏</a> </div>
        </div>
    </div>
    <div id="nav">
        <div class="overall">
            <ul>
                <li class="{{ (strpos(URL::current(), '.html')) ? '' : 'selected'; }}">
					<a href="/" title="首页">首页</a>
                </li>
				<li class="{{ strpos(URL::current(), 'lists.html') ? 'selected' : ''; }}">
                    <a href="http://www.manyitou.com/lists.html" title="商家服务">商家服务</a>
                </li>
            </ul>
        </div>
    </div>
</div>
