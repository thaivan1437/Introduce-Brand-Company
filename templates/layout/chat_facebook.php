<style>
	div.chat_facebook
	{
		position:fixed;
		right:0;
		bottom:30px;
		width:270px;
		z-index:99999999999999;
	}
	div.tieude_chat
	{
		background: url(assets/images/mess.png) no-repeat right;
		
	    color: #fff;
	    width: 129px;
	    height: 38px;
	    font-size: 15px;
	    cursor: pointer;
	    font-family: roboto condensed;
	    text-align: center;
	    float: right;
	}
	.box-chat-mess1 {
		float: right;
		width: 240px;
	}
	@media(max-width: 960px) {
		.tieude_chat {
			background: url(assets/images/chat2.png) no-repeat right!important;
			height: 59px !important;
		}
	}
</style>
<div class="chat_facebook"><div class="tieude_chat"></div>
<div class="box-chat-mess1">
	<div class='fb-page chat-item box-chat-mess' style="display: none; float: right;" data-adapt-container-width='true' data-height='300' data-hide-cover='false' data-href='<?=$row_setting['facebook']?>' data-show-facepile='true' data-show-posts='false' data-small-header='false' data-tabs='messages' data-width='240'></div></div>
</div>
<script type="text/javascript">
	$(document).ready(function(e) {
        $('.tieude_chat').click(function(){
			$('.box-chat-mess').toggle();
		});
    });
</script>
