

<?php

include 'header.php';
?>

<html>

<link rel="stylesheet" href="CSS/style.css" type="text/css">

<img src="Images/inspector%20tool.png" id="hero">

<div class="text">




    <h1>
        What is the inspector tool?
    </h1>

    <p>
        The inspector tool is the standard web browser tool that helps you inspect your website code. It is possible to change the CSS, debug, edit fonts, select elements.<br>
        <br>
        Regardless your choice of browser, most of them have their own inspector tool. The easiest way to access is "right click", inspect. But you can also access via the developer menu if your browser has this option. <br>

    </p>

    <h4>Google Chrome Inspector tool:</h4>

    <p>Google Chrome is my choice of browser, and they have very good features for live edit of your website.</p>

    <h4>Live-edit a DOM node</h4>
    <p>The DOM tree view shows the current state of the tree; it may not match the HTML that was originally loaded for different reasons. For example, you can modify the DOM tree using JavaScript; the browser engine can try to correct invalid author markup and produce an unexpected DOM.</p>


    <h4>Live-edit a style</h4>
    <p>Live-edit style property names and values in the Styles pane. All styles are editable, except the ones that are greyed out (as is the case with user agent stylesheets).<br>
        <br>To edit a name or value, click on it, make your changes, and press Tab or Enter to save the change.</p>
    <p>By default, your CSS modifications are not permanent, changes are lost when you reload the page. Set up persistent authoring if you want to persist your changes between page loads.</p>

    <h4>Examine and edit box model parameters</h4>
    <p>Examine and edit the current element's box model parameters using the Computed pane. All values in the box model are editable, just click on them.</p>
    <p>The concentric rectangles contain the top, bottom, left, right values for the current element's padding, border, and margin properties.</p>
    <p>For non-statically positioned elements, a position rectangle is also displayed, containing the values of the top, right, bottom, and left properties.</p>
    <p>To view a history of live-edits made to your page:<br>
<br>
        In the Styles pane, click on the file that you modified. DevTools takes you to the Sources panel.<br>
        Right-click on the file.<br>
        Select Local modifications.<br>
        <br>
        To explore the changes made:<br>
        <br>
        Expand top-level file names to view the time  time modification occurred a modification occurred.<br>
        Expand second-level items to view a diff (before and after) corresponding to the modification. A line with a pink background signifies a removal while a line with a green background signifies an addition.</p>
</div>




<?php
include 'footer.php';
?>




</html>
