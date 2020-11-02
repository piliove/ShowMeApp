<template>
  <div id="contain">
    <div class="pic">
			<img src="../assets/pic/md-archive.png" alt="" />	
    </div>
    <ul class="list-group">
  		<li class="list-group-item">
    		<span class="badge">>></span>
    		个人信息
  		</li>
  		<li class="list-group-item">
    		<span class="badge">>></span>
    		修改密码
  		</li>
  		<li class="list-group-item">
    		<span class="badge">>></span>
    		我要发布
  		</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item">
    		<span class="badge">>></span>
    		关注我的
  		</li>
  		<li class="list-group-item">
    		<span class="badge">>></span>
    		关于我们
  		</li>
  		<li class="list-group-item">
    		<span class="badge">>></span>
    		公司简介
  		</li>
		</ul>
		<router-link to="/login"><button type="button" class="btn-block btn btn-success">退出</button></router-link>
  </div>
</template>

<script>
export default {
  name: 'Me',
  data () {
    return {
			
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.pic img{
	display: block;
	width:150px;
	height:150px;
	border:5px solid #ACEDB2;
	border-radius:50%;
	margin:30px auto;
}

</style>
