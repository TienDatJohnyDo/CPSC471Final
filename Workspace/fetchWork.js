function selectBname(){
    
    var x =document.getElementById("Bname").value; 
    $.ajax({
        url:"showWork.php",
        method:"POST",
        data:{
            id: x
        },
        success:function(data){
            $("#ans").html(data);

        }
    })
}