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

    ##### Best Theme for VS
        - Andromeda     [My Best Theme Ever]
        - gerane.Dracula Theme
        - Material Icon Theme
        - peacock       [For different color of workspace]
        - Better Comments

    ##### Recommended
        - esbenp.prettier-vscode
        - hex-ci.stylelint-plus
        - dbaeumer.vscode-eslint
        - DigitalBrainstem.javascript-ejs-support
        - sublime babel/ babel javascript
        - Auto Rename Tag
        - Bracket Pair Colorization Toggler
        - Quokka.js : Use for live debug while codding
		- Rapid API
        - Ritwick Dey.Live Server
        - Matt Bierner.Markdown preview Github style
        - Marquee : Stay organized
        - Quokka [ Live debug of js code ]
        
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

       >> ubuntu:     
			
			git:
				sudo add-apt-repository ppa:git-core/ppa
				sudo apt update
				sudo apt install git -y
			
			node:
				cd ~
				sudo apt install curl
				curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash
				source ~/.bashrc
				nvm install v16.16.0
				npm install -g nodemon
				nodemon -v
				node -v
				npm -v
				npx -v
			
			mongodb:
			
				mongodb-compass:
					sudo dpkg -i mongodb-compass_1.32.6_amd64.deb
					
				mongodb v4
					wget -qO - https://www.mongodb.org/static/pgp/server-4.4.asc | sudo apt-key add -
					echo "deb [ arch=amd64,arm64 ] https://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/4.4 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-4.4.list
					sudo apt-get update
					sudo apt-get install -y mongodb-org
					sudo systemctl start mongod
					sudo systemctl status mongod

### Git & GitHub

### Heroku

### mongoDb application
    $ mongod
    $ mongo

    # import Array
        mongoimport --db schandOfflineDB --collection requests --type json --file requests.json --jsonArray
        mongoimport --db schandOfflineDB --collection users --type json --file users.json --jsonArray

    # Export
        mongoexport --db schandOfflineDB --collection requests --out requests.json
        mongoexport --db schandOfflineDB --collection users --out users.json

    # import
        mongoimport --db schandOfflineDB --collection requests --type json --file requests.json
        mongoimport --db schandOfflineDB --collection users --type json --file users.json

### API
    - Google API
    - Facebook API
    
### React app
    $ npx create-react-app projectName
    $ cd projectName
    $ npm start

### Create React app through vite
    $ npm create vite projectName
    $ cd projectName
    $ npm install
    $ npm run dev

### Testing js
	- Node Js
	- React Js
		- JEST for JS Testing
        - Supertest for Node REST-API Testing