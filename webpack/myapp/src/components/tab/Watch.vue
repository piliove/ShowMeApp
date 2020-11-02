<template>
	<div id="main">
		<div class="content">
			<p>附近的人>></p>
			<div class="list-group">
  				<a href="#" class="list-group-item active">
    				<h4 class="list-group-item-heading">最新发布</h4>
    				<p class="list-group-item-text">文章：测试1</p>
    				<p class="list-group-item-text">查看</p>
  				</a>
  				<a href="#" class="list-group-item">
    				<h4 class="list-group-item-heading">最新发布</h4>
    				<p class="list-group-item-text">文章：测试2</p>
    				<p class="list-group-item-text">查看</p>
  				</a>
  				<a href="#" class="list-group-item">
    				<h4 class="list-group-item-heading">最新发布</h4>
    				<p class="list-group-item-text">文章：测试3</p>
    				<p class="list-group-item-text">查看</p>
  				</a>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  name: 'Watch',
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.content{
	width: 100%;
}
.content p{
	margin-left: 10px;
	margin-top:10px;
	font-size: 22px;
}
.content .list-group{
	width: 100%;
}
</style>