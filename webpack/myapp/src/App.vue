<template>
  <div id="app">
    <!--<img src="./assets/logo.png">-->
    <!--头部 开始-->
    	<div id="header">
    		<p>V-阅览室</p>
    	</div>
  		<!--头部结束-->
  		
  		<!--组件出口-->
  		<router-view></router-view>
  		
  		<!--头部 开始-->
  		<div id="footer">
  			<nav class="navbar navbar-default navbar-fixed-bottom" style="margin:0px;padding:0px;">
  				<div>
  						<router-link to="/index"><a><p>阅读</p><span><img src="./assets/sink/md-list-box.png"></span></a></router-link>
  						<router-link to="/star"><a><p>收藏</p><span><img src="./assets/sink/md-star.png"></span></a></router-link>
  						<router-link to="/search"><a><p>搜索</p><span><img src="./assets/sink/md-wifi.png"></span></a></router-link>
  						<router-link to="/me"><a><p>我的</p><span><img src="./assets/sink/md-person.png"></span></a></router-link>
  				</div>
				</nav>
  		</div>
  		<!--头部结束-->
  		
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
/* 头部 样式  */
#header{
	width:100%;
	height:65px;
	background:	#3CB371;
}
#header p{
	text-align: center;
	line-height:60px;
	color:#ffffff;
	font-size:22px;
	font-weight: bold;
}
/* 尾部 样式  */
#footer img{
	margin-top: 15px;
}
#footer a{
	color:#000;
	font-size:18px;
	display: flex;
	flex:4;
	float:left;
	width:25%;
	height:50px;
	text-decoration: none;
}
#footer a>p{
	margin-left:28px;
	line-height: 50px;
}
#footer a:hover{
	background-color:#3CB371;
	color:#ffffff;
}
</style>
