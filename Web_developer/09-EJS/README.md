# EJS - Embedded JavaScript templating

    EJS is a simple templating language which is used to generate HTML markup with plain JavaScript. It also helps to embed JavaScript to HTML pages.

## Using EJS with Express

### Basic setup
        First, install EJS:

        Using the package manager npm:

        $ npm install ejs

### In Express v4, a very basic setup using EJS would look like the following. (This assumes a 'views' directory containing an 'fileName.ejs' page.)

    Example:
        let express = require('express');
        let app = express();

        app.set('view engine', 'ejs');

        app.get('/', (req, res) => {
        res.render('fileName', {foo: 'FOO'});
        });

        app.listen(4000, () => console.log('Example app listening on port 4000!'));

    There are a number of ways to pass specific configuration values to EJS from Express.
    in EJS file we receive variable in below markup
        <h1>Today is <%= nameOfToday %></h1>

## NOTE: 1. All ejs files extension must be filename.ejs and located in views folder
        
        2. ejs module need to be install through npm but we can not include to js file, we can set ejs using set( 'view engine','ejs') method with parameters

            app.set('view engine','ejs')
        
        3. In get() or post() method of app instance use render method to call ejs file with an object pass to that file

            like:
                res.render('list', {nameOfToday:today});

        4. In ejs fle we can recieve that object using render() using <%= %> markup
            example:
                <h1>Today is <%= nameOfToday %></h1>

## Tags
    <% 'Scriptlet' tag, for control-flow, no output
        This tag is use for javascript code in ejs file
            like:
                <% if (condition){ %>
                    html code
                <% } %>
            it interprete line by line

    <%= Outputs the value into the template (HTML escaped)
        This tag use to show the value of passing data from server
            like:
                <%= nameOfToday %>
                
    <%- Outputs the unescaped value into the template   
        This tag is use to add other pages into one pages like

            <%- include('header') -%>       // it means header.ejs file include in another ejs file
            <%- include('footer') -%>

    <%# Comment tag, no execution, no output


## how to include common html files to all other html file in diferent location?

    <%- include('other ejs file without extension .ejs') %>

    example 1:
        folder structure:
            views/
                header.ejs
                footer.ejs
                index.ejs

        index.ejs
            <%- include('header') -%>
            <%- include('footer') -%>

    example 2:
        folder structure:
            views/
                index.ejs
                partials/
                    header.ejs
                    footer.ejs

        example:
            index.ejs
                <%- include('partials/'+'header') %>
                <%- include('partials/'+'footer') %>
