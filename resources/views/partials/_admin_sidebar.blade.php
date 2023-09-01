<div class="float-left p-5 font-dm text-black  bg-primary h-screen" id="sidebar">
    <i class="fa-solid fa-bars"></i>
    <p class="text-xl  pt-8 mb-1">Dashboard</p>
    <button class="text-left text-base w-full pl-6 border-none mb-1" onClick="showdashboard()">Dashboard ></button>
    <br />
    <div id="dashboardbutton">
        <a class="text-base text-left w-full pl-11 border-none mb-1" href="">Events</a>
    </div>
    <br /><br />
    <p class="pl-[11px] border-none text-left mb-[5px]"><b>LAYOUTS & PAGES</b></p>
    <button class="pl-[24px] border-none text-left mb-[5px]" onClick="showproducts()">Products ></button>
    <br />
    <div id="productoptions">
        <a class="text-[14px] text-left ml-[44px] border-none hover:bg-primary mb-[5px]"
            href="{{ url('addcake') }}">Cakes</a>
        <br />
        <a class="text-[14px] text-left ml-[44px] border-none hover:bg-primary mb-[5px]"
            href="{{ url('addpastry') }}">Pastries</a>
        <br />
        <a class="text-[14px] text-left ml-[44px] border-none hover:bg-primary mb-[5px]"
            href="{{ url('addcustomcake') }}">Custom Cakes</a>
    </div>
    <br /><br />
    <p class="text-[24px] pl-[11px] mb-[5px]">
        Admin
    </p>
    <button class="text-[14px] text-left w-full pl-[44px] border-none mb-[5px]" onClick="showaccount()">Account</button>
</div>
</body>
