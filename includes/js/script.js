//Toggle Button JS
const sidebar = document.querySelector(".sidebar");
    const toggleBtn = document.getElementById("sidebarToggle");

    toggleBtn.addEventListener("click", function (e) {
        e.stopPropagation(); // Prevent this from triggering the document click
        sidebar.classList.toggle("active");
    });

    // Close sidebar when clicking anywhere else on mobile
    document.addEventListener("click", function (e) {
        // Only close if sidebar is active AND the click is outside the sidebar
        if (window.innerWidth <= 768 && sidebar.classList.contains("active")) {
            if (!sidebar.contains(e.target) && e.target !== toggleBtn) {
                sidebar.classList.remove("active");
            }
        }
    }); 
// Site Stats Chart
const ctx = document.getElementById('siteStatsChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['21 May', '22 May', '23 May', '24 May', '25 May', '26 May', '27 May'],
        datasets: [{
            label: 'Daily Visitors',
            data: [4, 7, 5, 8, 6, 9, 11],
            fill: true,
            borderColor: 'rgba(0, 123, 255, 1)',
            backgroundColor: 'rgba(0, 123, 255, 0.2)',
            pointBackgroundColor: 'rgba(0, 123, 255, 1)',
            pointRadius: 5,
            pointHoverRadius: 7,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            tooltip: {
                mode: 'index',
                intersect: false,
                backgroundColor: 'rgba(0,0,0,0.7)',
                titleColor: '#fff',
                bodyColor: '#fff'
            },
            legend: {
                display: true,
                labels: {
                    color: '#333',
                    font: {
                        weight: 'bold'
                    }
                }
            }
        },
        interaction: {
            mode: 'nearest',
            axis: 'x',
            intersect: false
        },
        scales: {
            x: {
                grid: {
                    display: false
                },
                ticks: {
                    color: '#333'
                }
            },
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 2,
                    color: '#333'
                },
                grid: {
                    color: 'rgba(0,0,0,0.05)'
                }
            }
        }
    }
});

//Sorting in table
$(document).ready(function() {
            $('#myTable').bootstrapTable({
                sortable: true,
                classes: 'table table-striped table-bordered'
            });
        });

//Searching in table
function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search"); // updated ID here
    filter = input.value.toUpperCase();
    table = document.getElementById("searchBody");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        var matchFound = false;
        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    matchFound = true;
                    break;
                }
            }
        }
        tr[i].style.display = matchFound ? "" : "none";
    }
}
