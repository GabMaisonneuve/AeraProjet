<div class="CanvaContainer">
    <canvas id="clothingCanvas" width="500" height="500" style="border:1px solid #ccc;"></canvas>

    <div class="choix">
        <label>Shirt:</label><!-- Background du chandail -->
        <input type="color" id="colorPicker" value="#ff0000">
    </div>


    <div class="choix">
        <label>Number Color:</label><!--Chiffre-->
        <input type="color" id="numColorPicker" value="#ffffff">
    </div>


    <div class="choix">
        <label>Number:</label><!--background des chiffres-->
        <input type="text" id="shirtNumber" maxlength="2" value="01" style="width: 40px;">
    </div>

    <script src="/scripts/canva.js"></script>
</div>