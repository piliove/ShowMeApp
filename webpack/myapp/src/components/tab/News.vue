<template>
	<div id="main">
		
		<!--滚动列表-->
		<div class="content">
				<!--文章列表-->
				<div class="medias" v-for="item in list">
					<router-link :to="{name:'Detail',params:{id:item.id}}"><img :src="item.thumb" /></router-link>
  					<!--<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1560065738735&di=7f3827878bb2df20477e64e90b3e93f1&imgtype=0&src=http%3A%2F%2Fwx3.sinaimg.cn%2Forj360%2F9b8e77b8gy1g3lkp9dedpg205k05kh8v.gif" alt="" />-->
  					<div class="title"><router-link :to="{name:'Detail',params:{id:item.id}}"><p>{{ item.title }}</p></router-link></div>
  					<div class="desc"><p>{{ item.desc }}</p></div>
  					<div class="con">
  						<span>{{ item.auth }}</span>
  						<span>{{ item.ctime }}</span>
  						<a style="float:right;">&nbsp;收藏</a>
  						<a v-if="item.type == 1" style="float:right;"><kbd>精华</kbd></a>
  					</div>
				</div>
		</div>
		
	</div>
</template>

<script>
// 导入组件
import axios from 'axios';

export default {
  name: 'News',
  data () {
    return {
    	list:[]
    }
  },
  created(){
  		// 设置url
		let url = 'http://129.204.86.77/get_data.php?cid=1';
  		// 发送 ajax
  		// 使用axios
		axios.get(url).then(res=>{
			if(res.status == 200){
				this.list = res.data
			}else{
				console.log('暂无数据');
			}
		})
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
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
	font-size: 18px;
	display: inline-block;
	height:30px;
	width:270px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.medias .desc{
	font-size: 14px;
	margin:5px;
	height:70px;
	width:350px;
}
.medias .con{
	margin-left:100px;
	width:274px;
	height:20px;
}
</style>