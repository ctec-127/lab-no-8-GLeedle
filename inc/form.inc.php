<div class="container pt-3 mt-3 mb-5 bor ">
    <div class="jumbotron text-white">
        <div class="jumbo-bg">
            <h1 class="display-3">Temperature Converter</h1>
            <hr class="bg-white">
            <p>Convert Temperatures from Celsius, Fahrenheit, and Kelvin</p>
        </div>
    </div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row">
            <div class="col-3">
                <label for="temp" class="bg-dark text-white p-2">Temperature</label>
                <input class="form-control" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp']; ?>" name="originaltemp" size="7" maxlength="7" id="temp">
            </div>
            <div class="col-3">
                <label for="temp" class="bg-dark text-white p-2">Convert Temperature from:</label>
                <select class="form-control" name="originalunit" id="original-temp">
                    <option value="--Select--" <?php if ($originalUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
                    <option value="celsius" <?php if ($originalUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
                    <option value="fahrenheit" <?php if ($originalUnit == "fahrenheit") echo ' selected="selected"'; ?>>Fahrenheit</option>
                    <option value="kelvin" <?php if ($originalUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
                </select>
            </div>
            <div class="col-3">
                <label for="convertedtemp" class="bg-dark text-white p-2">
                    Convert Temperature to:
                </label>
                <select class="form-control" name="conversionunit">
                    <option value="--Select--" <?php if ($conversionUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
                    <option value="celsius" <?php if ($conversionUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
                    <option value="fahrenheit" <?php if ($conversionUnit == "fahrenheit") echo ' selected="selected"'; ?>>Fahrenheit</option>
                    <option value="kelvin" <?php if ($conversionUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
                </select>
                <input type="submit" class="btn btn-warning  my-2 w-100" value="Convert Temperature" />
            </div>
            <div class="col-3">
                <label for="convertedtemp" class="bg-dark text-white p-2">
                    Converted Temperature
                </label>
                <input class="form-control text-center btn btn-danger" type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);
                                                                                            echo "&#730; " . ucfirst($conversionUnit); ?>" name="convertedtemp" size="7" maxlength="7" id="convertedtemp">
            </div>
        </div>
        <div class="row">
            <div class="col-6 my-5">
                <div class="col-info">
                    <h3>What's under the hood?</h3>
                    <p>Below you will find the algorithms for this conversion. If you would like to learn the math you can try it yourself. </p>
                    <ul>
                        <li>Celsius to Fahrenheit = Temperature°C × 9/5 + 32</li>
                        <li>Celsius to Kelvin = Temperature°C + 273.15</li>
                        <li>Fahrenheit to Celsius = (Temperature°F - 32) × 5/9</li>
                        <li>Fahrenheit to Kelvin = (Temperature°F + 459.67)× 5/9</li>
                        <li>Kelvin to Fahrenheit = Temperature K × 9/5 - 459.67</li>
                        <li>Kelvin to Celsius = Temperature K - 273.15</li>
                    </ul>
                </div>
            </div>
            <div class="col-6 my-5">
                <div class="col-info">
                    <h3>What about degrees?</h3>
                    <ul>
                        <li>Celsius or centigrade is a unit of measurement of temperature. The freezing/melting point of water is about zero degrees celsius (0 °C) boiling point of water is (100 °C)</li>
                        <li>The Fahrenheit scale is a temperature scale based on one proposed in 1724 by German physicist Daniel Gabriel Fahrenheit (1686–1736). It uses the degree Fahrenheit (symbol: °F). Defined by two fixed points: the temperature at which water freezes into ice is defined as 32 °F, and the boiling point of water is defined to be 212 °F</li>
                        <li>kelvin (K) — is the SI unit of temperature. Kelvin was named for the celebrated British physicist Lord Kelvin (1824–1907). A change of one kelvin is the same amount of temperature change as one degree Celsius and is absolute zero. </li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div><!-- end wrapper div-->