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

        1. Pesticide for Chrome (without hover bar)
        2. JSON Viewer
        3. enhancer for youtube
        4. React Developer Tools
        5. Redux DevTool
        6. Daily 2.0
        7. Enhanced Github
        8. Clear Cache
        9. VidIQ
        10.CSSViewer
        11.Web Developer
        12.Site Palette
	13.One Tab
 	14.Easy color picker
  	15.Timezone Converter
   	16.VisBug

#### How to know about screen resolution in chrome browser?

    In chrome browser, 
        1. open dev tool bar 
        2. resize the window 
        3. look at right-top corner to see resolution of the screen.

### Visual Code

#### VS Extension

    ##### Best Theme for VS
        - Web Template Studio (Preview) : Microsoft
        - ayu Theme     [My Best Theme Ever]
        - Andromeda     
        - gerane.Dracula Theme
        - Material Icon Theme
        - peacock       [For different color of workspace]
        

    ##### Recommended
        - esbenp.prettier-vscode
        - dbaeumer.vscode-eslint
        - sublime babel/ babel javascript
        - Auto Rename Tag
        - Bracket Pair Colorization Toggler
        - Quokka.js : Use for live debug while codding
        - Ritwick Dey.Live Server
        - Matt Bierner.Markdown preview Github style
        - ES7 React/Redux Snippets
        - Better Comments
        - Docker
        - Error lens
        - Git graph
        - Highlight matching tag
        - Todo tree
        - Tabnine AI
        
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

### Deploy apps in free
    - Heroku is Dead for free

    - Now Alternatives
        - back4app.com
        - Cyclic.sh
        - railway.app
        - fly.io
        - render.com

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

## How to show a branch of git on Terminal?
- Add in ~/.bashrc file
```
    # Show git branch name
    force_color_prompt=yes
    color_prompt=yes
    parse_git_branch() {
    git branch 2> /dev/null | sed -e '/^[^*]/d' -e 's/* \(.*\)/(\1)/'
    }
    if [ "$color_prompt" = yes ]; then
    PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[01;31m\]$(parse_git_branch)\[\033[00m\]\$ '
    else
    PS1='${debian_chroot:+($debian_chroot)}\u@\h:\w$(parse_git_branch)\$ '
    fi
    unset color_prompt force_color_prompt
```
- source ~/.bashrc file for refresh
