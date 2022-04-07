# Authentication

    When creating protected routes in Express, you need to know the user's authentication status before executing the logic of route controllers. Thus, authentication in Express is a step in the request-response cycle, which you can implement as middleware.

## Level 1 - Register Users with Username and Password

    This level encryption is use to pretect our website using username and password.

    DRAWBACK: Here the password is stored in plain text and hacker should read it.

## Level 2 - Store password Encryption in database

    This level encryption is use to encrypt password with a key.

    DRAWBACK: That key is store in .env file and use it, but if a hacker need to break server then hacker must know the key. and this is auto encrypt and decrypt it.

        Use mongoose-encryption module
        This module is use for mongodb document encryption and authentication.
            Encyption is performed using AES-256-CBC.
            Encyption is performed using HMAC-SHA-512.

        Syntax:
            const encrypt = require('mongoose-encryption')      // import
            const schema = new mongoose.Schema(                 // create a schema object of mongoose.Schema class
                {
                    email: {
                        type: String
                    },
                    password: {
                        type: String
                    }
                }
            )
            const secret = 'Thisisourlittlesecrectkey'          // this is long string that would be key
            // plugin() method is use to encrypt the data of schema
            // plugin( 'import onject', { object of key, array of fields that encrypt})
            schema.plugin(encrypt, {secret:secret,encryptedFields: ['password']})

            Encryption is done autometically in save(),insertMany()
            Decryption is done autometically in find(),findOne()

## Level 3 - Using Environment Variables to Keep Secrets Safe

    dotenv module

    Dotenv is a zero-dependency module that loads environment variables from a .env file into process.env. Storing configuration in the environment separate from code is based on The Twelve-Factor App methodology.

    This module is use for access .env file for secrect things like password, encryption key, api key etc.
    
    The declare variable we can access using process.env.KEY_NAME

    How to import that module?
        npm install dotenv
        require('dotenv').config()      // this imort must be in top of line/ 1st line
        process.env.KEY_NAME

## Level 4 - Hashing Passwords

    This level encryption is use to encrypt password without a key and it only encrypt not decrypt that hash output.

    DRAWBACK: In hasing we can use md5 encryption method is weak because it only encrypt user defind password that id crack in a second by GPU using HASH table from hacker.

    It is a JavaScript function for hashing messages with MD5.

    Install:
        npm install md5
    
    import:
        const md5 = require('md5')

    use:
        md5(variable)

## Level 4 - Salting and Hashing Passwords with bcrypt

    Concept of bcrypt method is: user defind password + number of salt round[ it means add extra random number to strong the password] = result of encryption password to store

    Install:
        if any perticular version required
        npm install bcrypt@compatibleVersion

        npm install bcrypt

    import:
        const bcrypt = require('bcrypt')
        const saltRound = 10 //more number means stong password and heavy use of CPU&GPU

        LIKE:
            saltRound=8 : ~40 hashes/sec
            saltRound=9 : ~20 hashes/sec
            saltRound=10: ~10 hashes/sec
            saltRound=11: ~5  hashes/sec
            saltRound=12: 2-3 hashes/sec
            saltRound=13: ~1 sec/hash
            saltRound=14: ~1.5 sec/hash
            saltRound=15: ~3 sec/hash
            saltRound=25: ~1 hour/hash
            saltRound=31: 2-3 days/hash

    Use:
        const bcrypt = require('bcrypt');
        const saltRounds = 10;

        Encryption:
            bcrypt.hash('plain text/password',saltRound, (err,hash)=>{
                //code: hash is encrypted plain text/password
            })

            Example:
                bcrypt.hash(req.body.password, saltRound, (err,hash)=>{
                const newUser = new User(
                    {
                        email: req.body.username,
                        password: hash
                    }
                )
                newUser.save(
                    (err)=>{
                        if(err)
                            console.log(err)
                        else    
                            res.redirect('/')
                    }
                )
            })

        Decryption:
            bcrypt.compare('plain text/password',hash password, (err,result)=>{
                // result === true
            })

            Example:
                bcrypt.compare(password,found.password,(err,result)=>{
                            if(result === true)
                            res.render('secrets')
                        })

## What are Cookies and Sessions?

    Cookies and sessions make the HTTP protocol stateful protocol. Session cookies: Session cookies are the temporary cookies that mainly generated on the server-side. The main use of these cookies to track all the request information that has been made by the client overall particular session.

## Using Passport.js to Add Cookies and Sessions

    Passport is Express-compatible authentication middleware for Node.js.

    Passport's sole purpose is to authenticate requests, which it does through an extensible set of plugins known as strategies. Passport does not mount routes or assume any particular database schema, which maximizes flexibility and allows application-level decisions to be made by the developer. The API is simple: you provide Passport a request to authenticate, and Passport provides hooks for controlling what occurs when authentication succeeds or fails.

    Modules:
        passport    : Passport is Express-compatible authentication middleware for Node.js.

        passport-local  :   This module lets you authenticate using a username and password in your Node.js applications. By plugging into Passport, local authentication can be easily and unobtrusively integrated into any application or framework that supports Connect-style middleware, including Express.

        passport-local-mongoose : Passport-Local Mongoose is a Mongoose plugin that simplifies building username and password login with Passport.

        express-session NOT express-sessions : Create a session middleware with the given options.

    Install:
        npm install passport passport-local passport-local-mongoose express-session

    Import:
        const session = require('express-session')
        const passport = require('passport')
        const passportLocalMongoose = require('passport-local-mongoose')  // import in model page

    Use:
        Step 1: setup session

            app.use(session({
                secret: 'Our little secret.',
                resave: false,
                saveUninitialized: false
            }))

        Step 2: passport intialize and call session method

            app.use(passport.initialize())
            app.use(passport.session())

        Step 3: passport-local-mongoose object plugin to database schema 

            schema.plugin(passportLocalMongoose)

        Step 4: passport create a model stategy and serialize and deserialize

            passport.use(User.createStrategy())
            passport.serializeUser(User.serializeUser())
            passport.deserializeUser(User.deserializeUser())

        Step 5: Authenticate user in register

            .post(
                (req,res)=>{
                    User.register({username: req.body.username}, req.body.password, (err,user)=>{
                        if(err){
                            console.log(err)
                            res.redirect('/register')
                        }else{
                            passport.authenticate('local')(req,res,()=>{
                                res.redirect('/secrets')
                            })
                        }
                    })
                }
            )

        Step 6: Authenticate user to login

            .post(
                (req,res)=>{
                    const user = new User({
                        username: req.body.username,
                        password: req.body.password
                    })

                    req.login(user, (err)=>{
                        if(err){
                            console.log(err)
                        }else{
                            passport.authenticate('local')(req,res, ()=>{
                                res.redirect('/secrets')
                            })
                        }
                    })
                }
            )

        Step 7: Check user is authenticate then goto secrets page or not

            app.get('/secrets',(req,res)=>{
                if(req.isAuthenticated()){
                    res.render('secrets')
                }else{
                    res.redirect('/login')
                }
            })

        Step 8: Logout and delete the session/cookie

            app.route('/logout').get(
                (req,res)=>{
                    req.logout()
                    res.redirect('/')
                }
            )


### Level 6 - OAuth 2.0 & How to Implement Sign In with Google [third party signin]

    OAuth - Open Authorisation
        - Access Levels : Give permission to access the perticular feilds to your specific work
        - Read only/read-write Access : only read email or post from third party / write a post or change anythig using read-write access
        - Revoke Access : user wants to revoke/deauthorize your website from third party like google/facebook

    Step 1: Step up your app/website in third party [ google/facebook ]
            It gives app id, client id, uri/redirect point

    Step 2: Redirect to authenticate page of our website

    Step 3: User logs in from third party to authenticate

    Step 4: User grants permissions

    Step 5: Receive Authentication code

    Step 6: Exchange AuthCode for Access token
            Auth code is for successfully login
            Access token is for access pieces of information that are stored on third party.

    Example:

    Login with google OAuth 2.0

    Create Application on google API

        Step 1: Set up on google api 
            
            https://console.cloud.google.com/apis/dashboard?project=true-vista-236913&cloudshell=false

            Create project and name it "Secret"

        Step 2: Set up OAuth consent screen

            2.1: Goto OAuth consent screen
            2.2: select external user type and click create
            2.3: fill the form and click save and continue
            2.4: Add scopes for we request the data like email,profile,openid and save and continue
            2.5: add test user for testing, in this case we are not configure that

        Step 3: Create a credential using client id

            Goto the credential tab and click create credential,click option oauth client id

            3.1: Choose application type- web application
            3.2: Type name of our website
            3.3: Authorized javascript origins: Type Our login URL
                    like: http://localhost:3000
            3.4: Authorized redirect URIs: type after the suucess of authentication which url hit
                    like: http://localhost:3000/auth/google/secrets

            3.5: Noe receive client id and client secret
                
    Configure Strategy

        Step 1: Install the module: google oauth 2.0

            $ npm install passport-google-oauth20
        
        Step 2: Import

            const googleStrategy = require('passport-google-oauth20').Strategy

        Step 2.5: Configure serialize user into session

            passport.serializeUser( (user, done)=>{
                done(null,user.id)
            })
            passport.deserializeUser( (id, done)=>{
                User.findById(id, (err,user)=>{
                    done(err,user)
                })
            })

        Step 3: Configure google strategy, set this below code after passport serializeUser and deserializeUser

         passport.use(new GoogleStrategy({
                clientID: GOOGLE_CLIENT_ID,
                clientSecret: GOOGLE_CLIENT_SECRET,
                callbackURL: 'http://www.example.com/auth/google/callback',
                userProfileURL:"https://www.googleapis.com/oauth2/v3/userinfo"      // this option is use to remove an error google+ api deprecating
            },
            function(accessToken, refreshToken, profile, cb) {
                User.findOrCreate({ googleId: profile.id }, function (err, user) {
                return cb(err, user);
                });
            }
        ))

    NOTE: findOrCreate() is not a mongoose method we can access in different method: mongoose-findorcreate module
        THis method is use to find if exists or create your data in database
        
            install: 
                $ npm install mongoose-findorcreate
            import: 
                const findOrCreate = require('mongoose-findorcreate')
            use:
                schema.plugin(findOrCreate)

                modelName.findOrCreate()

        Step 4: Setup Frontend like button

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                    <a class="btn btn-block" href="/auth/google" role="button">
                        <i class="fab fa-google"></i>
                        Sign In with Google
                    </a>
                    </div>
                </div>
            </div>

        Step 5: Authenticate Requests

            app.get('/auth/google',
            passport.authenticate('google', { scope: ['profile'] }));

            app.get('/auth/google/callback', 
            passport.authenticate('google', { failureRedirect: '/login' }),
            function(req, res) {
                // Successful authentication, redirect home.
                res.redirect('/');
            });

        Step 6: Save the data in database using findOrCreate() method in step 2