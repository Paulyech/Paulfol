@extends('layouts.app')

@section('content')

<div>

  {{-- homepage --}}  
    <div class="flex justify-center"  style="background-image: url('../images/1.2.png');background-size:cover;min-height:80vh;background-position:center">
        <a name="index"></a> 
        <div class="bg-gray-200 opacity-60 rounded lg:h-24 h-4/6 w-1/2 lg:mt-48 mt-20 pl-2">
            <span class="uppercase text-4xl font-bold flex justify-center ">paul liech</span>
            <h2 class="capitalize font-sans font-semibold tracking-wider ">am a dedicated mobile freelancer web developer with a vast knowledge of IT related services and current technological trends</h2>
        </div>        
    </div>
    {{-- end homepage --}}

    {{-- aboutpage --}}
    <div>
        <a name="about"></a> 

        {{-- section header  --}}
        <div class="section-title ">
            <div class="header">
                <h1 class="uppercase font-bold text-2xl">about me</h1>
            </div>
        </div>
        {{-- end section header  --}}

        {{-- about flexbox --}}
        <div class="flex justify-center items-center my-8 ">
            <div class="flex flex-wrap justify-center w-4/5">
                <div class="w-96 h-96 bg-red-600">
                    <img src="../images/mee.JPG" alt="image" class="object-cover h-96 w-full">
                </div>
                <div class="bg-blue-500 w-96 rounded">
                    <p class="tracking-wider p-2 text-gray-900">I am an Information Technology undergraduate student at Multimedia University Of Kenya.In my 4-year course i have been able to acquire alot of knowledge in programming and web development. <br> At this point i am very capable of solving any IT related problem and design professional responsive websites for individuals and organisations. <br> I not only design websites but also offer other services mentioned in the service section</p>
                    <div class=" transform hover:scale-y-125">
                        <a href="#contact" class="btn-sm bg-red-400 ">hire me</a>
                    </div>
                </div>
            </div>
        </div>
        {{--end about flexbox --}}
    </div>
    
    {{--end aboutpage --}}

    {{-- services section --}}
    <div class="bg-gray-800">
        <a name="services"></a> 
       {{-- section header  --}}
       <div class="section-title ">
            <div class="header">
                <h1 class="uppercase font-bold text-2xl">services</h1>
            </div>
       </div>
       {{-- end section header  --}}

        {{-- grid start --}}
        <div class="grid lg:grid-cols-3 gap-2 items-center justify-items-center mt-8 pb-12">
            {{-- card 1 --}}
            <div class="card w-80 h-48 ">
                <h1 class="text-xl font-bold text-gray-700 uppercase flex justify-center">M-pesa Web API's intergration</h1>
                <div class="flex items-center mt-5">
                    <img src="../images/api.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                    <span> I integarte online payment options such as mpesa on your website </span>
                </div>
            </div>

            {{-- card 2 --}}
            <div class="card h-48">
                <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">android app development</h1>
                <div class="flex mt-5 items-center">
                    <img src="../images/db.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                    <span>I design and develop classy sassy android apps at friendly cost and in a fixed duration as required by my client </span>
                </div>
                
            </div>

            {{-- card 3 --}}
            <div class="card h-48">
                <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">Web design and programming</h1>
                <div class="flex mt-5 items-center">
                    <img src="../images/tech1.jpeg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                    <span >get me to create for you an interactive business website or portfolio </span>
                </div>
            </div>

            {{-- card 4  --}}
            <div class="card h-48">
                <h1 class="text-xl font-bold text-gray-700 uppercase flex justify-center">graphics design</h1>
                <div class="flex mt-5 items-center">
                    <img src="../images/graphic.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                    <span>In need of a graphic designer ?you are in  the right place </span>
                </div>
            </div>

            {{-- card 5 --}}
            <div class="card h-48">
                <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">E-mail Marketing Development</h1>
                <div class="flex mt-5 items-center">
                    <img src="../images/tech1.jpeg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                    <span>customize your business email hence great positive interractions with your clients </span>
                </div>
            </div>

            {{-- card 6 --}}
            <div class="card  h-48">
                <h1  class="text-xl font-bold text-gray-700 uppercase flex justify-center">Tech Consultation Services</h1>
                <div class="flex mt-5 items-center">
                    <img src="../images/IT.jpg" alt="image" class="rounded-full h-20 w-20 mx-4 mt-2 object-cover">
                    <span>Get the best consultation on matters to do with tech from experts in the field </span>
                </div>
            </div>
        </div>
        {{-- grid end  --}}
        
       
    </div>

    {{--end services section --}}


     {{-- portfolio start --}}
     <div>
        <a name="portfolio"></a> 

        {{-- start section header  --}}
        <div class="section-title">
            <div class="header w-96">
                <h1 class="uppercase font-bold text-2xl">our portfolio </h1>
            </div>
        </div>
        {{-- end section header  --}}
        <div>
            <a name="portfolio"></a>

        {{-- start grid  --}}
         <div class="grid lg:grid-cols-4 gap-2 justify-items-center mt-12 pb-12">
             

             {{-- card 1 --}}
             <div class="card ">
                <span class="project-title">betfm</span>
                <img src="../images/api.jpg" alt="image" class="w-full h-40">
                <div>
                    
                    <span class="block tracking-wider">Betfm is a gamblers path to to his/her daily activities where he/she is able to find all that gambling contains in one place.</span>
                    
                </div>
                <div class="badge">
                    <span>web based application</span>
                </div>
                <div class="mt-3">
                    <a href="https://betfm.herokuapp.com/" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                </div>
            </div>

             {{-- card 2 --}}
             <div class="card ">
                <span class="project-title">soccer world</span>
                <img src="../images/api.jpg" alt="image" class="w-full h-40">
                <div>
                    
                    <span class="block tracking-wider">A site designed to bring together soccer lovers and those wishing to know about the game.For the love of the game</span>
                    
                </div>
                <div class="badge">
                    <span>web based application</span>
                </div>
                <div class="mt-3">
                    <a href="http://soccerworldke.herokuapp.com/" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                </div>
            </div>

             {{-- card 3 --}}
             <div class="card ">
                <span class="project-title">webicians</span>
                <img src="../images/api.jpg" alt="image" class="w-full h-40">
                <div>
                    
                    <span class="block tracking-wider">A tech company website</span>
                    
                </div>
                <div class="badge">
                    <span>web based application</span>
                </div>
                <div class="mt-3">
                    <a href="https://webicianske.herokuapp.com/" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                </div>
            </div>
             {{-- card 4 --}}
             <div class="card ">
                <span class="project-title">betfm</span>
                <img src="../images/api.jpg" alt="image" class="w-full h-40">
                <div>
                    
                    <span class="block tracking-wider">Betfm is a gamblers path to to his/her daily activities where he/she is able to find all that gambling contains in one place.</span>
                    
                </div>
                <div class="badge">
                    <span>web based application</span>
                </div>
                <div class="mt-3">
                    <a href="https://betfm.herokuapp.com/" class="btn-sm bg-gray-500 text-white transform hover:scale-125 hover:opacity-50">visit site</a>
                </div>
            </div>
         
        </div>   
    </div>  
        {{-- end grid --}}

    </div>

    {{-- end portfolio  --}}



    {{-- contact form  --}}
    
        @include('emailSend')
    
    {{-- end contact form  --}}


    
</div>

@endsection
