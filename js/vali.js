$(function(){

var $registrationForm = $('#form');
if($registrationForm.length){
  $registrationForm.validate({
      rules:{
        email: {
          required: true}
        },
        messages :{
          email:{
            required:"Please enter your full name"

          }
        }
      })
    }
  })