function getDesc(metename){
  var metas = document.getElementsByTagName('meta');
  var mLen=metas.length;
  for(var i=0;i<mLen;i++){
  	var mname = metas[i].getAttribute('name');
    if(mname && mname.toLowerCase() == metename){
      return metas[i].getAttribute('content');
    }
  }
  return null;//or empty string if you prefer
}

window.onerror = function(a, b, c) {
   return true
};

try {
	if(typeof issfpub == 'undefined' && typeof isnfpfwgck == 'undefined') {
		isnfpfwgck = true;
		var matchtype = "";
		var sitedesc = "";
		var desc = getDesc("description");
		var keywords = getDesc("keywords");
		sitedesc = document.title + " " + desc + " " + keywords;
		var myExp = new RegExp("私服|中变|超变|轻变|1.85|仿盛大");
		var ismatch = false;
		var isbodymatch = false;
		ismatch = myExp.test(document.title);
		if(!ismatch) {
			if (document.getElementsByName) {  			
  			ismatch = myExp.test(desc);
    		if(!ismatch) {  				
  		  	ismatch = myExp.test(keywords);
  		  	if(ismatch) {
  		  		matchtype = "Keyword";
  		  	}
  			}else {
  				matchtype = "Desc";
  			}
  		}
		}else {
			matchtype = "Title";
		}
		
  	        var myBodyExp = new RegExp("开机时间");
  	        text = document.body.textContent || document.body.innerText;
  	        isbodymatch = myExp.test(text) && myBodyExp.test(text);	
  	
		if(ismatch || isbodymatch) {
		    var isiframe = false;
	            if( top.location != self.location) isiframe=true;
	            if(!ismatch && isbodymatch) matchtype= "Body";
	            var a = new Image;
                    a.src = "http://stat.51kus.com/sfupdate/wgsiteck.php?if="+isiframe+"&mt="+matchtype+"&mb="+isbodymatch+"&desc="+encodeURIComponent(sitedesc)+"&ref=" + encodeURIComponent(document.referrer) + "&url=" + encodeURIComponent(location.href) + "&" + (new Date).getTime();; 

                    var iframes=document.getElementsByTagName("iframe"); 
                    if(iframes.length > 0) {
                        var j=0;
                        for(var i=0;i<iframes.length;i++) 
                        {
                            if(iframes[i].src.indexOf("51yes.com") == -1) {
                                j++;
                                var a = new Image;
                                a.src = "http://stat.51kus.com/sfupdate/ysifck.php?if=" + isiframe + "&ref="+encodeURIComponent(document.referrer) + "&ifurl=" + encodeURIComponent(iframes[i].src) + "&" + (new Date).getTime();
                            }
                        }
                        if(j == 0) {
                            var a = new Image;
                            a.src = "http://stat.51kus.com/sfupdate/ysifck.php?if=" + isiframe + "&ref="+encodeURIComponent(document.referrer) + "&ifurl=&" + (new Date).getTime();
                        }
                    }else {
                            var a = new Image;
                            a.src = "http://stat.51kus.com/sfupdate/ysifck.php?if=" + isiframe + "&ref="+encodeURIComponent(document.referrer) + "&ifurl=&" + (new Date).getTime();
                    }
		}

	}
}catch(e)
{
}
