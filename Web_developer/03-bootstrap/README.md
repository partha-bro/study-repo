# Bootstrap V4

    Bootstrap is the most popular CSS Framework for developing responsive and mobile-first websites.

    **Note: Before jump to coding part of your website, 
        First:  make some design on pen & paper to how your website is going to be displayed.
        Second: Use a website to build schema of my website
                https://balsamiq.cloud **

## Navigation Bar

    1. <nav></nav> tag
     class are
        .navbar             => use for nav tag
        .navbar-expand-md   => use for nav bar convert horizental to vertical
        nabbar-light        => use for nav bar light 
        .bg-light           => nav section background color light

    2. use to brand name or image in navigation bar
        user achor tag with class .navbar-brand

    3. ul tag for contain the menus
        .navbar-nav   => use for ui

    4. li tag for contain the menu items 
        .nav-item     => use for li items

    5. achor tag for contain a link
        .nav-link     => use for link in navigation

    6. Hamburger menu
        step 1 : create a button that can collapse 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        step 2 : menu will be selected by id 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

## Grid System
    This is like more than one element show in a row to column with equaly divided according to screen size. the total numer of grid is 12. if you have 4 col/grid then [ 12 divided by 3 ] there are three grid present.

    .container      : this is contain the element in some left and right margin value
    .container-fluid : this is contain the element in zero pixel left and right margin value
    .row            : In that container how many row do you want to display
    .col-lg-n         : lg for large / md for medium / sm for small
                        This lg/md/sm use to response the grid to up and down. if size is less than given class.

                    example: if i use col-md-6 & col-md-6 in a row if website run in laptop/tablet then its fine but when we run in it mobile then 1st col-md-6 is top and 2nd col-md-6 is after that display.

    .col-lg-n       : where n is a number of 1 to 12 

    NOTE: we can use more than one classes on div like <div class=" col-lg-12 col-md-6 col-sm-3 "></div>

## How to add external font to website?
    Goto the https://fonts.google.com/ website, 
    search your fonts and add it when all add is done,
    copy the embeded code to your head tag and use it in respective selector with font-family:""

## How to add external font icons to website?
    use this CDN for bootstarp: <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    syntax: <i class='fa fa-object-name fa-size'></i>

    fa-size : fa-1x / fa-2x / fa-3x / fa-4x / fa-5x
    
    copy the code : <i class="fa fa-apple fa-4x"></i>

## Buttons

    Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.

    <button type="button" class="btn btn-primary">Primary</button>

    classes
        button color:
            btn btn-primary
            btn btn-secondary
            btn btn-success
            btn btn-danger
            btn btn-warning
            btn btn-info
            btn btn-light
            btn btn-dark
            btn btn-link

        outline color button:
            btn btn-outline-primary
            btn btn-outline-secondary
            btn btn-outline-success
            btn btn-outline-danger
            btn btn-outline-warning
            btn btn-outline-info
            btn btn-outline-light
            btn btn-outline-dark
            btn btn-outline-link

        button size:
            btn btn-lg btn-primary
            btn btn-sm btn-primary

        Full width of 100% use:
            btn-block

## Text color:
    classes
        text-primary
        text-seconary
        text-success
        text-danger
        text-warning
        text-info
        text-light
        text-dark

## Carousel Components

    Meaning of Carousel: A roating machice or device, in particular a converyor system at an airport from which arriving passengers collect their luggage.

    A slideshow component for cycling through elements - images or slides of texts - like a carousel.

    options: Options can be passed via data attributes or javascript.
    append option name to data-, as in data-interval=""

        interval : 5000     => The amount of time to delay between automattically cycling in 5sec = 5000 millisec
        keyboard : true     => Whether the carousel should react to keyboard events
        pause    : "hover"  => if set hover, pause the cycling of the carousel on mouse enter and resumes the cycle when mouse leave 
                 :  false   => if set false, mouse hover won't work
        ride     : false    => Autoplays the carousel after the user manually cycles the first items. 
                 : "carousel" => if carousel autoplays the carousel on load.
        wrap     : true     => Whether the carousel should cycle continuously or have hard stops.

    CODE:

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="..." alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
 
## Cards 

        Botstrap's cards provide a flexible and extensible content container with multiple variants and options.

        syntax:
        <div class='cards'>
            <div class='card-header'>
            </div>
            <div class='card-body'>
            </div>
            <div class='card-footer>
            </div>
        <div>

## Media query Breakpoints
    The @media query is 1/3 of the recipe for responsive design. It is the key ingredient that, in it’s simplest form, allows specified CSS to be applied depending on the device and whether it matches the media query criteria.

    Syntax:
        @media <type> <feature>

    Example:
        @media (max-width:900px) and (max-width:1000px) {
            // css style code
        }

    Min-width:
        // Small devices (landscape phones, 576px and up)
        @media (min-width: 576px) { ... }

        // Medium devices (tablets, 768px and up)
        @media (min-width: 768px) { ... }

        // Large devices (desktops, 992px and up)
        @media (min-width: 992px) { ... }

        // X-Large devices (large desktops, 1200px and up)
        @media (min-width: 1200px) { ... }

        // XX-Large devices (larger desktops, 1400px and up)
        @media (min-width: 1400px) { ... }

    Max-width:
        // X-Small devices (portrait phones, less than 576px)
        @media (max-width: 575.98px) { ... }

        // Small devices (landscape phones, less than 768px)
        @media (max-width: 767.98px) { ... }

        // Medium devices (tablets, less than 992px)
        @media (max-width: 991.98px) { ... }

        // Large devices (desktops, less than 1200px)
        @media (max-width: 1199.98px) { ... }

        // X-Large devices (large desktops, less than 1400px)
        @media (max-width: 1399.98px) { ... }

        // XX-Large devices (larger desktops)
        // No media query since the xxl breakpoint has no upper bound on its width

    Single breakpoint:
        @media (min-width: 768px) and (max-width: 991.98px) { ... }

    Between breakpoints:
        // Apply styles starting from medium devices and up to extra large devices
        @media (min-width: 768px) and (max-width: 1199.98px) { ... }
## Margin

    ml-auto     => margin-left:auto;