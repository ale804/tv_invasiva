window.onload = function() {
    const url = "https://www.desdepylabs.com/External/tvaccion/telefuturo"; // URL del sitio con el reproductor

    fetch(url)
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, "text/html");
            const scriptTags = doc.querySelectorAll("script");

            for (const tag of scriptTags) {
                if (tag.innerText.includes("player.src([")) {
                    const regex = /src:\s*['"]([^'"]+)['"]/;
                    const match = regex.exec(tag.innerText);

                    if (match) {
                        const bestQualityUrl = match[1]; // Extrae la primera URL
                        console.log("Redirigiendo al stream:", bestQualityUrl);

                        // Redirige automáticamente al stream
                        window.location.href = bestQualityUrl;
                    }
                    break;
                }
            }
        })
        .catch(error => console.error("Error al obtener la página:", error));
};
