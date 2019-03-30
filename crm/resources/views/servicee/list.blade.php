<style>

*{
  padding:0;
  margin:0;
}
table{
  border-collapse:collapse;
  margin-left:25%;
  color:#666;
    text-align: left;  display: inline-block
  }
a{
  text-decoration:none;
}
li{
   list-style:none;
}

h3{
    margin-left:35%;
  }
  td{
    padding-top:10;
    height:30px;
    vertical-align:bottom;

  }
.sub{
    width:170px; /* 宽度 */
	height: 40px; /* 高度 */
	border-width: 0px; /* 边框宽度 */
	border-radius: 3px; /* 边框半径 */
	background: #1E90FF; /* 背景颜色 */
	cursor: pointer; /* 鼠标移入按钮范围时出现手势 */
	outline: none; /* 不显示轮廓线 */
	font-family: Microsoft YaHei; /* 设置字体 */
	color: white; /* 字体颜色 */
	font-size: 17px; /* 字体大小 */

}
.tr{
    border:1px ;
}
div{
    width:1000px;
    padding-top:100;
    margin-left:10%;
}
.pagination {
    display: inline-block;
    padding-left:550;
    margin: 20px 0;
    border-radius: 4px;
}

.pagination>li{display:inline}
.pagination>li>a,
.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}
.pagination>li:first-child>
a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>
a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}
.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}
.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}
a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>客户服务日常安排</title>
</head>
<body>
<form >
<table>
    <h3> <a href="list">客户服务日常安排</a> <a href="add">新建客户服务记录</a> </h3>
    <tr>
        <td>服务类别：</td>
        <td><input type="text"></td>
        <td>客户类别：</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>客户名称：</td>
        <td><input type="text" name="service_name"></td>
        <td>联系人：</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>服务内容：</td>
        <td  colspan="4">
            <textarea name="service_feedback" id="" cols="70" rows="6"></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td >
            <input class="sub" type="submit" value="快速查询">
         </td><td colspan="3">
            <input class="sub" type="submit" value="高级查询"></td>
    </tr>
    </table>
  </form>
<div>
<table border=1 class="table">
  <tr class="tr">
      <td>选择</td>
      <td>客户名称</td>
      <td>客户类别</td>
      <td>销售方式</td>
      <td>服务类型</td>
      <td>服务日期</td>
      <td>服务内容</td>
      <td>销售员</td>
      <td>操作</td>
  </tr>
  @foreach($arr as $v)
  <tr>
      <td><input type="checkbox"></td>
      <td>{{$v->service_name}}</td>
      <td>{{$v->type_id}}</td>
      <td>零售</td>
      <td>{{$v->type_name}}</td>
      <td>{{$v->service_time}}</td>
      <td>{{$v->service_text}}</td>
      <td>{{$v->service_tel}}</td>
      <td><a href="del/{{$v->service_id}}">删除</a>    <a href="upd/{{$v->service_id}}">编辑</a>  </td>
  </tr>
  @endforeach
</table>

</div>
{{$arr->appends(['service_name'=>$service_name])->links()}}
</body>
</html>
