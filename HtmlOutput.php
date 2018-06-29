<?php

/**
 * Prints the HTML Header with the title in h1 tags.
 * @param string $title
 */
function printPageHeader($title) {
    echo "<html>
        <head>
    
        </head>
        <body>
            <h1>{$title}</h1>";
}

function printDiceForm() {
    echo "<form action=\"\" method=\"post\">
    <input type=\"submit\" name=\"ausfuehren\" value=\"Würfeln\"/>
</form>";
}

function printPageFooter() {
    echo "    </body>
</html>";
}
