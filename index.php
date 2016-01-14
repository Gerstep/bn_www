<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Page title -->
        <title>BlockNotary — identification and notarization with blockchain</title>

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Raleway:300,500,800|Source+Sans+Pro:300,400,600,700" rel="stylesheet" type="text/css" />
        
        
        <!-- Styles -->
        <link rel="stylesheet" href="css/slides.css" name="main-styles">

        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-1.11.3.min.js" name="jquery"></script>
        <script src="js/plugins.js" type="text/javascript" name="plugins"></script>
        <script src="js/slides.js" type="text/javascript" name="main-scripts"></script>
                         
    </head>
    <body class="slides stack animated">
            

<!-- SVG Library -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
  
  <symbol id="logo" viewBox="0 0 106 31"><path d="M17.413 14.04c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52zm2.222 15.96h6.64v-29.6h-6.64v29.6zm9.662-24.56h6.64v-5.04h-6.64v5.04zm0 24.56h6.64v-22.2h-6.64v22.2zm32.782-29.6h-6.64v9.28c-.72-.72-2.6-2.64-6.52-2.64-5.64 0-11 4.28-11 11.8 0 6.68 4.4 11.88 11.12 11.88 4.48 0 6.08-2.2 6.72-3.12v2.4h6.32v-29.6zm-17.52 18.4c0-2.56 1.8-5.56 5.64-5.56 1.56 0 2.96.56 3.96 1.56 1 .96 1.64 2.32 1.64 3.92.08 1.64-.52 3.08-1.56 4.12s-2.52 1.68-4.12 1.68c-3.12 0-5.56-2.28-5.56-5.68v-.04zm42.502 2.4c.52-4.08-.32-7.64-3.12-10.64-2.08-2.2-5-3.52-8.4-3.52-6.76 0-11.64 5.72-11.64 11.92 0 6.6 5.4 11.76 11.76 11.76 2.28 0 4.48-.68 6.32-2 1.88-1.28 3.44-3.2 4.52-5.68h-6.8c-.8 1.16-1.92 2.08-4.04 2.08-2.6 0-4.84-1.56-5.12-3.92h16.52zm-16.44-5.04c.16-1.04 1.52-3.52 4.96-3.52s4.8 2.48 4.96 3.52h-9.92zm34.502-2.12c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52z" /></symbol>
  
  <symbol id="logo-icon" viewBox="0 0 50 41"><path d="M4,12h42c2.2,0,4,1.8,4,4v21c0,2.2-1.8,4-4,4H4c-2.2,0-4-1.8-4-4V16C0,13.8,1.8,12,4,12z"/><path opacity="0.6" d="M45.5,9h-41C3.7,9,3,8.3,3,7.5v0C3,6.7,3.7,6,4.5,6h41C46.3,6,47,6.7,47,7.5v0C47,8.3,46.3,9,45.5,9z"/><path opacity="0.4" d="M7.5,0h35C43.3,0,44,0.7,44,1.5v0C44,2.3,43.3,3,42.5,3h-35C6.7,3,6,2.3,6,1.5v0C6,0.7,6.7,0,7.5,0z"/></symbol>
  
  <symbol id="close" viewBox="0 0 30 30"><path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/></symbol>
  
  <symbol id="menu" viewBox="0 0 22 22"><path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z"/></symbol>
  
  <symbol id="share" viewBox="0 0 22 22"><path d="M21 10c-.6 0-1 .4-1 1v7h-18v-7c0-.6-.4-1-1-1s-1 .4-1 1v7c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-7c0-.6-.4-1-1-1zM5.5 7.5c.3 0 .5-.1.7-.3l3.8-3.8v9.6c0 .6.4 1 1 1s1-.4 1-1v-9.6l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-5.5-5.5c-.1-.1-.2-.2-.3-.2-.2-.1-.5-.1-.8 0l-.3.2-5.5 5.5c-.4.4-.4 1 0 1.4.2.2.4.3.7.3z"/></symbol>
  
  <symbol id="facebook" viewBox="0 0 24 24"><path d="M17.4 12h-3.2v12h-4.4v-12h-2.9v-4.1h2.9v-2.4c0-3.5.9-5.5 4.8-5.5h3.2v4.1h-2c-1.5 0-1.6.6-1.6 1.7v2.1h3.6l-.4 4.1z"/></symbol>
  
  <symbol id="twitter" viewBox="0 1 24 23"><path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/></symbol>
  
  <symbol id="dribbble" viewBox="0 0 24 24"><path d="M12 0c-6.7 0-12 5.3-12 12s5.3 12 12 12 12-5.3 12-12-5.3-12-12-12zm7.9 5.7c1.3 1.7 2.1 3.9 2.3 6.1-.4-.1-2.4-.4-4.7-.4-.8 0-1.5 0-2.3.1 0-.1-.1-.3-.3-.5l-.7-1.5c3.7-1.4 5.3-3.4 5.7-3.8zm-7.9-3.8c2.5 0 4.9.9 6.7 2.5-.3.4-1.9 2.3-5.2 3.6-1.6-2.9-3.3-5.3-3.7-5.9.6-.1 1.4-.2 2.2-.2zm-4.4 1c.4.6 2.1 3 3.7 5.8-4.4 1.2-8.2 1.2-9.2 1.2h-.1c.8-3.1 2.9-5.6 5.6-7zm-5.7 9.1v-.3h.3c1.2 0 5.6-.1 10.1-1.5l.8 1.6c-.1 0-.3 0-.4.1-5.1 1.6-7.9 6-8.3 6.7-1.6-1.7-2.5-4.1-2.5-6.6zm10.1 10.1c-2.3 0-4.4-.8-6.1-2.1.3-.5 2.4-4.4 7.9-6.3 1.3 3.6 2 6.7 2.1 7.6-1.2.6-2.6.8-3.9.8zm5.7-1.8c-.1-.8-.7-3.6-2-7.1.7-.1 1.3-.1 2-.1 2.1 0 3.7.4 4.1.5-.3 2.8-1.8 5.2-4.1 6.7z"/></symbol>
  
  <symbol id="pinterest" viewBox="0 0 24 24"><path d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z"/></symbol>
  
  <symbol id="googlePlus" viewBox="0 0 24 24"><path d="M14.9 18.1c0-2.2-1.3-3.2-2.6-4.4l-1.1-.9c-.3-.3-.8-.7-.8-1.4s.5-1.1.9-1.5c1.3-1 2.6-2.1 2.6-4.5s-1.5-3.7-2.2-4.3h2l2-1.1h-6.5c-1.7 0-3.8.3-5.6 1.7-1.4 1.2-2 2.8-2 4.2 0 2.5 1.9 4.9 5.2 4.9.3 0 .7 0 1-.1-.2.4-.3.7-.3 1.2 0 1 .5 1.6.9 2.1-1.4.1-4.1.3-6 1.4s-2.4 2.7-2.4 3.8c0 2.3 2.2 4.5 6.8 4.5 5.2.4 8.1-2.6 8.1-5.6zm-6.8-8c-2.7 0-3.9-3.5-3.9-5.6 0-.8.2-1.7.7-2.3.5-.6 1.4-1 2.2-1 2.6 0 4 3.5 4 5.8 0 .6-.1 1.6-.8 2.3-.6.4-1.4.8-2.2.8zm0 12.7c-3.4 0-5.5-1.6-5.5-3.8 0-2.2 2-3 2.7-3.2 1.3-.4 3-.5 3.3-.5h.7c2.4 1.7 3.4 2.6 3.4 4.2 0 1.8-1.6 3.3-4.6 3.3zm7-10.8h3.4v3.4h1.8v-3.4h3.4v-1.7h-3.4v-3.4h-1.8v3.4h-3.4v1.7z"/></symbol>
  
  <symbol id="stumbleupon" viewBox="0 0 24 24"><path d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z"/></symbol>
  
  <symbol id="linkedin" viewBox="0 0 24 24"><path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z"/></symbol>
  
  <symbol id="apple" viewBox="-1 1 24 24"><path d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z"/></symbol>
  
  <symbol id="tumblr" viewBox="0 0 23 23"><path d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z"/></symbol>
  
  <symbol id="arrow-down" viewBox="0 0 24 24"><path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/></symbol>
  
  <symbol id="arrow-up" viewBox="0 0 24 24"><path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/></symbol>
  
  <symbol id="arrow-left" viewBox="0 0 31 72"><path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z"/></symbol>
  
  <symbol id="arrow-right" viewBox="0 0 31 72"><path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z"/></symbol>
  
  <symbol id="play" viewBox="0 0 30 30"><path d="M7 30v-30l22 15z"/></symbol>
   
  <symbol id="fb-like" viewBox="0 0 20 20"><path d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z"/></symbol>
  
  <symbol id="appstoreButton" viewBox="0 0 135 40"><path fill="#000" d="M135 36.2c0 2.1-1.7 3.8-3.8 3.8h-127.4c-2.1 0-3.8-1.7-3.8-3.8v-32.3c0-2.2 1.7-3.9 3.8-3.9h127.3c2.1 0 3.8 1.7 3.8 3.8l.1 32.4z"/><path fill="#ffffff" d="M30.1 19.8c0-3.2 2.6-4.8 2.8-4.9-1.5-2.2-3.9-2.5-4.7-2.5-2-.2-3.9 1.2-4.9 1.2s-2.6-1.2-4.2-1.1c-2.1 0-4.1 1.3-5.2 3.2-2.3 3.9-.6 9.7 1.6 12.9 1.1 1.6 2.4 3.3 4 3.2 1.6-.1 2.2-1 4.2-1 1.9 0 2.5 1 4.2 1s2.8-1.6 3.9-3.1c1.3-1.8 1.8-3.5 1.8-3.6-.1-.2-3.4-1.5-3.5-5.3zM26.9 10.3c.9-1.1 1.5-2.6 1.3-4.1-1.3.1-2.8.9-3.8 1.9-.8.9-1.5 2.5-1.3 3.9 1.5.2 2.9-.6 3.8-1.7zM53.6 31.5h-2.3l-1.2-3.9h-4.3l-1.2 3.9h-2.2l4.3-13.3h2.6l4.3 13.3zm-3.8-5.5l-1.1-3.5c-.2-.4-.4-1.2-.7-2.5-.1.6-.3 1.4-.6 2.5l-1.2 3.5h3.6zM64.7 26.6c0 1.6-.4 2.9-1.3 3.9-.8.8-1.8 1.3-2.9 1.3-1.3 0-2.2-.5-2.7-1.4v5.1h-2.1v-10.4c0-1 0-2.1-.1-3.2h1.9l.1 1.5c.7-1.1 1.8-1.7 3.2-1.7 1.1 0 2.1.4 2.8 1.3.7.9 1.1 2.1 1.1 3.6zm-2.2.1c0-.9-.2-1.7-.6-2.3-.5-.6-1.1-.9-1.9-.9-.5 0-1 .2-1.4.5-.4.3-.7.8-.8 1.4-.1.3-.1.5-.1.7v1.6c0 .7.2 1.3.6 1.8s1 .7 1.7.7c.8 0 1.4-.3 1.9-.9.4-.8.6-1.6.6-2.6zM75.7 26.6c0 1.6-.4 2.9-1.3 3.9-.8.8-1.8 1.3-2.9 1.3-1.3 0-2.2-.5-2.7-1.4v5.1h-2.1v-10.4c0-1 0-2.1-.1-3.2h1.9l.1 1.5c.7-1.1 1.8-1.7 3.2-1.7 1.1 0 2.1.4 2.8 1.3.7.9 1.1 2.1 1.1 3.6zm-2.2.1c0-.9-.2-1.7-.6-2.3-.5-.6-1.1-.9-1.9-.9-.5 0-1 .2-1.4.5-.4.3-.7.8-.8 1.4-.1.3-.1.5-.1.7v1.6c0 .7.2 1.3.6 1.8.4.3 1 .5 1.7.5.8 0 1.4-.3 1.9-.9.4-.6.6-1.4.6-2.4zM88 27.8c0 1.1-.4 2.1-1.2 2.8-.9.8-2.1 1.2-3.6 1.2-1.4 0-2.6-.3-3.4-.8l.5-1.8c.9.6 2 .8 3.1.8.8 0 1.4-.2 1.9-.5.4-.4.7-.8.7-1.5 0-.5-.2-1-.6-1.4-.4-.4-1-.7-1.8-1-2.4-.9-3.6-2.2-3.6-3.9 0-1.1.4-2 1.2-2.7.8-.7 1.9-1 3.3-1 1.2 0 2.2.2 3 .6l-.5 1.8c-.8-.4-1.6-.6-2.5-.6-.8 0-1.3.2-1.8.6-.4.3-.5.7-.5 1.2s.2 1 .6 1.3c.4.3 1 .7 1.9 1 1.1.5 2 1 2.5 1.6.6.6.8 1.4.8 2.3zM95.1 23.5h-2.3v4.7c0 1.2.4 1.8 1.2 1.8.4 0 .7 0 .9-.1l.1 1.6c-.4.2-1 .2-1.7.2-.8 0-1.5-.3-2-.8s-.7-1.4-.7-2.6v-4.8h-1.4v-1.6h1.4v-1.8l2.1-.6v2.4h2.3l.1 1.6zM105.7 26.6c0 1.5-.4 2.7-1.3 3.6-.9 1-2.1 1.5-3.5 1.5s-2.5-.5-3.4-1.4c-.8-.9-1.3-2.1-1.3-3.5 0-1.5.4-2.7 1.3-3.7.9-.9 2-1.4 3.5-1.4 1.4 0 2.5.5 3.4 1.4.9.9 1.3 2.1 1.3 3.5zm-2.2.1c0-.9-.2-1.6-.6-2.3-.4-.8-1.1-1.1-1.9-1.1-.9 0-1.5.4-2 1.1-.4.6-.6 1.4-.6 2.3s.2 1.6.6 2.3c.5.8 1.1 1.1 1.9 1.1.8 0 1.5-.4 1.9-1.2.5-.6.7-1.3.7-2.2zM112.6 23.8c-.2 0-.4-.1-.7-.1-.8 0-1.3.3-1.7.8s-.5 1.1-.5 1.9v5h-2.1v-6.6c0-1.1 0-2.1-.1-3h1.9l.1 1.8h.1c.2-.6.6-1.1 1.1-1.5.5-.3 1-.5 1.5-.5h.5v2.2h-.1zM122.2 26.3c0 .4 0 .7-.1 1h-6.4c0 .9.3 1.7.9 2.2.5.4 1.2.7 2.1.7.9 0 1.8-.2 2.6-.5l.3 1.5c-.9.4-2 .6-3.2.6-1.5 0-2.7-.4-3.5-1.3s-1.3-2.1-1.3-3.5.4-2.7 1.2-3.6c.8-1 1.9-1.5 3.4-1.5 1.4 0 2.4.5 3.1 1.5.6.6.9 1.7.9 2.9zm-2.1-.6c0-.6-.1-1.2-.4-1.6-.4-.6-.9-.9-1.7-.9-.7 0-1.3.3-1.7.9-.4.5-.6 1-.6 1.7l4.4-.1zM49 10c0 1.2-.4 2.1-1.1 2.7-.7.5-1.6.8-2.8.8-.6 0-1.1 0-1.5-.1v-6.4c.6-.1 1.2-.1 1.8-.1 1.1 0 2 .2 2.6.7.7.6 1 1.4 1 2.4zm-1.1 0c0-.8-.2-1.3-.6-1.8-.4-.4-1-.6-1.8-.6-.3 0-.6 0-.8.1v4.9h.7c.8 0 1.4-.2 1.9-.7.4-.4.6-1 .6-1.9zM54.9 11c0 .7-.2 1.3-.6 1.8s-1 .7-1.7.7-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8 1-.7 1.7-.7 1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1.1.1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM62.8 8.7l-1.5 4.7h-1l-.6-2c-.2-.5-.3-1-.4-1.5-.1.5-.2 1-.4 1.5l-.6 2h-1l-1.4-4.7h1.1l.5 2.3.3 1.5c.2-.4.3-.9.5-1.5l.7-2.2h.9l.6 2.2c.2.5.3 1.1.4 1.6.1-.5.2-1 .3-1.6l.6-2.2 1-.1zM68.2 13.4h-1v-2.7c0-.8-.3-1.2-1-1.2-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8v2.8h-1v-4.7h.9v.7c.1-.2.3-.4.5-.6.3-.2.6-.3.9-.3.4 0 .8.1 1.1.4.4.3.5.9.5 1.6v2.9h.2zM71.1 13.4h-1v-6.9h1v6.9zM77.3 11c0 .7-.2 1.3-.6 1.8-.4.5-1 .7-1.7.7s-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8c.4-.5 1-.7 1.7-.7s1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1.1.1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM82.3 13.4h-.9l-.1-.5c-.3.4-.8.7-1.4.7-.4 0-.8-.1-1.1-.4-.2-.3-.4-.6-.4-1 0-.6.2-1 .7-1.3.5-.3 1.2-.5 2-.4v-.1c0-.6-.3-.9-1-.9-.5 0-.9.1-1.2.3l-.1-.8c.4-.3 1-.4 1.6-.4 1.2 0 1.8.6 1.8 1.9v1.7c.1.6.1 1 .1 1.2zm-1.1-1.6v-.7c-1.2 0-1.7.3-1.7.9 0 .2.1.4.2.6.1.1.3.2.5.2s.4-.1.6-.2c.2-.1.3-.3.4-.6v-.2zM88.3 13.4h-.9v-.8c-.3.6-.8.9-1.5.9-.6 0-1-.2-1.4-.7-.4-.4-.6-1-.6-1.7 0-.8.2-1.4.6-1.9.4-.4.9-.7 1.5-.7s1.1.2 1.3.6v-2.7h1v5.6c-.1.6 0 1 0 1.4zm-1.1-2v-1.1c-.1-.3-.2-.5-.4-.6-.2-.2-.4-.3-.7-.3-.4 0-.7.2-.9.5-.2.3-.3.7-.3 1.2s.1.8.3 1.1c.2.3.5.5.9.5.3 0 .6-.1.8-.4.2-.2.3-.5.3-.9zM97.2 11c0 .7-.2 1.3-.6 1.8-.4.5-1 .7-1.7.7s-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8 1-.7 1.7-.7 1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1 .1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM102.9 13.4h-1v-2.7c0-.8-.3-1.2-1-1.2-.3 0-.6.1-.8.3s-.3.5-.3.8v2.8h-1v-4.7h.9v.7c.1-.2.3-.4.5-.6.3-.2.6-.3 1-.3s.8.1 1.1.4c.4.3.5.9.5 1.6v2.9h.1zM109.9 9.5h-1.2v2.3c0 .6.2.9.6.9h.5v.8c-.2.1-.5.1-.8.1-.4 0-.7-.1-1-.4-.2-.3-.3-.7-.3-1.3v-2.4h-.7v-.8h.7v-.9l1-.3v1.2h1.2v.8zM115.5 13.4h-1v-2.7c0-.8-.3-1.3-.9-1.3-.5 0-.8.2-1 .7v3.2h-1v-6.9h1v2.8c.3-.5.8-.8 1.4-.8.4 0 .8.1 1.1.4.4.4.5.9.5 1.6v3h-.1zM121.2 10.9v.5h-3.2c0 .5.2.8.5 1.1.3.2.6.3 1 .3.5 0 .9-.1 1.3-.2l.2.7c-.4.2-1 .3-1.6.3-.7 0-1.3-.2-1.7-.6s-.6-1-.6-1.7.2-1.3.6-1.8c.4-.5 1-.8 1.6-.8.7 0 1.2.3 1.5.8.3.3.4.8.4 1.4zm-1-.3c0-.3-.1-.6-.2-.8-.2-.3-.5-.4-.8-.4s-.6.1-.8.4c-.2.2-.3.5-.3.8h2.1z"/></symbol>
  
  <symbol id="login" viewBox="0 0 22 22"><path d="M13 2c0 .6.4 1 1 1h6v16h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c1.1 0 2-.9 2-2v-16c0-1.1-.9-2-2-2h-6c-.6 0-1 .4-1 1zm-6.5 3.5c0 .3.1.5.3.7l3.8 3.8h-9.6c-.6 0-1 .4-1 1s.4 1 1 1h9.6l-3.8 3.8c-.2.2-.3.5-.3.7s.1.5.3.7c.4.4 1 .4 1.4 0l5.5-5.5c.1-.1.2-.2.2-.3.1-.2.1-.5 0-.8l-.2-.3-5.5-5.5c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7z"/></symbol>
  
  <symbol id="drop-down" viewBox="0 0 16 16"><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,5 8,12 15,5" fill="none"/></symbol>
  
  <symbol id="direction-horizontal" viewBox="-2 6 16 16"><path d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z"/></symbol>
  
  <symbol id="direction-vertical" viewBox="-2 6 16 16"><path d="M6.7 21.7l5-5c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-3.3 3.3v-11.6c0-.6-.4-1-1-1s-1 .4-1 1v11.6l-3.3-3.3c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7 0 .3.1.5.3.7l5 5c.2.2.4.3.7.3s.5-.1.7-.3z"/></symbol>
</svg>

<style>
  .slides {
     background:#0F5F47;
  } 
  .slides.whiteSlide .navigation li.selected:after {
     background:#00AC7F;
  }
  .slides.whiteSlide .panel svg {
     fill:#01CE98;
  }
  .slides.whiteSlide .panel {
     color:#01CE98;
  }
  .slides.whiteSlide .menuButton,
  .sidebar {
     background:#01CE98;
  }
  
  h1.header-11 {
    font-size:40px;
    line-height:1.125;
    letter-spacing:0px;
    font-family:"Source Sans Pro", sans-serif !important;
  }
  
  .whiteSlide h1.header-11 {
    color:#01CE98;
  }
  
  .template-iphone-11 {
    margin-top: -56%;
  }
  .template-button-11.button {
     margin-top:15px;  
  }
  
  .template-text-11 {
     max-width: 545px;
  }
  
  .navigation li:after {
     opacity:0.3;
  }
  
  .slide.whiteSlide:after, .slide.whiteSlide.after:after, .slide.whiteSlide.before:after {
     background:#000;
     outline-color:#000;  
  }
  
  .dropdown {
     -webkit-box-shadow:0px 1px 4px rgba(0, 0, 0, 0.2), 0 2px 4px rgba(0, 0, 0, 0.05);
     box-shadow:0px 1px 4px rgba(0, 0, 0, 0.2), 0 2px 4px rgba(0, 0, 0, 0.05);
  }
  .dropdown {
     margin-top:-5px;  
  }
  
  .dropdown:after {
     display:none;  
  }
  
  .customGradient {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#01ce98+1,02bcea+100 */
    
    background: #01ce98; /* Old browsers */
    
    background: -moz-linear-gradient(-45deg,  #01ce98 1%, #02bcea 100%); /* FF3.6+ */
    
    background: -webkit-gradient(linear, left top, right bottom, color-stop(1%,#01ce98), color-stop(100%,#02bcea)); /* Chrome,Safari4+ */
    
    background: -webkit-linear-gradient(-45deg,  #01ce98 1%,#02bcea 100%); /* Chrome10+,Safari5.1+ */
    
    background: -o-linear-gradient(-45deg,  #01ce98 1%,#02bcea 100%); /* Opera 11.10+ */
    
    background: -ms-linear-gradient(-45deg,  #01ce98 1%,#02bcea 100%); /* IE10+ */
    
    background: linear-gradient(135deg,  #01ce98 1%,#02bcea 100%); /* W3C */
    
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#01ce98', endColorstr='#02bcea',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

  }
  
  @media screen and (max-width:1023px) {
    .template-cell-11 {
       padding-bottom:40px;  
    }
  }
</style>

<!-- Navigation -->
<nav class="side">
  <div class="navigation">
    <ul></ul>
  </div>
</nav>

<!-- Panel top #05 -->
<nav class="panel top forceMobileView">
  <div class="sections desktop">
    <div class="left"><a href="#intro"><b>BlockNotary</b></a></div>
    <div class="right">
      <ul class="menu crop">
        <li><a href="#product">Product</a></li>
        <li><a href="#technology">Technology</a></li>
        <li><a href="#usecase">Use cases</a></li>
        <li><a href="#about">About us</a></li>
        <li><a href="#contact">Contant</a></li>
        <li><a href="http://twitter.com/blocknotary" target="_blank"><svg class="twitterIcon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
      </ul>
    </div>
  </div>
  <div class="sections compact hidden">
    <div class="left"><a href="#intro"><b>BlockNotary</b></a></div>
    <div class="right"><span class="button actionButton sidebarTrigger" data-sidebar-id="1"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span></div>
  </div>
</nav>

<!-- Sidebar -->
<nav class="sidebar deepPurple" data-sidebar-id="1">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <a href="#"><b>BlockNotary</b></a><p>
    <ul class="mainMenu uppercase">
      <li><a href="#product">Product</a></li>
      <li><a href="#technology">Technology</a></li>
      <li><a href="#usecase">Use cases</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contant</a></li>
    </ul>
    <ul class="social">
      <li><a href="http://twitter.com/blocknotary"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
    </ul>
    <!--
    <ul class="subMenu">
      <li><a href="#">About Us</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Press & Media</a></li>
      <li><a href="#">Terms of Use</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="social">
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a></li>
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googlePlus"></use></svg></a></li>
      <li><a href="#"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pinterest"></use></svg></a></li>
    </ul> -->
  </div>
</nav>

<!-- Introduction -->
<section class="slide fade kenBurns fromRight" name="intro">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-12-12">
          <div class="fix-8-12 left toLeft">
            <h1 class="small ae-1">Blocknotary Video Interview</h1>
            <h2 class="small ae-2">Notarize, simplify and speed up all of your business's most important interactions</h2>
            <div class="ae-3">
              <p>We combine omnipresence of mobile devices, richness of video format and immutability of the blockchain to help you <b>reduce risks</b> by building <b>trustful and pleasant</b> customer experience.</p>
            </div>
            <a class="button uppercase round green ae-4" href="#contact">Talk to us</a>
          </div>
        </div>
            
      </div>  
    </div>
  </div>
  <div class="background customGradient"></div>
</section>


<!-- What we do -->
<section class="slide fade kenBurns" name="product">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-10-12 toCenter">
          <h1 class="small ae-1">The product</h1>
          <h2 class="small ae-1">What does BlockNotary provide?</h2>
        </div>
        <div class="fix-12-12">
          <ul class="grid later equal">
            <li class="col-6-12 equalElement">
              <div class="fix-6-12 ae-3">
                <svg width="72" height="72" viewBox="0 0 72 68" xmlns="http://www.w3.org/2000/svg" class="icon-47"><g stroke="#fff" stroke-width="3" stroke-linejoin="round" fill="none"><path d="M70.5 30.276c0 15.543-15.444 28.149-34.5 28.149-4.254 0-8.325-.63-12.087-1.779l-19.827 9.228 7.764-15.498c-6.39-5.106-10.35-12.228-10.35-20.1 0-15.546 15.444-28.149 34.5-28.149 19.056 0 34.5 12.603 34.5 28.149z"/><path d="M22.5 30.628c0 2.481-2.016 4.5-4.5 4.5s-4.5-2.019-4.5-4.5c0-2.487 2.016-4.5 4.5-4.5s4.5 2.013 4.5 4.5z"/><path d="M40.5 30.628c0 2.481-2.016 4.5-4.5 4.5s-4.5-2.019-4.5-4.5c0-2.487 2.016-4.5 4.5-4.5s4.5 2.013 4.5 4.5z"/><path d="M58.5 30.628c0 2.481-2.016 4.5-4.5 4.5s-4.5-2.019-4.5-4.5c0-2.487 2.016-4.5 4.5-4.5s4.5 2.013 4.5 4.5z"/></g></svg>
                <h3 class="uppercase">CUSTOMER SERVICE AUTOMATION</h3>
                <p class="small">Replace the need for clients to visit your office or call customer support by a customizable video interviewing.</p>
              </div>
            </li>
            <li class="col-6-12 equalElement">
              <div class="fix-6-12 ae-6">
                <svg width="72" height="72" viewBox="0 0 72 42" xmlns="http://www.w3.org/2000/svg" class="icon-47"><g stroke="#fff" stroke-width="3" stroke-linejoin="round" fill="none"><path d="M46.5 37.5c0 1.65-1.35 3-3 3h-39c-1.65 0-3-1.35-3-3v-33c0-1.647 1.35-3 3-3h39c1.65 0 3 1.353 3 3v33z"/><path d="M70.5 37.5l-18-9v-15l18-9v33z"/></g></svg>
                <h3 class="uppercase">add trust, reduce risk</h3>
                <p class="small">Have an immutable proof-of-existence of every customer communication. Add an additional layer of security and reduce fraud.</p>
              </div>
            </li>
            <li class="col-6-12 equalElement">
              <div class="fix-6-12 ae-7">
                <svg width="72" height="72" viewBox="0 0 73 72" xmlns="http://www.w3.org/2000/svg" class="icon-47"><g stroke="#fff" stroke-width="3" stroke-linejoin="round" fill="none"><path d="M70.538 36c0 19.053-15.447 34.5-34.5 34.5-19.056 0-34.5-15.447-34.5-34.5 0-19.056 15.444-34.5 34.5-34.5 19.053 0 34.5 15.444 34.5 34.5z"/><path d="M58.538 39c0 12.429-10.074 22.5-22.5 22.5s-22.5-10.071-22.5-22.5h45z"/><path d="M16.538 30c0-3.312 2.688-6 6-6s6 2.688 6 6"/><path d="M55.538 30c0-3.312-2.688-6-6-6s-6 2.688-6 6"/></g></svg>
                <h3 class="uppercase">Accelerate customer service</h3>
                <p class="small">Unload customer reps and call centers by providing convenient mobile service.</p>
              </div>
            </li>
            <li class="col-6-12 equalElement">
              <div class="fix-6-12 ae-8">
                <svg width="72" height="72" viewBox="0 0 71 71" xmlns="http://www.w3.org/2000/svg" class="icon-47"><g stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M48.782 69.444h-26.565c0-7.338 5.948-17.71 13.282-17.71 7.335 0 13.282 10.372 13.282 17.71zM44.355 36.976c0 4.888-3.967 8.855-8.855 8.855s-8.855-3.967-8.855-8.855c0-4.891 3.967-8.855 8.855-8.855s8.855 3.964 8.855 8.855zM19.848 51.152c-8.648-8.648-8.648-22.663 0-31.308 8.642-8.642 22.66-8.642 31.302 0 8.648 8.645 8.648 22.66 0 31.308M11.498 59.5c-13.256-13.253-13.256-34.744 0-48.006 13.256-13.253 34.747-13.253 48.006 0 13.256 13.262 13.256 34.753 0 48.006"/></g></svg>
                <h3 class="uppercase">KYC (know-you-customer)</h3>
                <p class="small">Verify and notarize identity, at a fraction of a cost of the traditional methods.</p>
              </div>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background customGradient"></div>
</section>

<!-- Technology -->
<section class="slide fade kenBurns" name="technology">
  <div class="content">
    <div class="container">
      <div class="wrap">
          
        <div class="fix-10-12">
          <h1 class="small ae-1">How things really work</h1>
          <div class="ae-2"><p></p></div>
          
          <ul class="grid equal left grid-65">
            <li class="cell-65 col-6-12 ae-3 equalElement">
              <h3 class="uppercase">Robust API</h3>
              <p class="small">We provide rich API and backend for you to set up custom interview process for you users. Think SurveyMonkey for automated video interviews.</p>
            </li>
            <li class="cell-65 col-6-12 ae-4 equalElement">
              <h3 class="uppercase">Mobile & Web clients</h3>
              <p class="small">White-label clients for all mobile and web platforms with videointerviewing functionality</p>
            </li>
            <li class="cell-65 col-6-12 ae-5 equalElement">
              <h3 class="uppercase">Blockchain receipt</h3>
              <p class="small">Once the interview is complete is will be immediately fingerprinted in the blockchain, so that it authenticity can be verified at any time. Even if we're not around.</p>
            </li>
            <li class="cell-65 col-6-12 ae-6">
              <h3 class="uppercase">Storage & Integration</h3>
              <p class="small">We will store videos securely and set up automated process of delivering it to your customer service representatives, within seconds after recording.</p>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background customGradient"></div>
</section>

<!-- Values -->
<section class="slide fade kenBurns" name="usecase">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-10-12 toCenter">
          <h1 class="ae-1">Use Cases</h1>
          <div class="ae-2"><p class="hero">
            Banking & financial services<br>
            Insurance & claim management<br>
            Notarization, NDAs & digital signature<br>
            Share economy HR<br>
            Leasing & background checks
          </p></div>
        </div>
        <div class="fix-12-12">
        </div>
        
      </div>
    </div>
  </div>
  <div class="background customGradient"></div>
</section>

<!-- Testimony -->
<section class="slide fade kenBurns" name="about">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <div class="fix-10-12 left">
          <h1 class="small ae-1">Press</h1>
          <ul class="ae-1 hero">
            <li><a href="http://www.coindesk.com/bitcoin-notary-startup-develops-tool-for-russian-payments-firm/">Russian Payments Firm Trials Bitcoin Tool for Customer Verification</a> (13/1/2016)</li>
            <li><a href="https://tierion.com/blog/verifiable-customer-onboarding-using-the-blockchain/">Verifiable Customer Onboarding Using The Blockchain</a> (12/1/2016)</li>
          </ul><p>
        </div>

        <div class="fix-10-12 left">
          <h1 class="small ae-3">Client Testimony</h1>
          <h3 class="small ae-3">“Recording a video of yourself during the registration process helps prevent fraud. As CEO, I’d like to make it as difficult as possible for criminals to use Pay-Me to conduct illegal activities”</h3>
          <div class="fix-4-12">
            <a href="#" class="author block">
              <small class="raleway block ae-4">
                <b class="block">Vladimir Kanin</b>
                Pay-Me CEO
              </small>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="background customGradient"></div>
</section>

<!-- Contact form -->
<section class="slide fade kenBurns" name="contact">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <h1 class="small ae-1">Let's talk</h1>
        <div class="ae-2"><p>We're always happy to discuss ways how video interviewing and blockchain verification can help your business. Feel free to ask any questions you might have.</p></div>
        <div class="fix-6-12 box-55">
          <div class="pad shadow selected ae-3">
            <form action="#" autocomplete="off" class="wide center">
              <label class="uppercase ae-4" for="name37">Your name</label>
              <input class="stroke round ae-5 wide" id="name37" type="name" name="name" placeholder="Name" required/>
              <label class="uppercase ae-6" for="email37">Email</label>
              <input class="stroke round ae-7 wide" id="email37" type="email" name="email" placeholder="Email" required/>
              <label class="uppercase ae-8" for="message37">Message</label>
              <textarea class="stroke round left ae-9" id="message37" type="email" placeholder="Message" required></textarea>
              <input class="button wide pink round uppercase ae-10 button-55" type="submit" name="submit" value="Send"/>
            </form>
          </div>
        </div><p>

          <!-- Contacts -->
          <ul class="grid fixedSpaces">
            <li class="col-4-12 ae-3">
              <h3 class="small uppercase text-56">© 2016, BlockNotary</h3>
              <p class="opaque playfair">San Francisco, CA</p>
            </li>
            <li class="col-4-12 ae-4">
              <h3 class="small uppercase text-56">EMAIL US</h3>
              <p class="opaque playfair"><a href="mailto:hello@blocknotary.com">hello@blocknotary.com</a></p>
            </li>
            <li class="col-4-12 ae-5">
              <h3 class="small uppercase">STAY IN TOUCH</h3>
              <ul class="social-circles">
                <li><a class="button roundButton facebook" target="_blank" href="https://www.facebook.com/"><svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a></li>
                <li><a class="button roundButton twitter" target="_blank" href="https://twitter.com/blocknotary"><svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
              </ul>
            </li>
          </ul>
        
      </div>
    </div>
  </div>
  <div class="background customGradient"></div>
</section>

<!-- Panel Bottom #22 -->
<nav class="panel bottom">
  <div class="sections">
    <div class="center"><span class="nextSlide"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use></svg></span></div>
  </div>
</nav>

<!-- Preloader -->
            <div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>
                    
    </body>
</html>
