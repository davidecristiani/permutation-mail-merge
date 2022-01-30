# Permutation Mail Merge
"Permutation Mail Merge" is yet another example of recursion in PHP to achieve a permutation.
The selected use case is a Mail Merge, which is an operation to combine a text (which we'll call **text_base**)
with **n** **contacts**, creating an array of **assembled_text** of length **m**.

In our case, instead of having only one position for each **contact** in the **base_text**,
we will have **n** **positions** in the **base_text**.

Each **position** will be marked in the **base_text** by a **placeholder**.

###Use Case
The proposed use case will be a set of 5 **contacts**, to be placed in a **base_text** where their roles are specified.
The result is a set of all possible teams, i.e., an array  **assembled_texts**.

###Technical notes
The program is educational and is written in the programming language PHP.

The program is included in the index.php file.

All the words you see in this README in this will be found with the same name in the form of variables in the program.
If the word is a plural (with a final "s") it is an indication that the variable is an array.
A docker configuration is included to allow you to run the file without installing it on a server.
