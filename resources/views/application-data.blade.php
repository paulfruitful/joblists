<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Joblists</title>
        <link rel="shortcut icon" href="https://www.kindpng.com/picc/m/133-1337806_job-vector-seeker-job-logo-magnifying-glass-png.png" type="image/x-icon">
       
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        
        <x-nav-nav/>
        <div class="container p-2 mx-auto">
            <div class="flex flex-row flex-wrap py-4">
                <aside class="w-full sm:w-1/3 md:w-1/4 px-2">
                    <div class="sticky top-0 p-4 bg-white rounded-xl w-full">
                        <ul class="nav flex flex-col overflow-hidden">
                            <li class="nav-item">
                                <a class="nav-link text-purple-800 hover:text-gray-900 truncate" href="/#home">
                                   Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-purple-800 hover:text-purple-600 truncate" href="/#orders">
                                    Cover Letter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-purple-800 hover:text-purple-600" href="/#products">
                                    <span class="fa fa-cart-plus mr-2"></span> Portfolio</a>
                            </li>
                           
                        </ul>
                    </div>
                </aside>
                <main role="main" class="w-full sm:w-2/3 md:w-3/4 pt-1 px-2">
                    <h1 class="text-2xl" id="home">Main Content</h1>
                    <p>Let's look at the base Tailwind classes that are used for this layout. There are 2 columns. The left sidebar (aside), and the main content area on the right. </p>
                    <p class="pt-4"> The flexbox (parent) container: </p>
                    <ul>
                        <li><span class="text-purple-700">flex</span> - for <code>dislay:flex</code></li>
                        <li>flex-row - for <code>flex-direction: row</code></li>
                        <li>flex-wrap - for <code>flex-wrap: wrap</code></li>
                        <li>py-4 - for <code>padding-(top|bottom): 1rem</code></li>
                    </ul>
                    <p class="pt-4"> The aside (left) column: </p>
                    <ul>
                        <li>w-full - for 100% width</li>
                        <li>sm:w-1/3 - for 33% width on sm and larger</li>
                        <li>md:w-1/4 - for 25% width on md and larger</li>
                        <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
                    </ul>
                    <p class="pt-4"> The main (right) column: </p>
                    <ul>
                        <li>w-full - for 100% width</li>
                        <li>sm:w-1/3 - for 66% width on sm and larger</li>
                        <li>md:w-1/4 - for 75% width on md and larger</li>
                        <li>pt-1 - for <code>padding-top: .25rem</code></li>
                        <li>px-2 - for <code>padding-(left|right): .5rem</code></li>
                    </ul>
                    <hr class="my-5">
                    <section class="min-h-screen" id="orders">
                        <h1 class="text-2xl mt-5">Orders</h1>
                        <p class="pb-4">Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                        <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                    </section>
                    <section class="min-h-screen" id="products">
                        <h1 class="text-2xl mt-5">Products</h1>
                        <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                    </section>
                    <section class="min-h-screen" id="customers">
                        <h1 class="text-2xl mt-5">Customers</h1>
                        <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                    </section>
                    <section class="min-h-screen" id="reports">
                        <h1 class="text-2xl mt-5">Reports</h1>
                        ...
                        <p>Put'cha content here</p>
                    </section>
                    <section class="" id="int">
                        <h1 class="text-2xl mt-5">Integrations</h1>
                        ...
                        <p>Put'cha content here</p>
                    </section>
                </main>
            </div>
        </div>
        <footer class="bg-black mt-auto">
            <div class="container p-4 text-white mx-auto">
                <h1 class="text-2xl" >Footer</h1>
                <div class="flex">
                    <div class="flex-grow flex flex-col">
                        <a href="/#home">Boom</a>
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                    </div>
                    <div class="flex-grow flex flex-col">
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                    </div>
                    <div class="flex-grow flex flex-col">
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                    </div>
                    <div class="flex-grow flex flex-col">
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                        <a href="#">Boom</a>
                    </div>
                </div>
                <div class="text-right text-xs py-4">
                    <a href="">&copy;2021 Someco Inc.</a>
                </div>
            </div>
        </footer>
    </body>
</html>