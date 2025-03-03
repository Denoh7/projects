
    function showImage(imgElement) {
        // Get the source of the clicked image
        let imgSrc = imgElement.src;
        
        // Set the preview image source to the clicked image
        document.getElementById("previewImg").src = imgSrc;
    }
