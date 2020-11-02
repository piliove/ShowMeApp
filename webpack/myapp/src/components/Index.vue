<template>
  <div id="main">
  	
  	<!--推荐导航-->
    <ul class="nav nav-pills" style="margin-top:3px;">
  		<li @click="ToggleTag(0)" role="presentation"><a href="#">热点</a></li>
  		<li @click="ToggleTag(1)" role="presentation"><a href="#">新闻</a></li>
  		<li @click="ToggleTag(2)" role="presentation"><a href="#">动态</a></li>	
  		<li @click="ToggleTag(3)" role="presentation"><a href="#">科技</a></li>
  		<li @click="ToggleTag(4)" role="presentation"><a href="#">图书</a></li>
  		<li @click="ToggleTag(5)" role="presentation"><a href="#">关注</a></li>
  		<div></div>
	</ul>

	<component :is="tmp"></component>
	
	
  </div>
</template>

<script>
// 引入组件
import Hot from '@/components/tab/Hot'
import News from '@/components/tab/News'
import Do from '@/components/tab/Do'
import Science from '@/components/tab/Science'
import Book from '@/components/tab/Book'
import Watch from '@/components/tab/Watch'

export default {
  name: 'Index',
  data () {
    return {
      tmp:'Hot'
    }
  },
  components:{
  	Hot,
  	News,
  	Do,
  	Science,
  	Book,
  	Watch
  },
  methods:{
  	ToggleTag(n){
  		switch(n){
  			case 0:
  				this.tmp = 'Hot';
  				break;
  			case 1:
  				this.tmp = 'News';
  				break;
  			case 2:
  				this.tmp = 'Do';
  				break;
  			case 3:
  				this.tmp = 'Science';
  				break;
  			case 4:
  				this.tmp = 'Book';
  				break;
  			case 5:
  				this.tmp = 'Watch';
  				break;
  		}
  	}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
ul div{
	width:100%;
	margin-top:40px;
	border-bottom:1px solid gainsboro;
	clear:both;
}
ul a:hover{
	color:#000;
}
.content::-webkit-scrollbar {display:none}
.content{
	height:600px;
	overflow-y: auto;
	z-index: -1;
}
.medias{
	border:1px solid red;
	width:100%;
	height:100px;
}
</style>
