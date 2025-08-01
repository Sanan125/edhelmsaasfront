    
  // notification page tab
    const tabs = document.querySelectorAll(".tab-box");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Remove active class from all tabs
      tabs.forEach(t => t.classList.remove("active"));
      // Hide all content
      contents.forEach(c => c.classList.add("d-none"));

      // Set active tab
      tab.classList.add("active");
      const selectedTab = tab.getAttribute("data-tab");
      document.querySelector(`.tab-content[data-tab="${selectedTab}"]`).classList.remove("d-none");
    });
  });

    
    //   dashboard page school time table

    const calendar = document.getElementById("calendar");
    const eventDetails = document.getElementById("eventDetails");

    const classEvents = {
        january: {
            3: [
                { subject: "English", time: "9:00 - 10:00", instructor: "Mr. Khan" },
                { subject: "Math", time: "10:15 - 11:15", instructor: "Ms. Sara" },
                { subject: "Science", time: "11:30 - 12:30", instructor: "Dr. Ali" },
                { subject: "History", time: "1:00 - 2:00", instructor: "Mr. Omar" },
                { subject: "Computer", time: "2:15 - 3:15", instructor: "Ms. Nida" }
            ],
            5: [
                { subject: "Physics", time: "9:00 - 10:00", instructor: "Dr. Ahmed" },
                { subject: "Chemistry", time: "10:15 - 11:15", instructor: "Dr. Zeeshan" },
                { subject: "Biology", time: "11:30 - 12:30", instructor: "Ms. Sana" },
                { subject: "Islamiyat", time: "1:00 - 2:00", instructor: "Mr. Adeel" },
                { subject: "Art", time: "2:15 - 3:15", instructor: "Ms. Bushra" }
            ]
        }
    };

    function renderCalendar(month) {
        calendar.innerHTML = "";
        eventDetails.innerHTML = "";

        const daysInMonth = new Date(2025, getMonthIndex(month) + 1, 0).getDate();
        const firstDay = new Date(2025, getMonthIndex(month), 1).getDay();

        const grid = document.createElement("div");
        grid.className = "calendar-grid";

        const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        dayNames.forEach(day => {
            const cell = document.createElement("div");
            cell.innerHTML = `<strong>${day}</strong>`;
            grid.appendChild(cell);
        });

        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement("div");
            emptyCell.className = "calendar-cell";
            grid.appendChild(emptyCell);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const cell = document.createElement("div");
            cell.className = "calendar-cell";
            cell.textContent = i;

            if (classEvents[month] && classEvents[month][i]) {
                const dot = document.createElement("div");
                dot.className = "event-dot";
                cell.appendChild(dot);

                cell.addEventListener("click", () => {
                    const events = classEvents[month][i];
                    const date = new Date(2025, getMonthIndex(month), i);
                    const dayName = dayNames[date.getDay()];

                    let html = `
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="3">
                                    Date: ${i} ${capitalize(month)} | Day: ${dayName}
                                </th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                                <th>Instructor</th>
                            </tr>
                        </thead>
                        <tbody>`;

                    events.forEach(ev => {
                        html += `<tr>
                            <td>${ev.subject}</td>
                            <td>${ev.time}</td>
                            <td>${ev.instructor}</td>
                        </tr>`;
                    });

                    html += `</tbody></table>`;
                    eventDetails.innerHTML = html;
                });
            }

            grid.appendChild(cell);
        }

        calendar.appendChild(grid);
    }

    function getMonthIndex(monthName) {
        return ["january","february","march","april","may","june","july","august","september","october","november","december"].indexOf(monthName);
    }

    function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }

    document.getElementById("monthSelector").addEventListener("change", function () {
        renderCalendar(this.value);
    });

    renderCalendar(document.getElementById("monthSelector").value);









//   dashboard page calendar 

 document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });
  });



  



  



// Global Theme Change JS
document.addEventListener("DOMContentLoaded", function () {
    const themes = {
        default: {
            '--sidebar-bg': '#343a40',
            '--sidebar-color': '#fff',
            '--primary-color': '#0977d6',
            '--success-color': '#4CAF50',
            '--danger-color': '#F1630F',
            '--warning-color': '#ffc107',
            '--info-color': '#4DB6AC',
            '--text-color': '#333'
        },
        whiteBlue: {
            '--sidebar-bg': '#ffffff',
            '--sidebar-color': '#333333',
            '--primary-color': '#4f8bbf',
            '--success-color': '#4CAF50',
            '--danger-color': '#F1630F',
            '--warning-color': '#ffc107',
            '--info-color': '#4DB6AC',
            '--text-color': '#333'
        },
        black: {
            '--sidebar-bg': '#000000',
            '--sidebar-color': '#ffffff',
            '--primary-color': '#212121',
            '--success-color': '#4CAF50',
            '--danger-color': '#F1630F',
            '--warning-color': '#ffc107',
            '--info-color': '#4DB6AC',
            '--text-color': '#fff'
        },
        purple: {
            '--sidebar-bg': '#6f42c1',
            '--sidebar-color': '#ffffff',
            '--primary-color': '#800080',
            '--success-color': '#4CAF50',
            '--danger-color': '#F1630F',
            '--warning-color': '#ffc107',
            '--info-color': '#4DB6AC',
            '--text-color': '#fff'
        },
        green: {
            '--sidebar-bg': '#28a745',
            '--sidebar-color': '#ffffff',
            '--primary-color': '#1e7e34',
            '--success-color': '#4CAF50',
            '--danger-color': '#F1630F',
            '--warning-color': '#ffc107',
            '--info-color': '#4DB6AC',
            '--text-color': '#fff'
        },
        red: {
            '--sidebar-bg': '#dc3545',
            '--sidebar-color': '#ffffff',
            '--primary-color': '#bd2130',
            '--success-color': '#4CAF50',
            '--danger-color': '#F1630F',
            '--warning-color': '#ffc107',
            '--info-color': '#4DB6AC',
            '--text-color': '#fff'
        }
    };

    function changeTheme(theme) {
        const selectedTheme = themes[theme];
        if (selectedTheme) {
            for (let key in selectedTheme) {
                document.documentElement.style.setProperty(key, selectedTheme[key]);
            }
        }
    }

    function applyCustomTheme(hexColor) {
        document.documentElement.style.setProperty('--sidebar-bg', hexColor);
        document.documentElement.style.setProperty('--sidebar-color', '#fff');
        document.documentElement.style.setProperty('--primary-color', hexColor);
        document.documentElement.style.setProperty('--text-color', '#fff');
    }

    const savedTheme = localStorage.getItem('theme');
    const savedCustomColor = localStorage.getItem('customColor');

    if (savedTheme && themes[savedTheme]) {
        changeTheme(savedTheme);
    } else if (savedTheme === 'custom' && savedCustomColor) {
        applyCustomTheme(savedCustomColor);
    }

    // Standard theme buttons
    Object.keys(themes).forEach(themeName => {
        const btn = document.getElementById(`theme-${themeName}`);
        if (btn) {
            btn.addEventListener("click", () => {
                changeTheme(themeName);
                localStorage.setItem('theme', themeName);
            });
        }
    });

    // Custom Picker Toggle
    document.getElementById('picker').addEventListener('click', () => {
        const wrapper = document.getElementById('colorInputwrapper');
        wrapper.style.display = wrapper.style.display === 'none' ? 'block' : 'none';
    });

    // When user picks color
    const colorInput = document.getElementById('colorinput');
    const hexInput = document.getElementById('hexcode');

    function updateCustomColor(hex) {
        if (!/^#([0-9A-F]{3}){1,2}$/i.test(hex)) return; // basic hex validation
        applyCustomTheme(hex);
        localStorage.setItem('theme', 'custom');
        localStorage.setItem('customColor', hex);
        colorInput.value = hex;
        hexInput.value = hex;
    }

    colorInput.addEventListener('input', (e) => {
        updateCustomColor(e.target.value);
    });

    hexInput.addEventListener('input', (e) => {
        updateCustomColor(e.target.value);
    });
});


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
   // Toggle visibility of delete button based on checkbox selection
    function toggleDeleteButton() {
        var checkboxes = document.querySelectorAll('.selectRow');
        var deleteBtn = document.getElementById('deleteBtn');
        var anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

        if (anyChecked) {
            deleteBtn.style.display = 'block';  // Show the delete button
        } else {
            deleteBtn.style.display = 'none';   // Hide the delete button
        }
    }

    // Toggle select all checkboxes
    function toggleSelectAll() {
        var selectAllCheckbox = document.getElementById('selectAll');
        var checkboxes = document.querySelectorAll('.selectRow');
        checkboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
        });
        toggleDeleteButton();  // Update the delete button visibility
    }

    // Function to delete selected teachers
    function deleteSelectedTeachers() {
        var checkboxes = document.querySelectorAll('.selectRow:checked');
        if (checkboxes.length > 0) {
            if (confirm('Are you sure you want to delete the selected teachers?')) {
                // Implement deletion logic here (e.g., send AJAX request or submit a form)
                checkboxes.forEach(checkbox => {
                    var row = checkbox.closest('tr');
                    row.remove();  // Remove the row from the table (simulate deletion)
                });
                toggleDeleteButton();  // Hide delete button if no teachers are selected
            }
        } else {
            alert('No teachers selected for deletion!');
        }
    }
    

  