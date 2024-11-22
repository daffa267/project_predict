<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penjualan</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3" />
                </svg><a href="<?= site_url('home'); ?>">Beranda</a></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                </svg><a href="<?= site_url('sell'); ?>">Penjualan</a></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z" />
                </svg><a href="<?= site_url('graph'); ?>">Grafik</a></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg><a href="<?= site_url('hasil'); ?>">Hasil Prediksi</a></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16">
                    <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z" />
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                </svg><a href="<?= site_url('/'); ?>">Keluar</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="navbar">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg> Admin</span>
        </div>

        <div class="dashboard">
            <h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                </svg> Penjualan
            </h1>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                </svg> Halaman ini memuat Grafik Penjualan.
            </p>

            <div class="chart-container" style="height:65vh; margin-left:18vh">
                <canvas id="barChart"></canvas>
            </div>

            <select id="filterBarang">
                <option value="beras">Beras</option>
                <option value="minuman">Minuman</option>
                <option value="makananr">Makanan Ringan</option>
                <option value="roti">Roti</option>
                <option value="minyak">Minyak</option>
                <option value="mie">Mie Instan</option>
                <option value="sabun">Sabun dan Detergen</option>
                <option value="bumbu">Bumbu Dapur</option>
                <option value="kopi">Kopi</option>
                <option value="teh">Teh</option>
                <option value="susu">Susu</option>
                <option value="telur">Telur</option>
                <option value="pembersih">Pembersih Rumah Tangga</option>
                <option value="pewangi">Pewangi</option>
                <option value="obatnyamuk">Obat Anti Nyamuk</option>
                <option value="bahankue">Bahan Kue</option>
                <option value="alatmandi">Alat Mandi</option>
            </select>

        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fileUrl = "<?= base_url('data/sell.xlsx'); ?>";
                const filterBarang = document.getElementById('filterBarang');
                let chartInstance;

                function loadSheetData(sheetName) {
                    fetch(fileUrl)
                        .then(response => response.arrayBuffer())
                        .then(data => {
                            const workbook = XLSX.read(data, {
                                type: 'array'
                            });
                            const worksheet = workbook.Sheets[sheetName];

                            if (!worksheet) {
                                console.error(`Sheet "${sheetName}" tidak ditemukan!`);
                                return;
                            }

                            const jsonData = XLSX.utils.sheet_to_json(worksheet, {
                                header: 1
                            });

                            const validData = jsonData.filter(row => row[0] && row[0].trim() !== "" && row[1] && !isNaN(row[1]));
                            const labels = jsonData
                                .map(row => row[0])
                                .filter(week => week && week.trim() !== "");

                            const penjualan = jsonData
                                .map(row => row[1])
                                .filter((_, index) => jsonData[index][0] && jsonData[index][0].trim() !== "");

                            updateChart(labels, penjualan);
                        })
                        .catch(error => console.error('Error fetching the Excel file:', error));
                }

                function updateChart(labels, data) {
                    const ctx = document.getElementById('barChart').getContext('2d');

                    if (chartInstance) {
                        chartInstance.destroy();
                    }

                    chartInstance = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Penjualan',
                                data: data,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top'
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    title: {
                                        display: true,
                                        text: 'Penjualan'
                                    }
                                }
                            }
                        }
                    });
                }

                filterBarang.addEventListener('change', function() {
                    const selectedBarang = filterBarang.value;

                    const sheetMapping = {
                        'beras': 'beras',
                        'minuman': 'minuman',
                        'makananr': 'makananr',
                        'roti': 'roti',
                        'minyak': 'minyak',
                        'mie': 'mie',
                        'sabun': 'sabun',
                        'bumbu': 'bumbu',
                        'kopi': 'kopi',
                        'teh': 'teh',
                        'susu': 'susu',
                        'telur': 'telur',
                        'pembersih': 'pembersih',
                        'pewangi': 'pewangi',
                        'obatnyamuk': 'obatnyamuk',
                        'bahankue': 'bahankue',
                        'alatmandi': 'alatmandi',
                    };

                    const sheetName = sheetMapping[selectedBarang];
                    if (sheetName) {
                        loadSheetData(sheetName);
                    } else {
                        console.error('Sheet tidak ditemukan untuk opsi:', selectedBarang);
                    }
                });

                loadSheetData('beras');
            });
        </script>


</body>

</html>