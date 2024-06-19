var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: generateMonthlyLabels(2020), // Default to 2020
        datasets: [
            {
                label: "Tingkat Kemiskinan",
                data: data2020.kemiskinan, // Data default untuk 2020
                backgroundColor: "rgba(153,255,51,0.6)",
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: 10,
            },
        },
    },
});

document
    .getElementById("menu-prediksi")
    .addEventListener("click", function (event) {
        event.preventDefault();
        updateChart("prediksi");
    });

document
    .getElementById("menu-analisis")
    .addEventListener("click", function (event) {
        event.preventDefault();
        updateChart("analisis");
    });

const data2020 = {
    kemiskinan: [2, 3, 4, 3, 5, 6, 4, 5, 6, 4, 3, 2],
    pendidikan: [7, 8, 7, 8, 9, 8, 7, 8, 9, 7, 8, 9],
};

const data2021 = {
    kemiskinan: [3, 4, 5, 4, 6, 5, 4, 6, 5, 4, 3, 4],
    pendidikan: [8, 9, 8, 9, 7, 8, 9, 8, 9, 8, 7, 8],
};

const data2022 = {
    kemiskinan: [4, 5, 6, 5, 7, 6, 5, 7, 6, 5, 4, 5],
    pendidikan: [9, 7, 8, 9, 8, 7, 8, 9, 8, 7, 9, 8],
};

const data2023 = {
    kemiskinan: [5, 6, 7, 6, 8, 7, 6, 8, 7, 6, 5, 6],
    pendidikan: [7, 8, 9, 8, 7, 9, 8, 9, 7, 8, 9, 8],
};

const data2024 = {
    kemiskinan: [6, 7, 8, 7, 9, 8, 7, 9, 8, 7, 6, 7],
    pendidikan: [8, 9, 7, 8, 9, 8, 9, 7, 8, 9, 8, 7],
};

function updateChart(type) {
    let selectedYear = document.getElementById("year-select").value;
    let labels = generateMonthlyLabels(selectedYear);

    let newData;
    if (type === "prediksi") {
        newData = {
            labels: labels,
            datasets: [
                {
                    label: "Tingkat Kemiskinan",
                    data: getDataForYear(selectedYear).kemiskinan,
                    backgroundColor: "rgba(153,255,51,0.6)",
                },
                {
                    label: "Tingkat Pendidikan",
                    data: getDataForYear(selectedYear).pendidikan,
                    backgroundColor: "rgba(255,153,51,0.6)",
                },
            ],
        };
    } else if (type === "analisis") {
        newData = {
            labels: labels,
            datasets: [
                {
                    label: "Tingkat Kemiskinan",
                    data: getDataForYear(selectedYear).kemiskinan,
                    backgroundColor: "rgba(153,255,51,0.6)",
                },
                {
                    label: "Tingkat Kemiskinan Alternatif",
                    data: getDataForYear(selectedYear).kemiskinan.map(
                        (value) => value - 1
                    ),
                    backgroundColor: "rgba(153,255,255,0.6)",
                },
                {
                    label: "Tingkat Pendidikan",
                    data: getDataForYear(selectedYear).pendidikan,
                    backgroundColor: "rgba(255,153,51,0.6)",
                },
                {
                    label: "Tingkat Pendidikan Alternatif",
                    data: getDataForYear(selectedYear).pendidikan.map(
                        (value) => value - 1
                    ),
                    backgroundColor: "rgba(51,153,255,0.6)",
                },
            ],
        };
    }

    myChart.data = newData;
    myChart.update();
}

function updateChartForYear() {
    let type = document.querySelector('input[name="chart-type"]:checked').value;
    updateChart(type);
}

function generateMonthlyLabels(year) {
    let labels = [];
    for (let month = 1; month <= 12; month++) {
        labels.push(`${year}-${month.toString().padStart(2, "0")}`);
    }
    return labels;
}

function getDataForYear(year) {
    switch (year) {
        case "2020":
            return data2020;
        case "2021":
            return data2021;
        case "2022":
            return data2022;
        case "2023":
            return data2023;
        case "2024":
            return data2024;
        default:
            return data2020;
    }
}

// Example usage
updateChart("prediksi"); // or updateChart('analisis');
