<style>
*{
  padding:0;
  margin:0;
}
a{
  text-decoration:none;
}
li{
   list-style:none;
}
table{
    color:#666;
text-align: left;  display: inline-block
}
  table{
  width:800px;
  border-collapse:collapse;
  margin-left:25%;
  }
  h3{
    margin-left:35%;
  }
td{
    height:30px;
    vertical-align:bottom;
    padding-top:10;
  }

.a{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 4px;
    margin-left:40%;
}
.td{

    text-align: center;//文字居中
    margin: 0 auto;
    text-align: left;

}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>客户端服务修改</title>
</head>
<body>
    <form action="/servicee/update" method="post" >
    @csrf

    <h3> <a href="list">客户服务日常安排</a> <a href="">新建客户服务记录</a> </h3>
    <input type="hidden" name="service_id" value="{{$arr->service_id}}">
        <table >
            <tr>
                <td class="td">服务类型：</td>
                <td>
                <select name="type_id" id="">
                @foreach($type as $v)
                    <option value="{{$v->type_id}}" id="type_id"> {{$v->type_name}}</option>
                @endforeach

                </select>
                </td>
                <td></td>
                <td  class="td">服务日期</td>
                <td><input type="text" name="service_time"value="{{date('Y-m-d ', time())}}"></td>
            </tr>
            <tr>
                <td  class="td">客户名称：</td>
                <td><input type="text" name="service_name" id="service_name" value="{{$arr->service_name}}"></td>
                <td></td>
                <td  class="td">联系人：</td>
                <td><input type="text" name="service_tel" id="service_tel"  value="{{$arr->service_tel}}"></td>
            </tr>
            <tr>
                <td class="td">服务成本：</td>
                <td><input type="text" name="service_price" value="{{$arr->service_price}}"></td>
                <td></td>
                <td class="td">时间成本：</td>
                <td><input type="text" name="service_cost" value="{{$arr->service_cost}}" ></td>
            </tr>
            <tr>
                <td class="td">服务内容描述：</td>
                <td  colspan="4">
                    <textarea name="service_text" id="" cols="70" rows="6" id="service_text" > {{$arr->service_text}}</textarea>
                </td>
            </tr>
            </tr>
                <td  >
                     <b>   客户反馈</b>
                </td>
            <tr>
            <tr>
                <td class="td">客户满意度：</td>
                <td colspan="4"><input type="text" value="{{$arr->service_satisfied}}"  name="service_satisfied"></td>
            </tr>
            <tr>
                <td class="td">客户反馈意见：</td>
                <td  colspan="4">
                    <textarea name="service_feedback" id="" cols="70" rows="6">{{$arr->service_feedback}}</textarea>
                </td>
            </tr>
            </tr>
                <td >
                    <b>描述</b>
                 </td>
            <tr>
            <tr>
                <td class="td">备注1：</td>
                <td  colspan="4">
                    <textarea name="service_remarks1" id="" cols="70" rows="6">{{$arr->service_remarks1}}</textarea>
                </td>
            </tr>
            <tr>
                <td class="td">备注2：</td>
                <td  colspan="4">
                    <textarea name="service_remarks2" id="" cols="70" rows="6">{{$arr->service_remarks2}}</textarea>
                </td>
            </tr>
            <tr >
                <td colspan="5"><input type="submit" id="sub" value="提交" class="a" class="sub"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<script src="\js\jquery-3.1.1.min.js"></script>
<script src="\layui\layui.js"></script>
<script src="\layui\layui.all.js"></script>

<script>
    $(function(){
        layui.use(['layer'],function(){
            $("#sub").click(function(){
                var service_name=$('#service_name').val();
                var service_tel=$('#service_tel').val();
                var service_text=$('#service_text').val();

                // console.log(service_name);
                // return false;
                if(service_name==""){
                    layer.msg("客户名称不能为空",{icon:2});
                    return false;
                }
                if(service_tel==""){
                    layer.msg("联系人不能为空",{icon:2});
                    return false;
                }
                if(service_text==""){
                    layer.msg("服务内容描述不能为空",{icon:2});
                    return false;
                }

        })

    })

    })
</script>
