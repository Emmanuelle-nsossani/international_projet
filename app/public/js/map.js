document.addEventListener("DOMContentLoaded", function () {
    let csvData = {};

    // Charger le CSV
    fetch("data.csv")
        .then(response => response.text())
        .then(text => {
            let rows = text.split("\n").map(row => row.split(";"));

            rows.slice(1).forEach(row => {
                if (row.length >= 14 && row[2]) {  // Vérifier que la ligne contient bien des données
                    let country = row[2].trim(); // Colonne "Country"
                    let criminality = parseFloat(row[3]?.replace(",", ".")) || 0;
                    let human_trafficking = parseFloat(row[5]?.replace(",", ".")) || 0;
                    let arms_trafficking = parseFloat(row[6]?.replace(",", ".")) || 0;
                    let cybercrime = parseFloat(row[13]?.replace(",", ".")) || 0;

                    csvData[country] = { criminality, human_trafficking, arms_trafficking, cybercrime };
                }
            });
        });

    // Ajouter un effet hover et un clic pour afficher le graphique
    document.querySelectorAll("svg path").forEach(path => {
        let country = path.getAttribute("title");

        path.addEventListener("mouseenter", function (event) {
            if (csvData[country]) {
                let tooltip = document.createElement("div");
                tooltip.id = "tooltip";
                tooltip.style.position = "absolute";
                tooltip.style.backgroundColor = "black";
                tooltip.style.color = "white";
                tooltip.style.padding = "5px";
                tooltip.style.borderRadius = "5px";
                tooltip.style.top = event.pageY + "px";
                tooltip.style.left = event.pageX + "px";
                tooltip.innerHTML = `<b>${country}</b><br>Criminalité : ${csvData[country].criminality}`;
                document.body.appendChild(tooltip);
            }
        });

        path.addEventListener("mouseleave", function () {
            let tooltip = document.getElementById("tooltip");
            if (tooltip) tooltip.remove();
        });

        // Au clic, afficher le graphique
        path.addEventListener("click", function () {
            if (csvData[country]) {
                updateChart(country, csvData[country]);
            }
        });
    });

    // Initialisation du graphique
    let ctx = document.getElementById("crimeChart").getContext("2d");
    let crimeChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Criminalité", "Trafic humain", "Trafic d'armes", "Cybercriminalité"],
            datasets: [{
                label: "Indice",
                backgroundColor: ["#FFF8F0", "#FAA916", "#96031A", "#1B1B1E"],
                data: [0, 0, 0, 0]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true, max: 10 }
            }
        }
    });

    function updateChart(country, data) {
        crimeChart.data.datasets[0].data = [
            data.criminality, 
            data.human_trafficking, 
            data.arms_trafficking, 
            data.cybercrime
        ];
        crimeChart.update();
        document.getElementById("chartTitle").innerText = `Pays : ${country}`;
    }
});
