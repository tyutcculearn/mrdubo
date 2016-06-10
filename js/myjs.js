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
        console.log(d);
        $.post("./addresponse.php",d,function(data){

            $.post("./responsetable.php",d,function(data){
                console.log("mydata");
                console.log(data);
                var myjson = eval('(' + data + ')');
                console.log("myjson");
                console.log(myjson);
                var list = "";
                for(var i = 0; i < myjson.length; i++)
                {
                    list = list +"<tr class=\"col-md-11\" style=\"margin-left: 5%\"><td class=\"col-md-1\">"+myjson[i].Name+"</td><td class=\"col-md-8\">"+myjson[i].message+"</td><td class=\"col-md-2\">"+myjson[i].timestamp+"</td></tr>";
                }
                $("#responsetable").html(list);
            });
            $("#text33").val("");

        });
    });
    $("#login").click(function(){

        var d = $("#loginform").serializeArray();
        console.log(d);
        $.post("./login.php",d,function(data){

            if(data == 1)
            {
                alert("登陆成功");
                window.location.href="./learn-index.php";
                
            }
            else if(data != 1)
            {
                $("#error2").html(data);

            }


        });
    });
});



