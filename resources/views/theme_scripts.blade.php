<!-- Third parties  -->
<script src="/js/vendor/babel-external-helpers.js"></script>
<script src="/js/vendor/jquery.min.js"></script>
<script src="/js/vendor/tether.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/vendor/animsition.min.js"></script>
<script src="/js/vendor/jquery.mousewheel.min.js"></script>
<script src="/js/vendor/jquery-asScrollable.min.js"></script>
<script src="/js/vendor/jquery-slidePanel.min.js"></script>

<!-- Theme Core -->
<script src="/js/theme/State.min.js"></script>
<script src="/js/theme/Component.min.js"></script>
<script src="/js/theme/Plugin.min.js"></script>
<script src="/js/theme/Base.min.js"></script>
<script src="/js/theme/Config.min.js"></script>
<script src="/js/theme/Menubar.min.js"></script>
<script src="/js/theme/Sidebar.min.js"></script>
<script src="/js/theme/PageAside.min.js"></script>
<script src="/js/theme/menu.min.js"></script>

<!-- Set the assets folder -->
<script>
	Config.set('assets', '../../assets');
</script>

<script src="/js/theme/Site.min.js"></script>

<script>
(function(document, window, $) 
{
	'use strict';
	var Site = window.Site;
	$(document).ready(function() {
		Site.run();
	});
})(document, window, jQuery);
</script>