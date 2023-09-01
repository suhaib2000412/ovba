$(function(){
    var $reg = $("form");
    if ($reg.length) {
        $reg.validate({
            rules:{
                name:{
                    required:true
                }
            },
            message:{
                name:{
                    required:'user name is mendotory'
                }
            }
        })
    }
})