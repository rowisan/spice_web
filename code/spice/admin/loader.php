<body>
    <style>
        #preloader {
            width:100%;
            height:100%;
            position:fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background-color:#000; 
            z-index:99999999; 
        }

        #status {
            width:100%;
            height:100%;
            position:absolute;
            top:0;
            background-image:url(images/loading.gif); 
            background-repeat:no-repeat;
            background-position:center;
            background-color: #fff;
        }
    </style>
    
    <!--Preloader-->   
    <script language="JavaScript">
        var winHg = window.innerHeight || document.documentElement.clientHeight;
        var winWd = window.innerWidth || document.documentElement.clientWidth;
        $('#status').css("left", (winWd / 2) - 50);
        $('#preloader').css("height", winHg);
    </script>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!--Preloader - END -->
</body>