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
                    <a href="http://www.manyitou.com/lists.html" title="资源中心">资源中心</a>
                </li>
                <li class="{{ strpos(URL::current(), 'billboard/detail/2.html') ? 'selected' : ''; }}">
                    <a href="http://www.manyitou.com/billboard/detail/2.html" title="淘宝客入驻">淘宝客入驻</a>
                </li>
                <li class="{{ strpos(URL::current(), 'billboard/detail/1.html') ? 'selected' : ''; }}">
                    <a href="http://www.manyitou.com/billboard/detail/1.html" title="关于满意投">关于满意投</a>
                </li>
            </ul>
        </div>
    </div>
</div>
