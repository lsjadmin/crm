<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
@include('looke.sty')
       注册
<body>
    <form action="">
        <table border="1">
            <tr>
                <td>邮箱：</td>
                <td><input type="text" name="user_email" id="user_email"></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="text" name="user_pwd" id="user_pwd"></td>
            </tr>
            <tr>
                <td>验证码：</td>
                <td><input type="text" name="code" id="code"></td>
                <td> <input type="button" value="发送验证码" class="code"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="button" value="注册" class="submit">
                </td>
                
            </tr>
        </table>
    </form>
</body>
</html>
<script src="\crm\public\layui\layui.all.js"></script>
<script src="\crm\public\layui\layui.js"></script>
<script src="\crm\public\js\jquery-3.1.1.min.js"></script>
      
<script>
    $(function(){
        //发送验证码
        $(document).on("click",".code",function(){
           // alert("a");
            var email=$("#user_email").val();
            var reg=/^\w+@\w+\.com$/;
            if(email==''){
                layer.msg('邮箱必填',{icon:2});
                 return false;
            }else if(!reg.test(email)){
                layer.msg('填写正确邮箱格式',{icon:2});
                 return false;
            }
            $.post(
                "code",
                {email:email},
                function(res){
                    if(res.code==1){
                    layer.msg(res.font,{icon:res.code});
                  }
                },
                'json'
            )
        })
        //注册
        $(document).on("click",".submit",function(){
            var email=$("#user_email").val();
            var pwd=$("#user_pwd").val();
            var code=$("#code").val(); 
            $.post(
                "email",
                {user_email:email,user_pwd:pwd,user_code:code},
                function(res){
                    if(res.code==1){
                     layer.msg(res.font,{icon:res.code});
                        // location.href="";
                    }
                },
                'json'
            )  
      })
    })
</script>