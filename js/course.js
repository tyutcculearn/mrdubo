$(document).ready(function(){
    $("#bvideo").click(function () {
        var value = document.getElementById("video").style.display;
        if(value == "none"){
            $("#video").css("display","block");
        }else{
            $("#video").css("display","none");
        }
    });
    $("#insert_video").click(function () {
        var id = $("#videoID").val();
        var code = $("#content_code").val();
        code = code + "<YUN>" +id+ "</YUN>";
        $("#content_code").val(code);
        $("#content_html").css("display","none");
        $("#videoID").val("");
    });
    $("#Strong").click(function () {
        var text = $("#content_code")[0]
        var start = text.selectionStart;
        var end = text.selectionEnd;
        var value = $("#content_code").val();
        var newtext = value.substr(0,start) + "<Strong>" + value.substr(start,end - start) + "</Strong>" + value.substr(end);
        $("#content_code").val(newtext);
    });
    $("#R").click(function () {
        var text = $("#content_code")[0]
        var start = text.selectionStart;
        var end = text.selectionEnd;
        var value = $("#content_code").val();
        var newtext = value.substr(0,start) + "<R>" + value.substr(start,end - start) + "</R>" + value.substr(end);
        $("#content_code").val(newtext);
    }); 
    $("#B").click(function () {
        var text = $("#content_code")[0]
        var start = text.selectionStart;
        var end = text.selectionEnd;
        var value = $("#content_code").val();
        var newtext = value.substr(0,start) + "<B>" + value.substr(start,end - start) + "</B>" + value.substr(end);
        $("#content_code").val(newtext);
    });
    $("#G").click(function () {
        var text = $("#content_code")[0]
        var start = text.selectionStart;
        var end = text.selectionEnd;
        var value = $("#content_code").val();
        var newtext = value.substr(0,start) + "<G>" + value.substr(start,end - start) + "</G>" + value.substr(end);
        $("#content_code").val(newtext);
    });
    $("#create").click(function () {
        var form = $("#form_article").serializeArray();
            $.post("./article.php",form,function(result) {
                console.log(result);
                if (result == "success") {
                    alert("发表成功");
                    $("#title").val("");
                    $("#content_code").val("");
                    $("#videoID").html("");
                    $("#cancel").click();
                    $.post("article_dis.php",{course_id:$("#course_id").val()},function (result) {
                        console.log(result);
                        var json = eval('(' + result + ')');
                        var html = ''
                        for(var i = 0; i < json.length; i++)
                        {
                            html =html + "<a style=\"color: black\" href='./response.php?article_id="+json[i]['id']+"'><h2>"+json[i]['title']+"</h2><p>"+json[i]['content']+"</p></a>"
                        }
                        $("#article_normal").html(html);
                    });

                }
            });
        });
    //JSON
    $("#edit").click(function () {
        $("#title_modal").html("修改文章");
        $.post("article_dis.php",{article_id:$("#article_id").val()},function(result){
            var json = eval('(' + result + ')');
            $("#title").val(json.title);
            $("#content_code").val(json.content);
            var value = change($("#content_code").val());
            function change (value)
            {
                value = value.replace(/<YUN>/g,"(影片不提供预览)<br>(Video ID:");
                value = value.replace(/<\/YUN>/g,")");
                value = value.replace(/\n/g,"<br>");
                value = value.replace(/<R>/g,"<span style=\"color:red;\">");
                value = value.replace(/<\/R>/g,"</span>");
                value = value.replace(/<B>/g,"<span style=\"color:blue;\">");
                value = value.replace(/<\/B>/g,"</span>");
                value = value.replace(/<G>/g,"<span style=\"color:green;\">");
                value = value.replace(/<\/G>/g,"</span>");
                return value;
            }
            $("#content_html").html(value);
        });
        $("#video").css("display","none");
        $("#videoID").html("");
        $("#content_html").css("display","none");
    });
    //JSON
    $("#Bresponse").click(function () {
        var form = $("#responseform").serializeArray();
        $.post("response.php",form,function(result){
            if(result == "success")
            {
                $.post("res_dis.php",form,function(result){
                    var json = eval('(' + result + ')');
                    var html = "";
                    for(var i = 0; i < json.length; i++)
                    {
                        html = html +"<tr class='col-md-11' style='margin-left: 5%'>" +
                            "<td class='col-md-1'>"+json[i].name+":</td>" +
                            "<td class='col-md-8'>"+json[i].message+"</td>" +
                            "<td class='col-md-2'>"+json[i].timestamp+"</td>" +
                            "</tr>";
                    }
                    $("#respondlist").html(html);
                });
                $("#response").val("");
            }
        });
    })
});

