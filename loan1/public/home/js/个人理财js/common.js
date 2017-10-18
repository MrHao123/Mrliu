//导航定位 begin
var Tnav = new Array();
Tnav[1] = '/xiangmu/';
Tnav[2] = '/daikuan/';
Tnav[3] = '/baozhang/';
var curU = window.location.href;

//初始化头部信息

//--Del $.getJSON("/index.do?method=isLgoin&callback=?", 
		 //--Del function (data){ 
		 /*$('#topHTML').html(data.top); */
		 //--Del });
/* End*/

function showMsg(msg){
	$.dialog.alert(msg).title('提示');
	return false;
} 
//注册页面
function regexInfo(){
	regexInfo.unameRegex = /^[a-zA-Z][a-zA-Z0-9]{4,14}$/;
	//regexInfo.pwdRegex = /^[\@A-Za-z0-9\~\`\!\@\#\$\%\^\&\*\.\=\"\'\:\;\+\|\\\-\(\)\{\}\[\]\<\>\?\/\\,\_]{6,20}$/;
	//regexInfo.pwdRegex = /^\S{6,20}$/;
	regexInfo.pwdRegex = /^(?!\D+$)(?![^a-zA-Z]+$)\S{8,20}$/;
	//regexInfo.mobileRegex = /^1[3|4|5|8]\d{9}$/;
	/**手机号码加入4G号段等 by:cy 2014-09-15*/
	regexInfo.mobileRegex = /^((13[0-9])|(14[5|7])|(15[0|1|2|3|5|6|7|8|9])|(17[0-9])|18[0-9])\d{8}|(170\d{8})$/;
	regexInfo.emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+(com|net|com.cn|net.cn|cn)$/;
	regexInfo.verifyCodeRegex = /^\S{6}$/;
}
new regexInfo();
//登录页面
function alertMsgInfo(){
	alertMsgInfo.textMsg = "动态密码已经发送到您的手机上，有效期为30分钟，<br/>请注意查收；如果未收到请稍候再重试。<br/>" +
		"如果长时间无法收到验证码，请联系你我贷在线客服或者<br/>拨打400-680-8888";
	alertMsgInfo.yyMsg = "<font size='3'>你我贷将通过400官方电话为您播报语音验证，请注意接听！<br>验证码有效期为30分钟，如果未收到请稍候再重试。<br/>" +
		"如果长时间无法收到验证码，请联系你我贷在线客服或者拨打400-680-8888。<br/></font>";
}
new alertMsgInfo();


