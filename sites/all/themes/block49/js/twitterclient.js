var tweetUsers = ['tutorialzine','TechCrunch','smashingmag','mashable'];
var buildString = "";

$(document).ready(function(){


	$('#inputField').bind("blur focus keydown keypress keyup", function(){recount();});
	$('input.submitButton').attr('disabled','disabled');
	
	$('#tweetForm').submit(function(e){
	
		tweet();
		e.preventDefault();
	
	});
	
	$('#twitter-ticker').slideDown('slow');
	
	for(var i=0;i<tweetUsers.length;i++)
	{
		if(i!=0) buildString+='+OR+';
		buildString+='from:'+tweetUsers[i];
	}
	
	var fileref = document.createElement('script');
	
	fileref.setAttribute("type","text/javascript");
	fileref.setAttribute("src", "http://search.twitter.com/search.json?q="+buildString+"&callback=TweetTick&rpp=50");
	
	document.getElementsByTagName("head")[0].appendChild(fileref);	
	
});

function TweetTick(ob)
{
	var container=$('#tweet-container');
	container.html('');
	
	$(ob.results).each(function(el){
	
		var str = '	<div class="tweet">\
					<div class="avatar"><a href="http://twitter.com/'+this.from_user+'" target="_blank"><img src="'+this.profile_image_url+'" alt="'+this.from_user+'" /></a></div>\
					<div class="user"><a href="http://twitter.com/'+this.from_user+'" target="_blank">'+this.from_user+'</a></div>\
					<div class="time">'+relativeTime(this.created_at)+'</div>\
					<div class="txt">'+formatTwitString(this.text)+'</div>\
					</div>';
		
		container.append(str);
	
	});
	
	container.jScrollPane();
}

function formatTwitString(str)
{
	str=' '+str;
	str = str.replace(/((ftp|https?):\/\/([-\w\.]+)+(:\d+)?(\/([\w/_\.]*(\?\S+)?)?)?)/gm,'<a href="$1" target="_blank">$1</a>');
	str = str.replace(/([^\w])\@([\w\-]+)/gm,'$1@<a href="http://twitter.com/$2" target="_blank">$2</a>');
	str = str.replace(/([^\w])\#([\w\-]+)/gm,'$1<a href="http://twitter.com/search?q=%23$2" target="_blank">#$2</a>');
	return str;
}

function relativeTime(pastTime)
{	
	var origStamp = Date.parse(pastTime);
	var curDate = new Date();
	var currentStamp = curDate.getTime();
	
	var difference = parseInt((currentStamp - origStamp)/1000);

	if(difference < 0) return false;

	if(difference <= 5)				return "Just now";
	if(difference <= 20)			return "Seconds ago";
	if(difference <= 60)			return "A minute ago";
	if(difference < 3600)			return parseInt(difference/60)+" minutes ago";
	if(difference <= 1.5*3600) 		return "One hour ago";
	if(difference < 23.5*3600)		return Math.round(difference/3600)+" hours ago";
	if(difference < 1.5*24*3600)	return "One day ago";
	
	var dateArr = pastTime.split(' ');
	return dateArr[4].replace(/\:\d+$/,'')+' '+dateArr[2]+' '+dateArr[1]+(dateArr[3]!=curDate.getFullYear()?' '+dateArr[3]:'');
}

function recount()
{
	
	var maxlen=140;
	var current = maxlen-$('#inputField').val().length;
	$('.counter').html(current);
	
		
	if(current<0 || current==maxlen)
	{
		$('.counter').css('color','#D40D12');
		$('input.submitButton').attr('disabled','disabled').addClass('inact');
	}
	else
		$('input.submitButton').removeAttr('disabled').removeClass('inact');

	
	if(current<10)
		$('.counter').css('color','#D40D12');
	
	else if(current<20)
		$('.counter').css('color','#5C0002');

	else
		$('.counter').css('color','#cccccc');
	
}



function tweet()
{
	var submitData = $('#tweetForm').serialize();
	
	$('.counter').html('<img src="../../images/twitterimages/ajax_load.gif" width="16" height="16" style="padding:12px" alt="loading" />');
	
	$.ajax({
		type: "POST",
		url: "submit.php",
		data: submitData,
		dataType: "html",
		success: function(msg){
			
			if(parseInt(msg)!=0)
			{
				$('ul.statuses li:first-child').before(msg);
				$("ul.statuses:empty").append(msg);
				
				$('#lastTweet').html($('#inputField').val());
				
				$('#inputField').val('');
				recount();
			}
		}
		
	});

}