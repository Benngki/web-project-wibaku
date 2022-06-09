// var anggota = {"nama"   : ["Benediktus Hengki Setiawan", "Muhammad Reza Faturrahman", "Kevin Aurelius Suryono"],
//                 "nim"   : [2502025302, 2501977626, 2540129281]
//             };


// function mouseOut(e) {
//     $("#btn_daftar").removeClass("bg-light text-primary");
// }

// function mouseOver() {
    //     $("#btn_daftar").addClass("bg-light text-primary");
    // }
$screen_width = screen.width

$("#btn_daftar").hover(function () {
        // over
        $(this).addClass("bg-light text-primary");            
    }, function () {
        // out
        $(this).removeClass("bg-light text-primary");
    }
);

$(document).ready(function () {
    // nav
    // $(".active").css("color", "#D1B280");      
    // $("#menu a").hover(function () {
    //         // over            
    //         $(this).addClass("active");
    //     }, function () {
    //         // out
    //         $(this).removeClass("active");
    //     }
    // );
});