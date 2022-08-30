
  function selectOsom(){

    var x = document.getElementById("Osom_code").value;

    $.ajax({
      url:"display.php",
      method:"POST",
      data:{
        id : x
      },
      success:function(data){
        $('#oldOsom').html(data);
      }
    })

  }
 