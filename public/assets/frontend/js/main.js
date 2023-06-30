(function($) {
    "use strict";

    $(document).ready(function(){

      $('.show_hide').click(function(){
        $('.site_left_offcanvase').toggleClass('active');
        $('.chat_content_box').toggleClass('active');
      });
      
      $('.offcanvase_button').click(function(){
        $('.site_left_offcanvase').addClass('active');
        $('.chat_content_box').addClass('active');
      });

      $('.popup_active').click(function(){
        $('.user_profile').toggleClass('active');
        $('.setting_for_site').removeClass('active');
        $('.sign_in_options').removeClass('active');
      });

      $('.settings').click(function(){
        $('.user_profile').removeClass('active');
        $('.setting_for_site').toggleClass('active');
        $('.sign_in_options').removeClass('active');
      });

      $('.sign-in').click(function(){
        $('.user_profile').removeClass('active');
        $('.setting_for_site').removeClass('active');
        $('.sign_in_options').toggleClass('active');
      });

    })

   

    // const bodyclass = document.querySelector('body');
    // const popup = document.querySelector('.popup_active');
    // const user = document.querySelector('.user_profile');

    // popup.addEventListener('click', function(e){
    //   e.preventDefault();
    //   user.classList.toggle('active');
    //   settings.classList.remove('active');
    //   options.classList.remove('active')
    // });
    
    // const setting = document.querySelector('.settings');
    // const settings = document.querySelector('.setting_for_site');

    // setting.addEventListener('click', function(e){
    //   e.preventDefault();
    //   settings.classList.toggle('active');
    //   user.classList.remove('active');
    //   options.classList.remove('active')
    // });

    // const signin = document.querySelector('.sign-in');
    // const options = document.querySelector('.sign_in_options');

    // signin.addEventListener('click', function(e){
    //   e.preventDefault();
    //   options.classList.toggle('active')
    //   user.classList.remove('active');
    //   settings.classList.remove('active');
    // });


   
    // $('.more_item').click(function(e){
    //   e.preventDefault();
    //   $(this).next('.sub_item').slideToggle();
    // });

 

})($);