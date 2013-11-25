 window.fbAsyncInit = function() {
  FB.init({
    appId      : '602919433088689',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true,  // parse XFBML
    oauth      : true
  });
  };
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/fr_FR/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  jQuery(function($){
    $('.facebookConnect').click(function(){
      var url=$(this).attr('href');
    FB.login(function(response){
      if(response.authResponse){
        window.location=url;
      }
    },{scope:'email,user_location'});
    return false;
  });
});
