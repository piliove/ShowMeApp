<template>
  <div id="content">
  	
    <div class="search">
    	<!--<input type="text" name="search" v-model="text" >-->
    	<!--<input type="submit" value="搜索" />-->
    	<input type="text" v-model='msg'/>
    	<button v-on:click="getmsg()">搜</button>
    </div>
    <div class="min-con">
    	<a href="javascript:;">表情</a>
    	<a href="javascript:;">图库</a>
    	<a href="javascript:;">围观</a>
    	<a href="javascript:;">咨询</a>
    	<a href="javascript:;">最热</a>
    </div>
    <div class="cons">
				<!--文章列表-->
				<div class="divs" v-for="item in list">
						<img :src="item.thumb" />
  					<div class="title"><p>{{ item.title }}</p></div>
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
//导入组件
import axios from 'axios';

export default {
  name: 'Search',
  data () {
    return {
      msg:'',
      list:[]
    }
  },
  methods:{
  	getmsg(){
  		//获取data中的数据
  		let msg = this.msg;
  		console.log(msg)
			
			let url = 'http://129.204.86.77/get_search.php?msg='+msg;
  	
		axios.get(url).then(res=>{
			if(res.status == 200){
				this.list = res.data
			}else{
				console.log('暂无数据');
			}
		})

  		
  		
 		}

	},
	created(){
//	let msg = this.msg;
//		let url = 'http://localhost/get_search.php?msg='+msg;
  	
//		axios.get(url).then(res=>{
//			if(res.status == 200){
//				this.list = res.data
//			}else{
//				console.log('暂无数据');
//			}
//		})
  	
  	}
	
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.search{
	width:350px;
	height: 50px;
	margin:10px auto;
}
.search input[type=text]{
	width:300px;
	height: 40px;
	border-radius: 10px;
}
.search button{
	height:40px;
	width:42px;
	background:#fff;
	border-radius:20px;
}
.min-con{
	width:100%;
	height:30px;
}
.min-con a{
	margin-left: 30px;
	font-size: 20px;
}

.cons{
	width:100%;
}
.cons .divs{
	width:100%;
	height:100px;
	border-bottom: 1px solid ghostwhite;
}
.divs img{
	float:left;
	width:100px;
	margin-right:5px;
}
.divs .title{
	float: left;
	font-size: 18px;
	display: inline-block;
	height:30px;
	width:270px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.divs .desc{
	font-size: 14px;
	margin:5px;
	height:70px;
	width:350px;
}
.divs .con{
	margin-left:100px;
	width:274px;
	height:20px;
}
</style>
