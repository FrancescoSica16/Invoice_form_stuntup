        // $('button.btn-primary').mouseenter(function(){

        // $(this).css('background-color','red');
        // })
        // $('button.btn-primary').mouseleave(function(){

        // $(this).css('background-color','');
        // })

        // $('#mostra').click(function () { 
        //     $('p').show();
            
        // });   
        // $('#nascondi').click(function () { 
        //     $('p').hide();
            
        // });

        // $('h4').click(function () { 
        //     $('p').toggle(1000);
        // });

        // $('#mostra').click(function () { 
        //     $("h4").fadeIn(1000);          
        // });
        // $('#nascondi').click(function () { 
        //     $('h4').fadeOut(1000);          
        // });
        // $('#mostra').click(function () { 
        //     $("h4").slideDown(1000);          
        // });
        // $('#nascondi').click(function () { 
        //     $('h4').slideUp(1000);          
        // });

        //  $('#Start').click(function (){ 
        //      $('.titol').animate({
        //          right: '250px',
                    
        //      },2000);  
        //      $('.titol').animate({
        //          right: '500px',
                   
        //      },2000);          
        //  });

        $('#toggle').click(function () {
            $('p').prepend ('<strong>appeso')
        });

        $('#Start').click(function (){ 
             $('.titol').animate({
                 right: '250px',
                    
             },2000, function () {
                     alert('ciao')
                 })      
         });

         $('#Stop').click(function (){ 
             $('.titol').stop(false,true); 
                    
         });



        $('button.btn-primary').on({
            focus: function(){
                $(this).css('background-color','red');
            },
            blur: function(){
                $(this).css('background-color','blue');
            },
            change: function(){
                $(this).css('background-color','yellow');
            },
        })