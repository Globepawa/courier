$(document).ready(function(){
    $('#sgn').click(function(){
       window.location.href = './front/sign_pad.html'
    });

//navigation
const pag;
$('#mn').click(function(){
 pag = "<?php echo include('../front/homepage.html'); ?>";
});
$('#drp').click(function(){
    pag = "<?php echo include('../front/dropoff.html'); ?>";
   });

});