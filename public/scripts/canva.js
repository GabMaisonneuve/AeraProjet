    const canvas = document.getElementById('clothingCanvas');
    const ctx = canvas.getContext('2d');
    const picker = document.getElementById('colorPicker');
    const numInput = document.getElementById('shirtNumber');
    const numColorPicker = document.getElementById('numColorPicker');
 
    const img = new Image();
    img.src = '/assets/image/autre/chandail.png';

    img.onload = () => render();
    picker.addEventListener('input', render);
    numInput.addEventListener('input', render);
    numColorPicker.addEventListener('input', render);
    
    function render() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        ctx.drawImage(img, 0, 0, 500, 500);

        ctx.globalCompositeOperation = 'source-atop';
        ctx.fillStyle = picker.value;
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        ctx.globalCompositeOperation = 'multiply';
        ctx.drawImage(img, 0, 0, 500, 500);
            
        ctx.globalCompositeOperation = 'source-over';

        ctx.fillStyle = numColorPicker.value;
        ctx.font = "bold 120px Times-New-Roman";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
            
        let val = numInput.value.toString().padStart(2, '0');
        ctx.fillText(val, 250, 250);
    }