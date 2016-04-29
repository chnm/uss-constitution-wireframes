<?php include('header.php'); ?>

<div class="row">
    <div class="large-3 column" data-intro="Here we have options to drill down into what data points will show on the map. The dates section will start blank, and will produce links once users have selected some data constraints.">
        <select>
            <option value="husker">Choose an Event Type </option>
            <option value="starbuck">Battle</option>
            <option value="hotdog">Ships Sighted</option>
            <option value="apollo">Ships Spoken</option>
            <option value="apollo">Storm</option>
            <option value="apollo">Port</option>
        </select>

        <select>
            <option value="husker">Choose a Cruise</option>
            <option value="starbuck">Cruise 1</option>
            <option value="hotdog">Cruise 2</option>
            <option value="apollo">Cruise 3</option>
            <option value="apollo">Cruise 4</option>
        </select>

        <select>
            <option value="husker">Choose a Year</option>
            <option value="starbuck">1812</option>
            <option value="hotdog">1813</option>
            <option value="apollo">1814</option>
            <option value="apollo">1815</option>
        </select>

        <h3>Dates</h3>
        <ul>
            <li><a href="#">Date populated by year selected</a></li>
            <li><a href="#">Date populated by year selected</a></li>
            <li><a href="#">Date populated by year selected</a></li>
            <li><a href="#">Date populated by year selected</a></li>
            <li><a href="#">Date populated by year selected</a></li>
        </ul>
    </div>

    <div class="large-9 column" data-intro="The map will display points based on user selections from the fields to the left. Data points can contain links to the specific items they reference.">
        <img src="http://placehold.it/900x500&text=MAP" alt="">
    </div>
</div>

<?php include('footer.php'); ?>