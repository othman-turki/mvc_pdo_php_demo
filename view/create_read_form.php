<?php include('header.php') ?>

<section>
    <h2>Select Data / Read Data</h2>
    <form action="." method="GET">
        <input type="hidden" name="action" value="select">

        <label for="city">City Name:</label>
        <input type="text" id="city" name="city" required>
        <button>Submit</button>
    </form>
</section>
<section>
    <h2>Insert Data / Create Data</h2>
    <form action="." method="POST">
        <input type="hidden" name="action" value="insert">

        <label for="city">City Name:</label>
        <input type="text" id="city" name="city" required>
        <label for="countryCode">Country Code:</label>
        <input type="text" id="countryCode" name="country_code" maxlength="3" required>
        <label for="district">District:</label>
        <input type="text" id="district" name="district">
        <label for="population">Population:</label>
        <input type="text" id="population" name="population">
        <button>Submit</button>
    </form>
</section>
<p><?php include('status.php') ?></p>
<?php include('footer.php') ?>