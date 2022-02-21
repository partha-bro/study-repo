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
    
    copy the code : <i class="fa fa-apple"></i>

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

## Margin

    ml-auto     => margin-left:auto;