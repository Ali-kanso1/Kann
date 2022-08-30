function select(){
    var x = document.getElementById("gaming").value;

    $.ajax({
        url: "showGame.php",
        method: "POST",
        data:{
            id: x
        },
        success:function(data){
            $("#imageOf").html(data);
        }
    })
}