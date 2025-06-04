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
    input = document.getElementById("search"); // Search input field
    filter = input.value.toUpperCase(); // Convert to uppercase for case-insensitive search
    table = document.getElementById("tableBody"); // Correct table ID (should be 'myTable')
    tr = table.getElementsByTagName("tr"); // Get all rows (including header row)

    // Loop through all rows
    for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
        td = tr[i].getElementsByTagName("td"); // Get all td (columns) in the row
        var matchFound = false;

        // Loop through all columns in the row
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText; // Get text content
                if (txtValue.toUpperCase().indexOf(filter) > -1) { // Check if search matches text
                    matchFound = true;
                    break; // Stop once a match is found in any column
                }
            }
        }

        // If a match is found, show the row, else hide it
        if (matchFound) {
            tr[i].style.display = "";  // Show row if match found
        } else {
            tr[i].style.display = "none";  // Hide row if no match found
        }
    }
}





// select department, status teacher dashboard filter
function filterTableSelect() {
    var statusSelect = document.getElementById('statusSelect').value;
    var departmentSelect = document.getElementById('departmentSelect').value;
    
    var table = document.getElementById("myTable");
    var rows = table.getElementsByTagName("tr");

    // Loop through each row and check if it matches the filters
    for (var i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
        var row = rows[i];
        var status = row.cells[5].textContent.trim();  // Status column
        var department = row.cells[3].textContent.trim();  // Department/Subject column

        // Check if the row matches the filters
        var matchesStatus = (statusSelect === "Status Select" || status === statusSelect);
        var matchesDepartment = (departmentSelect === "Select Department" || department === departmentSelect);

        // Show or hide the row based on the filters
        if (matchesStatus && matchesDepartment) {
            row.style.display = ""; // Show the row if it matches the filters
        } else {
            row.style.display = "none"; // Hide the row if it does not match the filters
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



// Function to toggle "Select All" checkbox
function toggleSelectAll() {
    var selectAllCheckbox = document.getElementById("selectAll");
    var checkboxes = document.getElementsByClassName("selectRow");

    // Loop through all checkboxes and set their checked status based on the "Select All" checkbox
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = selectAllCheckbox.checked;
    }
      // Handle individual row checkboxes
      rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
          const allChecked = Array.from(rowCheckboxes).every(cb => cb.checked);
          selectAllCheckbox.checked = allChecked;
        });
      });
    };
  
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
