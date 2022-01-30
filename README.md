# Permutation Mail Merge
**Permutation Mail Merge** is yet another example of recursion in PHP to achieve a permutation (with order and without repetition).

The selected use case is a Mail Merge, which is an operation to combine a text (which we'll call `text_base`)
with **N** `contacts`, creating an array of `assembled_text` of length **M**.

In our case, instead of having only one position for each `contact` in the `base_text` as the classical Mail Merge,
we will have **N** `positions` in the `base_text`.

Each `position` will be marked in the `base_text` by a `placeholder`.

### Use Case
The use case is to find all the possible work teams of 5 `contacts` (so **N=5**) and to produce the letters that present each team.

The draft of the letter that describes the team is the `base_text` where each `contact` `position` is marked by a `placeholder`.

The output is a set of 120 letters (so **M=120**), that will be returned as an array `assembled_texts`.

### Technical notes
The program is educational; it's written using the programming language PHP and the output is pure HTML.

All the words marked as code (`like this`) in this README are declared as variables in the program.
If a word is plural (with a final "s") it's an indication that the variable is an array.

The source of the program is in the [/src/index.php](https://github.com/davidecristiani/permutation-mail-merge/blob/main/src/index.php) file.

You can see a [static version of the output of the program](https://davidecristiani.github.io/permutation-mail-merge/) (formatted as a valid HTML) on a GitHub Pages site.

#### About Docker containers
A Docker Compose configuration (stack: "nginx" and "php-fpm") is included 
to allow you to execute the program without using your web server.

To execute the program with Docker Compose:

- Install and activate Docker (if you haven't already)
- Open the terminal
- Execute a `cd` command in the main directory (the directory that contains the file _docker-compose.yml_).
- Execute the command `docker-compose up`
- Open your browser and go to the address  [http://localhost](http://localhost)

