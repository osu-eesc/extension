// $Id: google_cse.js,v 1.1.4.3 2008/07/01 21:31:14 mfb Exp $
$(function() {
  var googleCSEWatermark = function($id) {
    var f = document.getElementById($id);
if (document.getElementById('edit-sa').value == '' || document.getElementById('edit-sa').value == 'Search Extension')
{document.getElementById('edit-sa').disabled = 'disabled';
document.getElementById('edit-sa').style.cursor = 'default';}
    if (f && (f.query || f.q || f['edit-keys'])) {
      var q = f.query ? f.query : (f.q ? f.q : f['edit-keys']);
      var n = navigator;
      var l = location;
      var firstFocus = true;
      if (n.platform == 'Win32') {
        q.style.cssText = 'border: 1px solid #7e9db9; padding: 2px;';
      }
      var b = function() {
        if (q.value == '') {
					q.value = 'Search Extension';
					document.getElementById('edit-sa').disabled = 'disabled';
					document.getElementById('edit-sa').style.cursor = 'default';
					firstFocus = true;
					q.style.color = '#999';
					q.style.fontStyle = 'oblique';
				}
      };
      var f = function() {
	      document.getElementById('edit-sa').removeAttribute('disabled');
	document.getElementById('edit-sa').style.cursor = 'pointer';
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
