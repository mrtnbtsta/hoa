$(document).ready(function(){

    createAccount();
});

function createAccount(){
    $("#btnRegister").on("click", function(e){
        e.preventDefault();
        console.log("Clicked")
        // const formData = new FormData();

        // const file = $("#fileInput")[0].files;
        // formData.append("username", $("#username").val());
        // formData.append("fileInput", file);


        $.ajax({
            url: "../data/register.php",
            type: "POST",
            data: {username: $("#username").val()},
            success: function(response){
                if(response === "username"){
                    console.log("username empty")
                }
            }
        })

    });
}