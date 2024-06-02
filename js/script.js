document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});  
jQuery(document).ready(function () {
     
    $(".phone").mask("+380 (99) 999-99-99"); 
   
  
   jQuery('.send-form').click( function() {
       var form = jQuery(this).closest('form');
       
       if ( form.valid() ) {
           form.css('opacity','.5');
           var actUrl = form.attr('action');

           jQuery.ajax({
               url: actUrl,
               type: 'post',
               dataType: 'html',
               data: form.serialize(),
               success: function(data) {
                   form.html(data);
                   form.css('opacity','1');
                   //form.find('.status').html('форма отправлена успешно');
                   //$('#myModal').modal('show') // для бутстрапа
               },
               error:	 function() {
                    form.find('.status').html('серверная ошибка');
               }
           });
       }
   });


});



function toggleMenu() {
    const navLinks = document.getElementById('nav-links');
    const body = document.body;
    navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
    if (navLinks.style.display === 'flex') {
        body.classList.add('no-scroll');
    } else {
        body.classList.remove('no-scroll');
    }
}