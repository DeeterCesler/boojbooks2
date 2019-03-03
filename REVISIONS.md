## Boojbooks2 process and discovered errors:

- After forking and cloning the repo, I did a composer update to install and make sure all dependencies were up to date.
- I saw there was no .env file so I copied .env.example and then did php artisan key:generate to resolve the missing key
- I then created and connected a MySQL database via .env
- I used php artisan migrate order to update and prepare the DB
    - Side note: there was an error using the DB here until I did a workaround directly in MySQL to update the password since there was a user password encryption mismatch (MySQL was already up-to-date, but I just reset the native password to what it already was in order to update encryption with

### Issues:
When adding an author:
- Requirements:
-   Birthday
- It’ll give you a server error and the page won’t render
- It should probably send a flash to tell the user what’s missing

When adding an book:
- requirements
    - page number
    - title
    - date
- recommend the same “flash” addition if any of the above are missing

Toggle dropdown navbar doesn’t work
- the user logout button is wrapped in the (hidden) navbar menu and therefore inaccessible
- There is also no route to an edit page (and there is no edit page)

This points to a larger issue where there is no user controller, only auth 
- Ergo there is no CRUD functionality for user models, only create (no read, update, or destroy)

- The template table(s) showing books and authors (not the database table) is not responsive when less than around 475px
- start to overflow page to the right, cuts off from view without side scrolling

It would be helpful to have a rule that either:
- the book page will redirect to a new author page if no authors have been added yet 
    - (because if there are no authors, there won’t be any books to vie, and no way to add a book)
- or just a flash saying an author needs to be added first as soon as they go to /books if there are no authors

Other thoughts:
- This may be outside the scope/goal of this review, but the index page has the laravel default links to docs, GitHub, etc.
- Perhaps the index route would redirect to home page instead of welcome, and welcome is the result of a redirect to a guest log-in
- Should there be something else on /home? Currently is just shows one is logged in, and the navbar.

### My sample unit tests can be found in this git in tests/unit
