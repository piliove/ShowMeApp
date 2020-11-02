<template>

	<!--文章列表-->
	<div id="art">
		<h2 style="text-align:center;">{{ artData.title }}</h2>
		<div class="info">
			<p class="auth"><span>作者:&nbsp;{{ artData.auth }}</span><span class="liuliang">浏览量:&nbsp;111</span></p>
			<div class="desc">
				<p style="text-align: left;margin:5px;">描述:&nbsp;{{ artData.desc }}</p>

			</div>
			<div class="contents">
				{{ artData.content }}
			</div>
		</div>
		<a href="javascript:;" @click="back()" style="margin-left:5px;">返回</a>
		<a href="javascript:;" @click="back()">下一篇</a>
		<div style="display:block;border-bottom:1px solid beige;">&nbsp;</div>
		<h1>&nbsp;</h1>
	</div>

</template>

<script>
//导入组件
import axios from 'axios';

export default {
  name: 'Detail',
  data () {
    return {
      artData:[]
    }
  },
  methods:{
  	back(){
  		this.$router.go(-1);//返回上一层
  	}
  },
  created(){
  	// 文章的id
  	let id = this.$route.params.id;
  	let url = 'http://129.204.86.77/get_detail.php?id='+id;

  	axios.get(url).then(res=>{
			if(res.status == 200){
				this.artData = res.data
			}else{
				console.log('暂无数据');
			}
		})
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#art{
	margin:0px auto;
	width:370px;
}
#art .desc{
	width:320px;
	height:60px;
	border-left:5px solid #3CB371;
	margin:0px auto;
	background:	#F5F5F5;
	font-size: 16px;
}
#art .info p{
	text-align: center;
}
#art .info span{
	margin-right:10px;
}
#art .info .contents{
	margin-top:10px;
	margin-bottom: 10px;
	text-indent: 2em;
	font-size: 18px;
}
</style>
