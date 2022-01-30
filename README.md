# Permutation Mail Merge
**Permutation Mail Merge** is yet another example of recursion in PHP to achieve permutation (with order and without repetition).

The selected use case is a customized version of [Mail Merge](https://en.wikipedia.org/wiki/Mail_merge), which is an operation that combine a text (which we'll call `text_base`)
with **N** `contacts`, inserting the `contact` in a `position` specified by a `placeholder`.

In our case, instead of having just **1** `placeholder` in the `base_text`, as in the classical Mail Merge,
we have **N** `placeholders` in the `base_text`. 
The output is therfore a set of  **M** mails (**M**=**N!**). 
Each `position` is marked in the `base_text` by a `placeholder`.

***

### Use Case
The use case is about finding all the possible work teams of 5 `contacts` (so **N=5**) and producing the mails that present each team.

The draft of the mail with a description of the work team is the `base_text` where each `contact` role `position` is marked by a `placeholder`.

The output is a set of 120 mails (so **M=120**), that will be returned as an array `assembled_texts`.

***

### Technical notes
The program is educational; it's written using the programming language PHP and the output is pure HTML.

All the words marked as code in this README are declared as variables in the program.
If a word is plural (with a final "s") it's an indication that the variable is an array.

The source of the program is in the [/src/index.php](https://github.com/davidecristiani/permutation-mail-merge/blob/main/src/index.php) file.

You can see a [static version of the output of the program](https://davidecristiani.github.io/permutation-mail-merge/) (formatted as a valid HTML) on a GitHub Pages site.

#### About Docker containers
A Docker Compose configuration (stack: "nginx" and "php-fpm") is included in the repository
to allow you to execute the program without using your web server.

To execute the program with Docker Compose:

- Install and activate Docker (if you haven't already)
- Open the terminal
- Execute a `cd` command in the main directory (the directory that contains the file _docker-compose.yml_).
- Execute the command `docker-compose up`
- Open your browser and go to the address  [http://localhost](http://localhost)

***

### Credits
- Thanks to Hackmath website for the recap of the [theoretical component of statistics](https://www.hackmath.net/en/calculator/combinations-and-permutations?n=5&k=5&order=1&repeat=0).  
- Thanks to Jesús Manuel Vargas for his [docker-compose-php-stack](https://github.com/jmvargas/docker-compose-php-stack) that I have [forked and rewrited](https://github.com/davidecristiani/permutation-mail-merge/commit/adef51c5b43f3b90694bb351674e2d7a45bcfca5).
- Thanks to W3C Validator for the [validation of the HTML](https://validator.w3.org/nu/?doc=https%3A%2F%2Fdavidecristiani.github.io%2Fpermutation-mail-merge%2F)

