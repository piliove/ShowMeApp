<template>
  <div id="contain">
  	<div class="deng"><p>登录</p></div>
	<form>
  		<div class="form-group">
    		<input type="text" class="form-control" id="namem" name="username" placeholder="请输入用户名">
  		</div>
  		<div class="form-group">
    		<input type="password" class="form-control" id="passwordm" name="password" placeholder="请输入密码">
  		</div>
  		<button type="submit" class="btn btn-lg btn-block btn-success">登录</button>
  		<button type="reset" class="btn btn-lg btn-block btn-danger">重置</button>
	</form>
	
  </div>
</template>

<script>
export default {
  name: 'Login',
  data () {
    return {
			
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#contain{
	width:100%;
	height: 100%;
	margin:30px auto;
}
.deng p{
	text-align: center;
	font-size: 24px;
	margin-bottom: 50px;
	font-weight: 700;
}
form p{
	font-size: 22px;
}
form input[type=text]{
	height:50px;
	font-size:20px;
}
form input[type=password]{
	height:50px;
	font-size:20px;
}
.pic img{
	display: block;
	width:150px;
	height:150px;
	border:5px solid #ACEDB2;
	border-radius:50%;
	margin:30px auto;
}

</style>