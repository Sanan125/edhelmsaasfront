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


// add search bar filter for syllabus

function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("TableBody");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        var matchFound = false;
        
        // Loop through all columns in each row (td)
        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    matchFound = true; // Match found in at least one column
                    break;
                }
            }
        }

        if (matchFound) {
            tr[i].style.display = "";  // Show row if match found
        } else {
            tr[i].style.display = "none";  // Hide row if no match found
        }
    }
}


// table sorting syllabus
//Sorting in table
$(document).ready(function() {
            $('#myTable').bootstrapTable({
                sortable: true,
                classes: 'table table-striped table-bordered'
            });
        });

// JavaScript to handle the checkbox selection functionality

 document.addEventListener('DOMContentLoaded', function() {
      const selectAllCheckbox = document.getElementById('selectAll');
      const rowCheckboxes = document.querySelectorAll('.selectRow');

      // Handle "Select All" checkbox
      selectAllCheckbox.addEventListener('change', function() {
        rowCheckboxes.forEach(checkbox => {
          checkbox.checked = this.checked;
        });
      });

      // Handle individual row checkboxes
      rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
          const allChecked = Array.from(rowCheckboxes).every(cb => cb.checked);
          selectAllCheckbox.checked = allChecked;
        });
      });
    });
  
//Password Show on eye button click
  function togglePasswordVisibility(fieldId) {
    var passwordField = document.getElementById(fieldId);
    var passwordType = passwordField.type;
    
    if (passwordType === "password") {
      passwordField.type = "text"; // Show password
    } else {
      passwordField.type = "password"; // Hide password
    }
  }
// Function to filter activity based on type and contributor
function filterActivities() {
  var activityType = document.getElementById('activityType').value;
  var contributor = document.getElementById('contributor').value;

  // Get all activity cards
  var activityCards = document.querySelectorAll('.activity-card');

  activityCards.forEach(function(card) {
    var type = card.getAttribute('data-type');
    var cardContributor = card.getAttribute('data-contributor');

    // Check if the card matches the selected filters
    if ((activityType === 'all' || activityType === type) && 
        (contributor === 'all' || contributor === cardContributor)) {
      card.style.display = 'block'; // Show the card
    } else {
      card.style.display = 'none'; // Hide the card
    }
  });
}

//Update Profile Pic
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function() {
    var output = document.querySelector('.profile-picture');
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
}
