/**
 * Created by dubo on 16/6/3.
 */


$(document).ready(function(){
    $("#register").click(function(){

        var d = $("#registerform").serializeArray();
        console.log(d);
        $.post("./register.php",d,function(data){

            if(data == 1)
            {
                alert("注册成功");
                window.location.href="./learn-index.php";
            }
            else if(data != 1)
            {
                $("#error").html(data);

            }


        });
    });
    $("#response").click(function(){

        var d = $("#responseform").serializeArray();


        $.post("./addresponse.php",d,function(data){
            if(data==1){
                alert("请输入回复内容");
            }
            else{
                $.post("./responsetable.php",d,function(data){
                    // console.log("mydata");
                    // console.log(data);


                    var myjson = eval('(' + data + ')');
                    console.log("myjson");
                    console.log(myjson);
                    var list = "";
                    for(var i = 0; i < myjson.length; i++)
                    {
                        list = list +"<tr><td>"+myjson[i].name+"</td><td>"+myjson[i].message+"</td><td>"+myjson[i].timestamp+"</td></tr>";
                    }
                    $("#responsetable").html(list);
                    // console.log(list);

                });
            }


        });
    });
    $("#login").click(function(){

        var d = $("#loginform").serializeArray();
        console.log(d);
        $.post("./login.php",d,function(data){

            if(data == "")
            {
                alert("登陆成功");
                window.location.href="./learn-index.php";

            }
            else if(data != "")
            {
                $("#error2").html(data);

            }


        });
    });
    $("#modi").click(function(){
        var article_id=$("#article_id").val();
        console.log(article_id);
        $.post("./articletable.php",{article_id: $("#article_id").val()},function(data){
            console.log(data);
            var myjson = eval('(' + data + ')');

            console.log(myjson.length);
            console.log(myjson[0].title);
            $("#title").val(myjson[0].title);
            $("#content_code").val(myjson[0].content);
        });





    });
    $("#updata").click(function(){
        var d = $("#form_article").serializeArray();
        console.log(d);
        $.post("./updataarticle.php",d,function(data){
            if(data ==1)
            {
                alert("修改成功");
                $.post("./articletable.php",{article_id: $("#article_id").val()},function(data){
                    console.log("new");
                    console.log(data);

                    var myjson = eval('(' + data + ')');
                    var a=myjson[0].title;
                    var b=myjson[0].content;
                    var last_update=myjson[0].last_update
                    console.log(b);
                    var text1=a;

                    var text2="<div style=\"font-size:15px\" id='updatacontent'>"+b+"</div>";

                    $("#updatatitle").html(text1);

                    $("#updatacontent").html($.html2(text2));

                });

                $('#myModal').modal('hide')
            }
        });





    });

    $.extend({
        html2: function (text) {
            text = text.replace(/<R>/g, "<div style=\"color:red;\">");
            text = text.replace(/<\/R>/g, "</div>");
            text = text.replace(/<B>/g, "<div style=\"color:blue;\">");
            text = text.replace(/<\/B>/g, "</div>");
            text = text.replace(/<G>/g, "<div style=\"color:green;\">");
            text = text.replace(/<\/G>/g, "</div>");
            text = text.replace(/<YUN>/g, "<a href='");

            text = text.replace(/<\/YUN>/g, "'>百度云地址</a>");
            text = text.replace(/\n/g, "<br>");
            return text;
        }
    })
});





