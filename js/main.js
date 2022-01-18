$(function(){
    $("#signup_form").hide();

    $("#signin_caller").on('click', function(){
        $("#signin_form").show();
        $("#signup_form").hide();
        $("#signup_caller").addClass('inactive underlineHover').removeClass('active');
        $(this).addClass('active').removeClass('inactive underlineHover');
    });
    $("#signup_caller").on('click',function(){
        $("#signup_form").show();
        $("#signin_form").hide();
        $("#signin_caller").addClass('inactive underlineHover').removeClass('active');
        $(this).addClass('active').removeClass('inactive underlineHover');
    });


});





// Set the options that I want
// toastr.options = {
//     "closeButton": true,
//     "newestOnTop": false,
//     "progressBar": true,
//     "positionClass": "toast-bottom-full-width",
//     "preventDuplicates": false,
//     "onclick": null,
//     "showDuration": "300",
//     "hideDuration": "1000",
//     "timeOut": "5000",
//     "extendedTimeOut": "1000",
//     "showEasing": "swing",
//     "hideEasing": "linear",
//     "showMethod": "fadeIn",
//     "hideMethod": "fadeOut"
//   }
  
//   $(document).ready(function onDocumentReady() {  
//     setInterval(function doThisEveryTwoSeconds() {
//       toastr.success("Hello World!");
//     }, 2000);   // 2000 is 2 seconds  
//   });