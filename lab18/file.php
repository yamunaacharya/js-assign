<!-- Include and require file in php.
● Create two PHP files: header.php and footer.php.
● Use include and require to include these files into another PHP script.
● Explain when it's appropriate to use include_once and require_once
instead of include and require. -->

<?php
include('header.php');
?>
    <main>
        <p>This is the main content of the website.</p>
    </main>
<?php
require('footer.php');
?>

<!-- Explanation of include_once and require_once:

include_once:
Ensures that the specified file is included only once during script execution.
Use it when the file might be included multiple times unintentionally, and duplicate inclusion could cause errors or unexpected behavior.

require_once:
Similar to include_once but throws a fatal error if the file cannot be found.
Use it when the file is essential for the application and should only be included once. -->