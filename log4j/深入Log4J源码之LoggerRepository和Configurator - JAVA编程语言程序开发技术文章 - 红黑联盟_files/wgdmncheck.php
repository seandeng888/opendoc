
window.onerror = function(a, b, c) {
   return true
};

if(typeof issfpub == 'undefined' && typeof sndrpt != 'undefined' && typeof hastrckwg == 'undefined') {
    hastrckwg = 1;
    sndrpt("http://stat.51kus.com/sfupdate/wgcheckv1.php");
}
