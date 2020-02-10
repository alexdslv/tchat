$(".addLike").on("click", function() {
    event.preventDefault();
    
    
    $.ajax({
        url: "functions/addLikes.php",
        type: "post",
        data: ""
    })
})

id


