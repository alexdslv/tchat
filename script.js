$(".addLike").on("click", function() {
    event.preventDefault();

    const idMessage = $(this).attr("data-id")
    
    
    $.ajax({
        url: "functions/addLike.php",
        type: "post",
        data: { 
            id= idMessage
        },

        success : function(statut){
            console.log("success")

        },
        error : function(result, statut, error){
            console.log("error")
        },
        complete : function(result, statut){
            console.log("complete")
            console.log(result.responsiveText)
        }
    })
})

