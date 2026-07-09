GitHub URL: https://github.com/lbizness/cs85-module6b-mvcapp

I chose to create a tool to track a personal goal, which is a reading goal. I chose my topic because it
is something I like to track personally, and I enjoy seeing what books I have read.
I found it generally difficult to wrap my head around how the different files interact
with each other, as this was my first attempt at MVC. My app is meant to keep track of
a list of books, which the user able to input a new book and see their list. I learned basically
everything new I now know about MVC! But generally, how different small PHP files come together
to make a cohesive app, and how to link those files together alongside the autoloader. I found it difficult to even start, with a lot of confusion on how to setup my file structure.

AI CODE CRITIQUE:
I had AI, specifically ChatGPT, write me a method for the user to input a book into the 
book model. I kept most of the original code for the controller and view, but I did change most of the
code for the addBook method in the model into a void function instead of a bool as I felt that
had a cleaner implementation than the bool.

My prompt: 
I copy/pasted the first three steps in the assignment, and then added "write a method for the user to add a book"

Here was the raw code from ChatGPT:
Raw code for model:
public function addBook(string $title, string $author, string $status): bool
{
    $title = trim($title);
    $author = trim($author);
    $status = trim($status);

    if (empty($title) || empty($author) || empty($status)) {
        return false;
    }

    $this->books[] = [
        "title" => $title,
        "author" => $author,
        "status" => $status
    ];

    return true;
}

Raw code for controller: 
if ($_SERVER['\REQUEST_METHOD'] === 'POST') {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_SPECIAL_CHARS);
        $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);

        $bookModel->addBook($title, $author, $status);
    }

Raw code for the view: 
<\h2>Add a Book</\h2>

<\form method="POST">
    <\label>Title:</\label>\<\br>
    <\input type="text" name="title" required><\br><\br>

    <label>Author:</label><br>
    <input type="text" name="author" required><br><br>

    <label>Status:</label><br>
    <select name="status" required>
        <option value="Reading">Reading</option>
        <option value="Completed">Completed</option>
        <option value="Want to Read">Want to Read</option>
    </select><br><br>

    <button type="submit">Add Book</button>
</\form>