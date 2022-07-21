# Course Name: Web Development Bootcamp 2.0

# NOTE: Always Rememder DRY style code
        D : Do not 
        R : Reapet
        Y : Yourself
        
## Setup...

### Chrome Browser

    Q. How to delete cache and hard reload?
    A. This method is only work in snippet of chrome.
    Please goto the reload button then right click on it.
        there are three options comming,    Normal reload/
                                            Hard reload/
                                            Empty Cache and Hard reload

    Q. How to know about html element with css style manupulation?
    A. Please open developer option and goto the "Elements" section to see
            html code
            css style
            margin/ padding style with box diagram

    Q. How to check javascript code error or run any code in chrome?
    A. Please open developer option,
        Then goto the Sources tab
        find >> symbol and click it
        after that select Snippets option to write code and press ctrl+enter to execute js code in browser.

#### Chrome Extension

        Pesticide for Chrome (without hover bar)
        json viewer
        enhancer for youtube
        React Developer Tools

#### How to know about screen resolution in chrome browser?

    In chrome browser, 
        1. open dev tool bar 
        2. resize the window 
        3. look at right-top corner to see resolution of the screen.

### Visual Code

#### VS Extension

    - jellyfish theme
    - gerane.Dracula Theme
    - Ritwick Dey.Live Server
    - Matt Bierner.Markdown preview Github style
    - Marquee : Stay organized

    ##### Recommended
        - esbenp.prettier-vscode
        - formulahendry.auto-close-tag
        - hex-ci.stylelint-plus
        - dbaeumer.vscode-eslint
        - DigitalBrainstem.javascript-ejs-support
        - sublime babel/ babel javascript
        - Auto Rename Tag
        - Bracket Pair Colorization Toggler
        - Quokka.js : Use for live debug while codding


    ##### Optional
        - erikphansen.vscode-toggle-column-selection
        - VScode-icons

### Node 
    Install: 
       >> windows 8 or 7: 
                Step 1: Node x64 link: https://nodejs.org/download/release/v16.16.0/
                            Download the zip file.

                Step 2: Extract it in C drive like C:\nodejs

                Step 2: Setup Envirment Variable:

                    -> In System variable, add PATH value to C:\nodejs;

                    -> "NODE_SKIP_PLATFORM_CHECK" set this value to "1"

                    -> "NODE_PATH" set this value to "C:\node32\node_modules"

                Step 3: $ node -v   => 16.16.0
                        $ npm -v    => 8.11.0
                        // update npm
                        $ npm i --location=global npm@8.15.0
                        $ npm -v    => 8.15.0

                Step 4: create project using npx 
                            $ npx create-react-app my-first-app
                        
                        create react project using vite for speed
                            $ npm create vite
                    
        
       >> Latest:     node-v16.14.0-x64.msi
                    mongodb-windows-x86_64-5.0.6-signed.msi

       >> ubuntu:     curl -fsSL https://deb.nodesource.com/setup_current.x | sudo -E bash -
                    sudo apt-get install -y nodejs
                    sudo apt-get install -y npm

### Git & GitHub

### Heroku

### mongoDb application
    $ mongod
    $ mongo

### API
    - Google API
    - Facebook API
    
### React app
    $ npx create-react-app projectName
    $ cd projectName
    $ npm start
