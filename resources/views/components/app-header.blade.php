<style>
    .change .bar-1 {
        -webkit-transform: rotate(-45deg) translate(-10px, 5px);
        transform: rotate(-45deg) translate(-7px, 0px);
    }

    .change .bar-2 {opacity:0;}

    .change .bar-3 {
        -webkit-transform: rotate(45deg) translate(-10px, 5px);
        transform: rotate(45deg) translate(-10px, -5px);
    }

</style>
<nav class="border-b border-gray-300">
    <div class="container flex items-center py-4 justify-between">
        <a href="/">
            <img src="/planet-bottling.png" alt="Planet Bottling" class="w-40">
        </a>
        <div class="burger-menu block lg:hidden ">
            <div class="bar flex flex-col gap-1">
                <span class="bar-1 transition ease-in duration-500 delay-100 w-9 h-1 rounded-full block bg-primary"> </span>
                <span class="bar-2 transition duration-500 w-9 h-1 rounded-full block bg-primary"> </span>
                <span class="bar-3 transition ease-out duration-500 w-9 h-1 rounded-full block bg-primary"> </span>
            </div>
        </div>
        <div class="text-[#384B53] hidden lg:flex gap-4 items-center  font-light">
            <a href="/who-we-are">Who We Are</a>
            <a href="/brands">Brands</a>
            <a href="/global-presence">Global Presence</a>
{{--            <a href="/media">Media</a>--}}
            <a href="/get-in-touch">Get In Touch</a>

            <button id="search-toggler">
                <svg id="search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    class="w-8 h-8" viewBox="0 0 51 52">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_7" data-name="Rectangle 7" width="27" height="27"
                                transform="translate(0.224 0.224)" fill="#008bc9" />
                        </clipPath>
                    </defs>
                    <g id="Group_75" data-name="Group 75" transform="translate(-1732 -50)">
                        <path id="Path_776" data-name="Path 776"
                            d="M25.5,0A25.5,25.5,0,0,1,51,25.5v1a25.5,25.5,0,0,1-51,0v-1A25.5,25.5,0,0,1,25.5,0Z"
                            transform="translate(1732 50)" fill="#008bc9" opacity="0.2" />
                        <g id="Group_3" data-name="Group 3" transform="translate(1745.776 63.776)"
                            clip-path="url(#clip-path)">
                            <path id="Path_68" data-name="Path 68"
                                d="M268.3,190.58h-.9l-.32-.309a7.455,7.455,0,1,0-.8.8l.309.32v.9l4.86,4.86a1.2,1.2,0,1,0,1.7-1.7Zm-6.862,0a5.146,5.146,0,1,1,5.146-5.146A5.139,5.139,0,0,1,261.435,190.58Z"
                                transform="translate(-250.569 -174.569)" fill="#008bc9" />
                        </g>
                    </g>
                </svg>

            </button>
        </div>
    </div>
</nav>

<div class="bg-[#7BC3E3] container py-4 hidden" id="search-wrap">
    <form action="/search">
        <input name="query" id="search-query" type="text" class="border-0 bg-transparent border-b border-white rounded-none font-light" >
    </form>
</div>

<div class="menu hidden ">
    <div class="bg-primary text-white flex  flex-col gap-2 p-8">
        <a href="/who-we-are">Who We Are</a>
        <a href="/brands">Brands</a>
        <a href="/global-presence">Global Presence</a>
{{--        <a href="/media">Media</a>--}}
        <a href="/get-in-touch">Get In Touch</a>
    </div>
</div>



<script>
    $(".burger-menu ").on("click",".bar",function(){
        $(".menu").slideToggle(750);
        $(".bar").toggleClass('change');
    });


    $("#search-toggler").on("click",function(){
        $("#search-wrap").slideToggle(750);
        $("#search-query").focus();

    });
</script>
