# Tasks
* __Integrate with the Wordnik API to grab necessary data:__
    * You'll need to implement with:
        * `GET /words.json/wordOfTheDay`
        * `GET /word.json/{word}`
        * `GET /word.json/{word}/topExample`
        * `GET /word.json/{word}/definitions`
        * `GET /word.json/{word}/scrabbleScore`
    * You'll find existing an existing Slim AJAX controller (`AjaxController`) with the some existing actions for those endpoints. Work within, alter, or add actions as you see fit.
    * It's up to you how you store the access token but we'd prefer to see you store it somewhere that wouldn't be versioned were you to commit this codebase into a git repo.
* __Using frontend code, output word of the days for the last 7 days:__ 
    * Match the design provided
    * Use the home controller (`HomeController`) 
    * Use either your frontend framework of choice, or implement however you see fit.
    * The block for each work should link to single word page.
* __Output word data on a single word page:__ 
    * Data needs to gathered from a couple of endpoints here
    * URL should be either
        * `/word/{:word}/`
        * `/word/` with the word passed as a query variable
    * Match the design provided
    * Add a new controller (see `app/Controller/`, `app/dependencies.php`, `app/routes.php`)
    * The design lays out what data should output.
    * It's up to you whether you want to output this in frontend code or within Slim's templates.
* __Make the define/search text box jump directly to a single word page__ 
* __Achieve compiled CSS using gulp:__ 
    * All your styles should be in SASS
    * There is a starter gulpfile in the codebase already.
    * Using that as a starting point, get the SASS src to complile to the right location.
    * Ideally compressing and autoprefixing.

# Working with this codebase
The groundwork for this task is built within the [Slim PHP framework](http://www.slimframework.com/) which is as a MVC micro framework. We've baked in some conveniences for you so that you can focus on the important parts.

## Setup

### Environment
We've supplied a [docker compose](https://docs.docker.com/compose/) config, so you should be able to just `docker-compose up` to get a server running. If you want to use another environment, please do.

### Libraries
We're using composer to require PHP libraries, so make sure you `composer install`. Likewise, for working with gulp make sure you `npm install` and install any other requirements.


### Frontend frameworks
Decide what frontend framework(s) to use and head to `app/settings.php` and set values in `scripts`. We've set up groundwork for including React, Vue, and jQuery there. We've also included a central scripts file (`public/js/script.js`) that you can add your JS too. If you want to add more, in `app/settings.php` just add more paths to the `other` array in `scripts`.

If you choose to use React and want to use JSX, babel-standalone is available in this development environment, see Adding Babel below.

#### Adding Babel
If you want to use ES6 features, or JSX with your React code then turn babel on 

## Designs and Assets
You'll find the design in `docs/`. Please match this as closely as possible, using any CSS features you see fit. We'll be looking at it in Chrome latest, Edge latest, and some late version of IE.

You'll find all of the SVG assets needed in `public/images/`.

# Notes
* The groundwork setup here is as a convenience to get right to the point of what we're interested in seeing from you. If you want to make changes anywhere, please do so as you see fit.
* When integrating with the [Wordnik API](https://developer.wordnik.com/docs) you'll need an access token. We should have sent you one already, if not, or if the token is somehow rate limited it is [free to create one](https://www.wordnik.com/signup).
* Feel free to add whatever libraries (PHP/JS/Node/whatever) you see fit. We like to see appropriate judgement of when use to use libraries or not.
* We don't expect the layout to be perfect responsively, but we expect to see at least some effort made here.