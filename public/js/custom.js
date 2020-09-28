var swal = require('sweetalert');

$(document).ready(function(){
    likeProduct(id);
    addToCart(id);
    
});

function likeProduct(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
        }
    });

    $.ajax({
        url:"/like/" + id,
        method:"POST",
        data: "",
        success:function(){
            $(".likee").click(function(){
                $(this).removeClass("far fa-heart").addClass("fas fa-heart");
            });
        }
    });

    
}
function addToCart(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
        }
    });
    $.ajax({
        url:"/card/addToCart/" + id,
        method:"POST",
        success: function(response) {
            swal(
            response.message,
            "",
            response.success,
            )
        },
    });

    
}

// function addToCart(id) {
//     swal({
//         title: "Ajouté au panier",
//         text: "",
//         type: "success",
//         showCancelButton: !0,
//         confirmButtonText: "Oui, Ajouté!",
//         cancelButtonText: "Non",
//         reverseButtons: !0
//     }).then(function (e) {

//         if (e.value === true) {
//             var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

//             $.ajax({
//                 type: 'POST',
//                 url:"/card/addToCart/" + id,
//                 data: {_token: CSRF_TOKEN},
//                 // dataType: 'JSON',
//                 success: function (results) {

//                     if (results.success === true) {
//                         swal("Done!", results.message, "success");
//                     } else {
//                         swal("Error!", results.message, "error");
//                     }
//                 }
//             });

//         } else {
//             e.dismiss;
//         }

//     }, function (dismiss) {
//         return false;
//     })
// }