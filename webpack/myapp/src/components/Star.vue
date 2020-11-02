<template>
  <div id="main">
  	
		<!--滚动列表-->
		<div class="content">
				<p><kbd style="background:#3CB371">收藏专栏</kbd></p>
				
				<!--判断是否为收藏-->
				<div class="ifs" v-if="">
					<!--文章列表-->
					<div class="medias" v-for="item in list">
						<img :src="item.thumb" />
  						<!--<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1560065738735&di=7f3827878bb2df20477e64e90b3e93f1&imgtype=0&src=http%3A%2F%2Fwx3.sinaimg.cn%2Forj360%2F9b8e77b8gy1g3lkp9dedpg205k05kh8v.gif" alt="" />-->
  						<div class="title"><router-link :to="{name:'Detail',params:{id:item.id}}"><p>{{ item.title }}</p></router-link></div>
  						<div class="desc"><p>{{ item.desc }}</p></div>
  						<div class="con">
  							<span>{{ item.auth }}</span>
  							<span>{{ item.ctime }}</span>
  							<a style="float:right;"><img src="../assets/sink/stars.png"></a>
  						</div>
					</div>
				</div>
				
				
		</div>
		
  </div>
</template>

<script>
export default {
  name: 'Star',
  data () {
    return {
      list:[
      	{id:1,title:'我是一个标题',desc:'我是一个描述',auth:'小明',ctime:new Date().toLocaleString(),thumb:'https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=4262802609,2257963828&fm=26&gp=0.jpg'},
      	{id:2,title:'只用于测试',desc:'我是一个描述',auth:'小米',ctime:new Date().toLocaleString(),thumb:'https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=4262802609,2257963828&fm=26&gp=0.jpg'},
      	{id:3,title:'测试偶用',desc:'我是一个描述',auth:'小号',ctime:new Date().toLocaleString(),thumb:'https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=4262802609,2257963828&fm=26&gp=0.jpg'},
      	{id:4,title:'111111',desc:'我是一个描述',auth:'小明',ctime:new Date().toLocaleString(),thumb:'https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=4262802609,2257963828&fm=26&gp=0.jpg'},
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.content p{
	font-size:20px;
	margin-left: 10px;
}
ul div{
	width:100%;
	margin-top:40px;
	border-bottom:1px solid gainsboro;
}
ul a:hover{
	color:#000;
}
.content::-webkit-scrollbar {display:none}
.content{
	height:620px;
	overflow-y: auto;
	z-index: -1;
}
.medias{
	width:100%;
	height:100px;
	border-bottom: 1px solid gainsboro;
}
.medias img{
	float:left;
	width:100px;
	margin-right:5px;
}
.medias .title{
	float: left;
	font-size: 22px;
	height:30px;
	width:265px;
}
.medias .desc{
	font-size: 18px;
	margin:5px;
	height:60px;
	width:265px;
}
.medias .con{
	margin-left:100px;
	width:270px;
	height:20px;
}
.con img{
	width:20px;
}
</style>
