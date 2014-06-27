(function() {
  $(document).ready(function() {
    $('.imageBox').colorbox({
      'height': '90%',
      'rel': 'imageBox'
    });
    $("img.lazy-index-logo").lazyload();
    return $("img.lazy-index-image").lazyload();
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


}).call(this);
