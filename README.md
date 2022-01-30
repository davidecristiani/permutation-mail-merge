# Permutation Mail Merge
"Permutation Mail Merge" is yet another example of recursion in PHP to achieve a permutation (with order and without repetition).

The selected use case is a Mail Merge, which is an operation to combine a text (which we'll call **text_base**)
with **n** **contacts**, creating an array of **assembled_text** of length **m**.

In our case, instead of having only one position for each **contact** in the **base_text**,
we will have **n** **positions** in the **base_text**.

Each **position** will be marked in the **base_text** by a **placeholder**.

### Use Case
The proposed use case will be a set of 5 **contacts** that need to be placed in work team.

The work team is described in a **base_text** where each **contact** **position** is specified with a **placeholder**.

The result is a set of all possible teams, that will be returned as an array  **assembled_texts**.

### Technical notes
The program is educational and is written in the programming language PHP.

The program is included in the _/src/index.php_ file.

You will find all the words marked in bold in this README as variables in the program.

If a word is a plural (with a final "s") it's an indication that the variable is an array.

A Docker Compose "nginx"/"php-fpm" configuration is included 
to allow you to run the file without using your own web server.

To execute the program with Docker Compose:

- Install and activate Docker (if you haven't already)
- Open the terminal
- Execute a `cd` command the main directory (the directory that contains the file _docker-compose.yml_).
- Execute the command `docker-compose up`
- Open your browser and go to the address  [http://localhost](http://localhost)

