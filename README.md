![Wordy](public/images/logo-wordy.svg)

# Tasks
* Integrate with the Wordnik API
* Output Wordnik Word of the Day data for the last 7 days (listings page) using JavaScript to grab data from the backend
* Output Wordnik word data (single word)
* Build a search/define form in the header that jumps to the single word page for the given word
* Match the provided designs, using SASS and compiling via gulp

## Tasks Breakdown

### Integrate with the Wordnik API to grab necessary data
* You'll need to get data from:
    * `GET /words.json/wordOfTheDay`
    * `GET /word.json/{word}`
    * `GET /word.json/{word}/topExample`
    * `GET /word.json/{word}/definitions`
    * `GET /word.json/{word}/scrabbleScore`
* You'll find existing an existing Slim AJAX controller (`AjaxController`) with the some existing actions for those endpoints. Work within, alter, or add actions as you see fit.
* It's up to you how you store the access token but we'd prefer to see you store it in an environment variable.

### Word Listings Page - Using JavaScript on the frontend, output word of the days for the last 7 days
* Use jQuery, React, Vue or any other framework you like (see [#Frontend frameworks](Frontend frameworks)) and grab data from the backend
* Use the home controller (`HomeController`) 
* The block for each work should link to single word page.

### Single Word Page - Output word data on a single word page
* You'll need to collate data from a couple of endpoints.
* The design lays out what data should output.
* URL should be either:
    * `/word/{:word}/`
    * `/word/` with the word passed as a query variable
* Add a new controller (see `app/Controller/`, `app/dependencies.php`, `app/routes.php`)
* It's up to you whether you want to output this in frontend code or within Slim's templates.

### Search/Define Input in Header
* Make the define/search text box jump directly to a single word page

### Matching the designs using SASS
* All your styles should be in SASS, compliled to CSS at `public/css/styles.css`, uglified and autoprefixed.
* There is a starter gulpfile in the codebase already.

---

# Codebase Groundwork
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
* Feel free to add whatever libraries (PHP/JS/Node/whatever) you see fit. Often using a library is the right thing to do, sometimes not. We like to see those decisions made appropriately.
* We don't expect the layout to be perfect responsively, but we expect to see at least some effort made here.
