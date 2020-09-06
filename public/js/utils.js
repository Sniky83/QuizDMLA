function changeStyle() {
    console.log("Changer le style");
    console.log(this.globalStyle);
    let varStyle;
    if (this.globalStyle === 1) {
        this.globalStyle ++;
        varStyle = '../../public/css/global_size_2.css';
    } else if (this.globalStyle === 2) {
        this.globalStyle ++;
        varStyle = '../../public/css/global_size_3.css'
    } else {
        this.globalStyle = 1;
        varStyle = '../../public/css/global_size_1.css'
    }
    stocke_cookie(this.globalStyle, 'cookieStyle');
    document.getElementById('style_sheet').setAttribute('href',varStyle);
}

// Dclaration des variables 'domaine' et 'date d'expiration'
//var pathname=location.pathname;
var pathname = '/';
var myDomain=pathname.substring(0,pathname.lastIndexOf('/')) +'/';
var date_exp = new Date();
date_exp.setTime(date_exp.getTime()+(365*24*3600*1000));

function getCookieVal(offset) {
	var endstr=document.cookie.indexOf (";", offset);
	if (endstr==-1)
      		endstr=document.cookie.length;
	return unescape(document.cookie.substring(offset, endstr));
}

function SetCookie (name, value) {
// un cookie a besoin d'un nom, d'une valeur, d'un nom de domaine, d'une date d'expiration
// 
	var argv=SetCookie.arguments;
	var argc=SetCookie.arguments.length;
	var expires=(argc > 2) ? argv[2] : null;
	var path=(argc > 3) ? argv[3] : null;
	var domain=(argc > 4) ? argv[4] : null;
	var secure=(argc > 5) ? argv[5] : false;
	document.cookie=name+"="+escape(value)+
		((expires==null) ? "" : ("; expires="+expires.toGMTString()))+
		((path==null) ? "" : ("; path="+path))+
		((domain==null) ? "" : ("; domain="+domain))+
		((secure==true) ? "; secure" : "");
}

function GetCookie (name) {
	var arg=name+"=";
	var alen=arg.length;
	var clen=document.cookie.length;
	var i=0;
	while (i<clen) {
		var j=i+alen;
		if (document.cookie.substring(i, j)==arg)
                        return getCookieVal (j);
                i=document.cookie.indexOf(" ",i)+1;
                        if (i==0) break;}
	return null;
}

function stocke_cookie(valueStyle, cookieName) { 
    // stockage valueStyle dans un cookie
    var valeur=GetCookie(cookieName);
    SetCookie(cookieName,valueStyle,date_exp,myDomain);
	
}

function clearCookie(cookieName) {
	date=new Date;
	date.setFullYear(date.getFullYear()-1);
	SetCookie(cookieName,null,date); 
	window.location.reload();
}