// $Id: google_cse.js,v 1.1.4.3 2008/07/01 21:31:14 mfb Exp $
var script = document.createElement('script');
script.src = 'http://extension.oregonstate.edu/_includes/shorten.js';
script.type = 'text/javascript';
var head = document.getElementsByTagName('head').item(0);
head.appendChild(script);
$(script).load(function()
{
var sitename = shorten(document.title.substring(document.title.indexOf('|')+2));
$(function() {
  var googleCSEWatermark = function($id) {		
	var f = document.getElementById($id);
    if (f && (f.query || f.q || f['edit-keys'])) {	
      var q = f.query ? f.query : (f.q ? f.q : f['edit-keys']);
	  var s = $('#'+$id+' input[type="image"],#'+$id+' input[type="submit"]').get(0);
	  var n = navigator;
      var l = location;
      var firstFocus = true;
	  if (q.value == 'Search...')
		{
			q.value = 'Search '+sitename;
		}
	  if (q.value == '' || q.value == 'Search '+sitename)
		{s.disabled = 'disabled';
		 s.style.cursor = 'default';}
      if (n.platform == 'Win32') {
        q.style.cssText = 'border: 1px solid #7e9db9; padding: 2px;';
      }
      var b = function() {
        if (q.value == '') {
					q.value = 'Search '+sitename;
					s.disabled = 'disabled';
					s.style.cursor = 'default';
					firstFocus = true;
					q.style.color = '#999';
					q.style.fontStyle = 'oblique';
				}
      };
      var f = function() {
	      		s.removeAttribute('disabled');
				s.style.cursor = 'pointer';
        		q.style.background = '#ffffff';
				q.style.color = '#000';
				q.style.fontStyle = 'normal';
				if (firstFocus == true)
				{
					q.value = '';
					firstFocus = false;
				}
      };
      q.onfocus = f;
      q.onblur = b;
      if (!/[&?]query=[^&]/.test(l.search)) {
        b();
      }
    }
  };
  googleCSEWatermark('google-cse-searchbox-form');
  googleCSEWatermark('google-cse-results-searchbox-form');
  if (Drupal.settings.googleCSE.searchForm) {
    googleCSEWatermark('search-form');
  }
});
});
