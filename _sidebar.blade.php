<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    </head>
    <body>
    
    <x-ik-hamburger />
        <div class="float-left pl-3 font-dm text-black  bg-primary-400" id="sidebar">
            <p class="text-xl  pt-8 mb-1">Dashboard</p>
            <button class="text-left text-base w-full pl-6 border-none mb-1" onClick="showdashboard()">Dashboard ></button>
                <br/>
                <div id="dashboardbutton">
                    <a class="text-base text-left w-full pl-11 border-none mb-1" href = "">Events</a>
                </div>
                <br/><br/>
            <p class="pl-[11px] border-none text-left mb-[5px]"><b>LAYOUTS & PAGES</b></p>
            <button class="pl-[24px] border-none text-left mb-[5px]" onClick="showproducts()">Products ></button>
            <br/>
            <div id="productoptions">
                <a class="text-[14px] text-left ml-[44px] border-none hover:bg-primary mb-[5px]" href = "{{url('addcake')}}">Cakes</a>
                <br/>
                <a class="text-[14px] text-left ml-[44px] border-none hover:bg-primary mb-[5px]" href = "{{url('addpastry')}}">Pastries</a>
                <br/>
                <a class="text-[14px] text-left ml-[44px] border-none hover:bg-primary mb-[5px]" href = "{{url('addcustomcake')}}">Custom Cakes</a>
            </div>
            <br/><br/>
            <p class="text-[24px] pl-[11px] mb-[5px]">
                Admin
            </p>
            <button class="text-[14px] text-left w-full pl-[44px] border-none mb-[5px]" onClick="showaccount()">Account</button>
        </div>
    </body>
    <script>
    var x = document.getElementById("dashboardbutton");
    var y = document.getElementById("productoptions");
    var z = document.getElementById("sidebar");

    x.style.display = "none"
    y.style.display = "none"
    z.style.display = "none"

    function showdashboard(){
        var x = document.getElementById("dashboardbutton");

        if (x.style.display === "none"){
            x.style.display = "block"
        } else{
            x.style.display = "none"
        }

    }
    function showproducts(){
        var x = document.getElementById("productoptions");

        if (x.style.display === "none"){
            x.style.display = "block"
        } else{
            x.style.display = "none"
        }

    }
    </script>
</html>