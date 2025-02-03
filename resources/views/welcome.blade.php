<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <section x-data="{ atTop: true }" class="text-dawn-pink">
    <div class="fixed z-50 w-[60%] px-8 py-4 transition-all duration-1000 rounded-full  mt-4 max-w-2xl inset-x-0 mx-auto ease-in-out transform" :class="{ 'bg-black bg-opacity-90 backdrop-blur-xl max-w-4xl ': !atTop, 'max-w-2xl': atTop }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)">
        <!-- This div is styled to change its appearance based on the scroll position, toggling classes for background, opacity, blur, and width. -->
        <div x-data="{ open: false }" class="flex flex-col w-full p-2 mx-auto md:items-center md:justify-between md:flex-row">
         <!-- Another Alpine.js component for handling the navigation menu's open/close state. -->
         <div class="flex flex-row items-center justify-between"> <span class="font-bold tracking-tighter text-dawn-pink uppercase" :class="{ 'text-dawn-pink': atTop, 'text-dawn-pink': !atTop }">
           <!-- This span changes color based on the scroll position, using the `atTop` state. -->
           
            <svg class="fill-white" width="30" height="30" viewBox="0 0 58.389 58.389">
            <g id="c" data-name="Layer 1">
                <path d="M58.389,29.195c-22.568,2.101-23.545,3.974-11.026,22.854-15.176-16.765-16.609-16.227-18.168,6.341-1.768-22.568-3.374-23.26-20.1-8.021C23.361,32.793,22.568,31.087,0,29.195c22.568-1.719,23.222-3.285,7.613-19.661C25.508,23.402,27.254,22.568,29.195,0c1.816,22.568,3.461,23.298,20.521,8.429-14.647,17.253-13.894,18.922,8.674,20.766Z"/>
            </g>
            </svg>
          </span> <button class="md:hidden focus:outline-none">
           <!---- SVG Burger goes here ---->
          </button> </div>
         <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow gap-8 hidden pb-4 md:pb-0 md:flex md:flex-row lg:ml-auto justify-end">
            
          <!-- This navigation changes its display based on the `open` state, showing on mobile when `open` is true. --> <a :class="{ 'text-dawn-pink': atTop, 'text-dawn-pink': !atTop }" href="#_" class="text-dawn-pink">About</a> <!-- Links within the navigation also change color based on the scroll position. --> <a :class="{ 'text-dawn-pink': atTop, 'text-dawn-pink': !atTop }" href="#_" class="text-dawn-pink">Work</a> <a :class="{ 'text-dawn-pink': atTop, 'text-dawn-pink': !atTop }" href="#_" class="text-dawn-pink"><span id="screenWidth"></span> x <span id="screenHeight"></span></a>
         </nav>
        </div>
       </div></section>
    <div class="w-screen h-screen pt-20 bg-black">
        <div class="w-[95%] h-[80%] mx-auto rounded-3xl bg-main">

            <div class="flex flex-row justify-center">

                <div class="absolute z-40 xl:mt-10 mt-32 ">
                    <h1 class="  xl:text-hat lg:text-9xl md:text-9xl text-6xl font-soledago text-dawn-pink">ПОРТФОЛИО  </h1>
                </div>

                <div class="absolute z-10 xl:mt-10 mt-32">
                        <h1 class="xl:text-hat lg:text-9xl md:text-9xl text-6xl font-soledago font-bold text-invis ">ПО </h1>
                        <h1 class="xl:text-hat lg:text-9xl md:text-9xl text-6xl font-soledago text-invis font-outline-2">ПОРТФОЛИО  </h1>
                        <h1 class="xl:text-hat lg:text-9xl md:text-9xl text-6xl font-soledago text-invis font-outline-2" >ПОРТФОЛИО  </h1>
                        <h1 class="xl:text-hat lg:text-9xl md:text-9xl text-6xl font-soledago text-invis font-outline-2">ПОРТФОЛИО  </h1>
                </div>
            </div>
        

            
            <div class="w-[95%] pt-20 flex justify-around flex-wrap absolute z-30">
                <svg class="fill-accent w-[50px] h-[50px]"  viewBox="0 0 58.389 58.389">
                    <g id="c" data-name="Layer 1">
                      <path d="M29.195,0C25.535,22.568,22.568,25.535,0,29.195c22.568,3.66,25.535,6.627,29.195,29.195,3.66-22.568,6.627-25.535,29.195-29.195-22.568-3.66-25.535-6.627-29.195-29.195Zm0,40.801c-1.455-8.972-2.635-10.151-11.606-11.606,8.972-1.455,10.151-2.635,11.606-11.606,1.455,8.972,2.635,10.151,11.606,11.606-8.972,1.455-10.151,2.635-11.606,11.606Z"/>
                    </g>
                  </svg>
                <div class="xl:w-[35rem] xl:h-[35rem] w-[20rem] h-[20rem]  bg-[url('/resources/images/main.png')] bg-no-repeat bg-cover bg-center   "> </div>
                
                <div class="  xl:h-48 xl:w-48 h-28 w-[20rem] xl:mt-20 mt bg-main px-5 py-20 text-xl">
                    
                    <h5 class="text-del-rio"> ВК: @dan2love </h5>
                    <h6 class="text-del-rio">ТГ: @bananalier</h6>

                    <svg class="fill-accent w-[100px] h-[100px]  ml-32"  viewBox="0 0 58.389 58.389">
                        <g id="c" data-name="Layer 1">
                          <path d="M29.195,0C25.535,22.568,22.568,25.535,0,29.195c22.568,3.66,25.535,6.627,29.195,29.195,3.66-22.568,6.627-25.535,29.195-29.195-22.568-3.66-25.535-6.627-29.195-29.195Zm0,40.801c-1.455-8.972-2.635-10.151-11.606-11.606,8.972-1.455,10.151-2.635,11.606-11.606,1.455,8.972,2.635,10.151,11.606,11.606-8.972,1.455-10.151,2.635-11.606,11.606Z"/>
                        </g>
                      </svg>
                </div>
            </div>
             
        </div>
           
        

            
    </div>
    
    <div class="h-screen bg-dawn-pink flex flex-wrap justify-between">
         
        <div class="xl:h-2/3 xl:w-1/2 h-1/2  bg-black xl:px-20 text-wrap  ">
          <h1 class="  xl:text-8xl lg:text-5xl md:text-5xl text-5xl font-soledago text-dawn-pink ml-5">ПРИВЕТ, МЕНЯ ЗАВУТ ДАНЯ! </h1>
          <h1 class="  xl:text-4xl lg:text-9xl md:text-9xl text-2xl  text-dawn-pink ml-5 mt-10">Я программист веб и мультемедийных приложений, получил образование по этой специальности и в настоящее время продолжаю развивать умения в этой сфере</h1>
        </div>
        <div class="xl:w-1/4 xl:h-2/3 w-3/4 h-1/2 xl:mt-52 mx-auto mt-10  bg-main flex flex-col " >
          <div class="basis-2/3">

          </div>
          <div class="basis-1/3 bg-black flex justify-items-center flex-col">
            <h1 class="  xl:text-6xl lg:text-5xl md:text-5xl text-2xl font-soledago text-dawn-pink xl:ml-20 my-4">КОНТАКТЫ</h1>
           <div class="flex flex-col xl:ml-20"> 
            <div class="flex   ">
              <svg class="fill-white xl:w-10 xl:h-10 w-5 h-5" viewBox="0 0 24 24">
                <path d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              <h1 class="xl:ml-2 xl:text-2xl lg:text-5xl md:text-5xl text-xl  text-dawn-pink ">+7(909) 552 57-90</h1>
            </div>

            <div class="flex  ">
              <svg class="fill-white xl:w-10 xl:h-10 w-5 h-5" viewBox="0 0 24 24" >
                <path d="M21 8L17.4392 9.97822C15.454 11.0811 14.4614 11.6326 13.4102 11.8488C12.4798 12.0401 11.5202 12.0401 10.5898 11.8488C9.53864 11.6326 8.54603 11.0811 6.5608 9.97822L3 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h1 class="xl:ml-2 xl:text-2xl lg:text-5xl md:text-5xl text-xl  text-dawn-pink ">valovdaniil2003@gmail.com</h1>
            </div>

            <div class="flex ">
              <svg class="fill-white xl:w-10 xl:h-10 w-5 h-5" viewBox="0 0 24 24">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9.5C5 6.09371 8.00993 3 12 3C15.9901 3 19 6.09371 19 9.5C19 11.6449 17.6877 14.0406 15.9606 16.2611C14.5957 18.016 13.0773 19.5329 12 20.5944C10.9227 19.5329 9.40427 18.016 8.03935 16.2611C6.31229 14.0406 5 11.6449 5 9.5ZM12 1C6.99007 1 3 4.90629 3 9.5C3 12.3551 4.68771 15.2094 6.46065 17.4889C7.99487 19.4615 9.7194 21.1574 10.7973 22.2173C10.9831 22.4001 11.1498 22.564 11.2929 22.7071C11.4804 22.8946 11.7348 23 12 23C12.2652 23 12.5196 22.8946 12.7071 22.7071C12.8502 22.564 13.0169 22.4001 13.2027 22.2174L13.2028 22.2173C14.2806 21.1573 16.0051 19.4615 17.5394 17.4889C19.3123 15.2094 21 12.3551 21 9.5C21 4.90629 17.0099 1 12 1ZM12 12.5C13.3807 12.5 14.5 11.3807 14.5 10C14.5 8.61929 13.3807 7.5 12 7.5C10.6193 7.5 9.5 8.61929 9.5 10C9.5 11.3807 10.6193 12.5 12 12.5Z" />
                </svg>
                <h1 class="xl:ml-2 xl:text-2xl lg:text-5xl md:text-5xl text-xl  text-dawn-pink ">г. Архангельск</h1>
            </div>
          </div>

          <div class="h-16 w-40 rounded-full bg-accent xl:-mt-96 xl:-ml-20 -mt-48 -ml-10">
              <h1 class="ml-4 mt-4">13 декабря 2003</h1>
          </div>
          
            
         
            
          </div>
        </div>
         
    </div>
   
    <div class="h-screen w-screen px-10 -mt-72 bg-[url('/resources/images/back.svg')] bg-no-repeat bg-cover bg-center bg-dawn-pink">
        <section class="py-64 ml-20">
            <div class="w-screen-xl h-screen sm:py-4 lg:px-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-3/5">
                    <div class="col-span-2 sm:col-span-1 md:col-span-2  h-fit flex flex-col pt-20 mr-14">
                        <div class="max-w-4xl  relative"
                            x-data="{ activeSlide: 1, slides: [1, 2, 3, 4, 5] }">
                            <!-- Slides -->
                            <template x-for="slide in slides" :key="slide">
                            <div
                                x-show="activeSlide === slide"
                                class="p-48 font-bold text-5xl  flex items-center bg-accent text-black ">
                                <span class="w-12 text-center" x-text="slide"></span>
                                <span class="text-black">проект</span>
                                
                            </div>
                            </template>
                            
                            <!-- Prev/Next Arrows -->
                            <div class="absolute inset-0 flex">
                            <div class="flex items-center justify-start w-1/2">
                                <button 
                                class="bg-main text-accent hover:text-black font-bold hover:shadow-lg  w-12 h-12 -ml-6"
                                x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                                &#8592;
                                </button>
                            </div>
                            <div class="flex items-center justify-end w-1/2">
                                <button 
                                class="bg-main text-accent hover:text-black font-bold hover:shadow  w-12 h-12 -mr-6"
                                x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                                &#8594;
                                </button>
                            </div>        
                            </div>

                            <!-- Buttons -->
                            <div class="absolute w-full flex items-center justify-center px-4">
                            <template x-for="slide in slides" :key="slide">
                                <button
                                class="flex-1 w-4 h-2 mt-4 mx-2 mb-0  overflow-hidden transition-colors duration-200 ease-out hover:border hover:border-accent hover:bg-main"
                                :class="{ 
                                    'bg-main border border-accent': activeSlide === slide,
                                    'bg-accent': activeSlide !== slide 
                                }" 
                                x-on:click="activeSlide = slide"
                                ></button>
                            </template>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-main border-2 border-black">
                        <h1 class="  xl:text-5xl lg:text-4xl md:text-5xl text-2xl font-soledago text-accent xl:ml-20 my-4">Технические навыки</h1>
                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2 mt-10">
                            <div class="ml-10">
                                <h1 class="xl:ml-2 xl:text-2xl lg:text-5xl md:text-5xl text-xl  text-dawn-pink">Soft skills</h1>
                                <div class="flex justify-center flex-wrap gap-5 lg:inline-grid lg:grid-cols-4 xl:grid-cols-5 p-6">
                                </div>
                            </div>
                            <div class="ml-10">
                                <h1 class="xl:ml-2 xl:text-2xl lg:text-5xl md:text-5xl text-xl  text-dawn-pink">Codding skills</h1>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1 md:col-span-1  h-full whitespace-nowrap -mt-20 -ml-6 border-r-2">
                        <h1 class="xl:text-hat lg:text-9xl md:text-9xl text-6xl rotate-90 font-soledago text-accent leading-loose ">
                            <span class="hover:font-outline-2 hover:text-main duration-500">В</span>
                            <span class="hover:font-outline-2 hover:text-main duration-500">Е</span>
                            <span class="hover:font-outline-2 hover:text-main duration-500">Б</span>
                            <span class="hover:font-outline-2 hover:text-main duration-500">/</span>
                            <span class="hover:font-outline-2 hover:text-main duration-500">W</span>
                            <span class="hover:font-outline-2 hover:text-main duration-500">E</span>
                            <span class="hover:font-outline-2 hover:text-main duration-500">B</span>
                        </h1>
                    </div>
                    <div class="w-[1500px] h-[2px] bg-dawn-pink mt-40 -ml-24"></div>
                </div>
            </div>
            
        </section>
        
    </div>
    
    <div class=" w-screen p-14 -mt-24  bg-main ">
        <div class=" w-full bg-dawn-pink ">
            <div class="container relative flex flex-col justify-between h-full w-full mx-auto xl:px-0 mt-5">
                
                <div class="w-full">
                    <div class="flex flex-col w-full mb-10 sm:flex-row">
                        <div class="w-full mb-10 sm:mb-0 sm:w-1/2 -mt-32 mb-32">
                            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                <span class="absolute top-0 left-0 w-fit h-full mt-1 ml-1 bg-main "></span>
                                <div class="relative h-full p-5 bg-black border-2 border-main flex justify-center">
                                    <h1 class="xl:text-hat lg:text-9xl md:text-9xl text-6xl font-soledago text-dawn-pink align-center">PYTHON  </h1>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <div class="relative h-full ml-0 md:mr-10">
                                
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full mb-5 sm:flex-row">
                        <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Project Audit</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                                    <p class="mb-2 text-gray-600">A Project Audit is a formal review of a project, which is intended
                                        to assess the extent up to which project management standards are being upheld.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full sm:w-1/2">
                            <div class="w-1/2  max-w-2xl overflow-hidden relative">
                                <!-- Radio Buttons (Hidden) -->
                                <input type="radio" name="slider" id="slide1" class="hidden peer/slide1" checked>
                                <input type="radio" name="slider" id="slide2" class="hidden peer/slide2">
                                <input type="radio" name="slider" id="slide3" class="hidden peer/slide3">
                    
                                <!-- Slides Container -->
                                <div id="slides" class="flex w-full transition-transform duration-500 ease-in-out 
                                    peer-checked/slide1:translate-x-0 
                                    peer-checked/slide2:-translate-x-full 
                                    peer-checked/slide3:-translate-x-[200%]">
                                    <div class="slide pb-16 min-w-full  text-white text-center bg-[url('/resources/images/VectorDither2I-03.svg')] bg-no-repeat bg-cover duration-1000 hover:bg-center bg-accent">
                                        <div class="content m-6 p-6 bg-black">
                                            <h1 class="xl:text-5xl lg:text-9xl md:text-9xl text-6xl text-accent align-center">REST API</h1>
                                        </div>
                                    </div>
                                    <div class="slide pb-16 min-w-full  text-white text-center bg-[url('/resources/images/VectorDither2I-05.svg')] bg-no-repeat bg-cover duration-1000 hover:bg-center bg-bitter">
                                        <div class="content m-6 p-6 bg-black">
                                            <h1 class="xl:text-5xl lg:text-9xl md:text-9xl text-6xl text-bitter align-center">Архитектурное мышление</h1>
                                        </div>
                                    </div>
                                    <div class="slide pb-16 min-w-full  text-white text-center bg-[url('/resources/images/VectorDither2I-04.svg')] bg-no-repeat bg-cover duration-1000 hover:bg-center bg-del-rio">
                                        <div class="content m-6 p-6 bg-black">
                                            <h1 class="xl:text-5xl lg:text-9xl md:text-9xl text-6xl text-del-rio align-center">Deep Learning</h1>
                                        </div>
                                    </div>
                                </div>
                    
                                

                                <div class="bg-black w-full h-20">
                                    <label for="slide1" 
                                    class="bullet p-1 -translate-x-full peer-checked/slide1:font-bold peer-checked/slide1:scale-125 ">
                                    <svg class="fill-accent  " id="" viewBox="0 0 150 150"><g id="_9"><g><path d="M0,60.64H60.64V0C28.64,3.19,3.19,28.63,0,60.64Z"/><path d="M60.64,134.88v-60.64H0c3.19,32,28.64,57.45,60.64,60.64Z"/><path d="M74.24,134.88c32-3.19,57.45-28.64,60.64-60.64h-60.64v60.64Z"/><path d="M74.24,0V60.64h60.64C131.69,28.63,106.24,3.19,74.24,0Z"/></g></g></svg>
                                    </label>
                                    <label for="slide2"
                                        class="bullet p-1 peer-checked/slide2:font-bold peer-checked/slide2:scale-125">
                                        <svg class="fill-bitter "  viewBox="0 0 120 120"><g id="_4"><path d="M59.46,0C26.62,0,0,26.63,0,59.46s26.62,59.46,59.46,59.46,59.46-26.62,59.46-59.46S92.3,0,59.46,0Zm18.2,78.08H41.27c-4.82,0-7.83-5.22-5.43-9.39l18.2-31.52c2.41-4.17,8.43-4.17,10.84,0l18.2,31.52c2.41,4.17-.6,9.39-5.42,9.39Z"/></g></svg>  
                                    </label>
                                    <label for="slide3"
                                        class="bullet p-1 translate-x-full peer-checked/slide3:font-bold peer-checked/slide3:scale-125">
                                        
                                        <svg class="fill-del-rio "  viewBox="0 0 150 150"><g id="_0"><g><path d="M24.24,101.69l26.57-26.57c4.06-4.06,4.06-10.64,0-14.7l-26.56-26.56c-4.92-4.92-13.26-3.75-16.5,2.41-10.33,19.67-10.33,43.35,0,63.02,3.23,6.16,11.58,7.32,16.5,2.41Z"/><path d="M101.69,111.31l-26.57-26.57c-4.06-4.06-10.64-4.06-14.7,0l-26.57,26.57c-4.92,4.92-3.75,13.26,2.41,16.5,19.67,10.33,43.35,10.33,63.02,0,6.16-3.23,7.32-11.58,2.41-16.5Z"/><path d="M127.8,99.28c10.33-19.67,10.33-43.35,0-63.02-3.23-6.16-11.58-7.32-16.5-2.41l-26.57,26.57c-4.06,4.06-4.06,10.64,0,14.7l26.57,26.57c4.92,4.92,13.26,3.75,16.5-2.41Z"/><path d="M33.86,24.25l26.56,26.56c4.06,4.06,10.64,4.06,14.7,0l26.57-26.57c4.92-4.92,3.75-13.26-2.41-16.5-19.67-10.33-43.35-10.33-63.02,0-6.16,3.23-7.32,11.58-2.41,16.5Z"/></g></g></svg>    
                                    </label>
                                </div>
                                
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    


    
    






</body>
<script> 
    function updateScreenSize() { 
     const width = window.innerWidth;
     const height = window.innerHeight; 
     document.getElementById('screenWidth').innerText =  + width ; 
     document.getElementById('screenHeight').innerText =  height ; } 
     window.addEventListener('resize', updateScreenSize); updateScreenSize(); 

     document.getElementById("myCircle").addEventListener("click", function() {
    this.setAttribute("fill", "blue");
  });
</script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</html>