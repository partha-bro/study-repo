require('dotenv').config()
const express = require('express')
const bodyparser = require('body-parser')
const ejs = require('ejs')
const User = require('./module/user')
const session = require('express-session')
const passport = require('passport')
const GoogleStrategy = require('passport-google-oauth20').Strategy

const app = express()
app.set('view engine', 'ejs')
app.use(express.static('public'))
app.use(bodyparser.urlencoded( {extended:true} ))

app.use(session({
    secret: 'Our little secret.',
    resave: false,
    saveUninitialized: false
}))

app.use(passport.initialize())
app.use(passport.session())

passport.use(User.createStrategy())

passport.serializeUser( (user, done)=>{
    done(null,user.id)
})
passport.deserializeUser( (id, done)=>{
    User.findById(id, (err,user)=>{
        done(err,user)
    }) 
})

// configure google strategy
passport.use(new GoogleStrategy({
    clientID: process.env.CLIENT_ID,
    clientSecret: process.env.CLIENT_SECRET,
    callbackURL: 'http://localhost:3000/auth/google/secrets',
    userProfileURL:"https://www.googleapis.com/oauth2/v3/userinfo"
  },
  function(accessToken, refreshToken, profile, cb) {
      console.log(profile)

    User.findOrCreate({ googleId: profile.id }, (err, user)=> {
      return cb(err, user)
    })
  }
))

app.get('/auth/google',
  passport.authenticate('google', { scope: ['profile'] }))

app.get('/auth/google/secrets', 
  passport.authenticate('google', { failureRedirect: '/login' }),
  function(req, res) {
    // Successful authentication, redirect home.
    res.redirect('/secrets');
  });

app.route('/').get( (req,res)=>{
    res.render('home')
})

app.route('/login')
.get(
    (req,res)=>{
        res.render('login')
    }
)
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

app.route('/register')
.get(
    (req,res)=>{
        res.render('register')
    }
)
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

app.get('/secrets',(req,res)=>{
    User.find( 
        {
            secret: { $ne:null }
        },(err,found)=>{
            if(err) console.log(err)
            else{
                res.render('secrets', { userWithSecrets:found })
            }
        }
    )
})

app.route('/submit')
.get(
    (req,res)=>{
        if(req.isAuthenticated()){
            res.render('submit')
        }else{
            res.redirect('/login')
        }
    }
)
.post(
    (req,res)=>{
        const submittedSecret = req.body.secret
        console.log(req.user)
        User.findByIdAndUpdate( { _id:req.user._id }, {$set : {secret:submittedSecret}}, (err)=>{
            if(err) console.log(err)
            else{
                res.redirect('/submit')
            }
        })
    }
)

app.route('/logout').get(
    (req,res)=>{
        req.logout()
        res.redirect('/')
    }
)

app.listen(process.env.PORT, ()=>{
    console.log('Server is running on port: '+ process.env.PORT)
})