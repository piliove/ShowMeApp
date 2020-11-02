<template>
		<div id="main">
			<h2>{{ title }}</h2>
			
			<div class="content">
				<p>欢迎大家能够莅临社区，希望大家多多贡献力量</p>
				<p class="p1">通知：</p>
				<p>本App是基于安卓平台开发的一款线上有关集技术交流，新闻资讯于一身的，交互式的手机端app,可以到安卓平台进行下载</p>
				<p>支持安卓市场,Android,安卓,安智市场-国内最专业的Android安卓手机电子市场,提供海量安卓软件、Android手机游戏、安卓最新汉化软件资源及最新APK汉化、汉化破解APP、APK免费...</p>
				<p class="p1">关于：</p>
				<p>交流博客网站: <a href="http://www.lijianz.cn">www.lijianz.cn</a></p>
				<p>如果需要该app源代码，可到github仓库进行下载<a href="https://github.com/piliove">github.com/piliove</a>,开发者新建了github的banrch分支可以进行多人协作</p>
				<p>由于该手机app端开发周期较短，仍有非常大的，非常多的问题，希望大家能够谅解！只用三天多的时间开发，以后还会更新的请关注github</p>
			</div>
		</div>
  	
</template>

<script>
export default {
  name: '',
  data () {
    return {
    	title:'公告',
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h2{
	margin-left: 20px;
}
.content{
	margin-left: 10px;
}
.content p{
	font-size: 18px;
}
.p1{
	font-weight: bold;
}
</style>
