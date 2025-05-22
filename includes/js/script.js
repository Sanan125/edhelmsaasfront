
/* Admin JS */
document.addEventListener("DOMContentLoaded", function () {
  
  console.log("Dynamic Dashboard script loading...");
  
  // Check if Chart.js is loaded
  if (typeof Chart === 'undefined') {
    console.error('Chart.js is not loaded!');
    return;
  }
  
  console.log("Chart.js loaded successfully");

  // Global chart instances
  let chartInstances = {};

  // Navigation functionality
  function initNavigation() {
    const menuItems = document.querySelectorAll('.menu-item');
    const contentSections = document.querySelectorAll('.content-section');

    menuItems.forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetSection = this.getAttribute('data-section');
        
        // Remove active class from all menu items
        menuItems.forEach(menu => menu.classList.remove('active'));
        
        // Add active class to clicked menu item
        this.classList.add('active');
        
        // Hide all content sections
        contentSections.forEach(section => {
          section.classList.remove('active');
        });
        
        // Show target section
        const targetElement = document.getElementById(targetSection + '-section');
        if (targetElement) {
          targetElement.classList.add('active');
          
          // Initialize section-specific content
          initSectionContent(targetSection);
        }
        
        console.log(`Switched to ${targetSection} section`);
      });
    });
  }

  // Initialize section-specific content
  function initSectionContent(section) {
    switch(section) {
      case 'dashboard':
        initDashboardCharts();
        break;
      case 'fees-collection':
        initFeesCharts();
        break;
      case 'attendance':
        initAttendanceCharts();
        break;
      case 'exams':
        initExamCalendar();
        break;
      case 'income-expense':
        initIncomeExpenseCharts();
        break;
    }
  }

  // Dashboard Charts
  function initDashboardCharts() {
    // Bar Chart
    const barChartCanvas = document.getElementById('barChart');
    if (barChartCanvas && !chartInstances.barChart) {
      chartInstances.barChart = new Chart(barChartCanvas.getContext('2d'), {
        type: 'bar',
        data: {
          labels: ['May 1', 'May 5', 'May 10', 'May 15', 'May 20'],
          datasets: [{
            label: 'Fees Collected',
            data: [500, 700, 400, 800, 1000],
            backgroundColor: 'rgba(13, 110, 253, 0.6)',
            borderColor: 'rgba(13, 110, 253, 1)',
            borderWidth: 1
          }]
        },
        options: { 
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }

    // Doughnut Chart
    const doughnutChartCanvas = document.getElementById('doughnutChart');
    if (doughnutChartCanvas && !chartInstances.doughnutChart) {
      chartInstances.doughnutChart = new Chart(doughnutChartCanvas.getContext('2d'), {
        type: 'doughnut',
        data: {
          labels: ['Income', 'Expense'],
          datasets: [{
            data: [8305, 1150],
            backgroundColor: ['#198754', '#dc3545'],
            borderWidth: 2,
            borderColor: '#fff'
          }]
        },
        options: { 
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });
    }
  }

  // Fees Collection Charts
  function initFeesCharts() {
    // Fees Trend Chart
    const feesTrendCanvas = document.getElementById('feesTrendChart');
    if (feesTrendCanvas && !chartInstances.feesTrendChart) {
      chartInstances.feesTrendChart = new Chart(feesTrendCanvas.getContext('2d'), {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [{
            label: 'Fees Collected ($)',
            data: [4200, 4800, 4600, 5200, 5250, 4900],
            borderColor: '#2ecc71',
            backgroundColor: 'rgba(46, 204, 113, 0.1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }

    // Fee Status Chart
    const feeStatusCanvas = document.getElementById('feeStatusChart');
    if (feeStatusCanvas && !chartInstances.feeStatusChart) {
      chartInstances.feeStatusChart = new Chart(feeStatusCanvas.getContext('2d'), {
        type: 'doughnut',
        data: {
          labels: ['Paid', 'Pending', 'Overdue'],
          datasets: [{
            data: [78, 15, 7],
            backgroundColor: ['#2ecc71', '#f39c12', '#e74c3c'],
            borderWidth: 2,
            borderColor: '#fff'
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });
    }
  }

  // Attendance Charts
  function initAttendanceCharts() {
    // Attendance Trend Chart
    const attendanceTrendCanvas = document.getElementById('attendanceTrendChart');
    if (attendanceTrendCanvas && !chartInstances.attendanceTrendChart) {
      chartInstances.attendanceTrendChart = new Chart(attendanceTrendCanvas.getContext('2d'), {
        type: 'line',
        data: {
          labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
          datasets: [{
            label: 'Present Students',
            data: [145, 142, 148, 144, 146, 89],
            borderColor: '#3498db',
            backgroundColor: 'rgba(52, 152, 219, 0.1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true,
              max: 160
            }
          }
        }
      });
    }

    // Class Attendance Chart
    const classAttendanceCanvas = document.getElementById('classAttendanceChart');
    if (classAttendanceCanvas && !chartInstances.classAttendanceChart) {
      chartInstances.classAttendanceChart = new Chart(classAttendanceCanvas.getContext('2d'), {
        type: 'bar',
        data: {
          labels: ['Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5'],
          datasets: [{
            label: 'Attendance %',
            data: [92, 88, 95, 85, 90],
            backgroundColor: [
              'rgba(46, 204, 113, 0.8)',
              'rgba(52, 152, 219, 0.8)',
              'rgba(155, 89, 182, 0.8)',
              'rgba(241, 196, 15, 0.8)',
              'rgba(231, 76, 60, 0.8)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true,
              max: 100
            }
          },
          plugins: {
            legend: {
              display: false
            }
          }
        }
      });
    }
  }

  // Income Expense Charts
  function initIncomeExpenseCharts() {
    // Income vs Expense Trend
    const incomeExpenseTrendCanvas = document.getElementById('incomeExpenseTrendChart');
    if (incomeExpenseTrendCanvas && !chartInstances.incomeExpenseTrendChart) {
      chartInstances.incomeExpenseTrendChart = new Chart(incomeExpenseTrendCanvas.getContext('2d'), {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [
            {
              label: 'Income',
              data: [8500, 9200, 8800, 9500, 10200, 9800],
              borderColor: '#2ecc71',
              backgroundColor: 'rgba(46, 204, 113, 0.1)',
              borderWidth: 3,
              fill: false
            },
            {
              label: 'Expense',
              data: [3200, 3800, 3400, 4100, 3900, 3600],
              borderColor: '#e74c3c',
              backgroundColor: 'rgba(231, 76, 60, 0.1)',
              borderWidth: 3,
              fill: false
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }

    // Expense Categories Chart
    const expenseCategoriesCanvas = document.getElementById('expenseCategoriesChart');
    if (expenseCategoriesCanvas && !chartInstances.expenseCategoriesChart) {
      chartInstances.expenseCategoriesChart = new Chart(expenseCategoriesCanvas.getContext('2d'), {
        type: 'doughnut',
        data: {
          labels: ['Salaries', 'Utilities', 'Maintenance', 'Supplies', 'Others'],
          datasets: [{
            data: [45, 20, 15, 12, 8],
            backgroundColor: [
              '#3498db',
              '#e74c3c',
              '#f39c12',
              '#2ecc71',
              '#9b59b6'
            ],
            borderWidth: 2,
            borderColor: '#fff'
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });
    }
  }

  // Initialize Exam Calendar
  function initExamCalendar() {
    if (typeof FullCalendar !== 'undefined') {
      const examCalendarElement = document.getElementById('examCalendar');
      if (examCalendarElement && !examCalendarElement.hasCalendar) {
        const calendar = new FullCalendar.Calendar(examCalendarElement, {
          initialView: 'dayGridMonth',
          height: 500,
          events: [
            {
              title: 'Math Exam - Class 10',
              start: '2025-05-25',
              color: '#3498db'
            },
            {
              title: 'Science Exam - Class 9',
              start: '2025-05-26',
              color: '#2ecc71'
            },
            {
              title: 'English Exam - Class 8',
              start: '2025-05-27',
              color: '#f39c12'
            },
            {
              title: 'History Exam - Class 7',
              start: '2025-05-28',
              color: '#e74c3c'
            },
            {
              title: 'Geography Exam - Class 6',
              start: '2025-05-29',
              color: '#9b59b6'
            }
          ],
          eventClick: function(info) {
            showNotification('Exam Details: ' + info.event.title, 'info');
          }
        });
        calendar.render();
        examCalendarElement.hasCalendar = true;
      }
    }
  }

  // Notification System
  function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
      <div style="display: flex; align-items: center; gap: 10px;">
        <i class="fas fa-${getNotificationIcon(type)}"></i>
        <span>${message}</span>
        <button onclick="this.parentElement.parentElement.remove()" style="background: none; border: none; font-size: 16px; cursor: pointer; margin-left: auto;">×</button>
      </div>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
      notification.classList.add('show');
    }, 100);
    
    setTimeout(() => {
      notification.remove();
    }, 5000);
  }

  function getNotificationIcon(type) {
    switch(type) {
      case 'success': return 'check-circle';
      case 'error': return 'exclamation-circle';
      case 'warning': return 'exclamation-triangle';
      default: return 'info-circle';
    }
  }

  // Search functionality
  function initSearchFunctionality() {
    const searchInputs = document.querySelectorAll('input[placeholder*="Search"]');
    
    searchInputs.forEach(input => {
      input.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const table = this.closest('.chart-card').querySelector('table');
        
        if (table) {
          const rows = table.querySelectorAll('tbody tr');
          
          rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
              row.style.display = '';
            } else {
              row.style.display = 'none';
            }
          });
        }
      });
    });
  }

  // Animate elements on scroll
  function initScrollAnimations() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observe stat cards and chart cards
    const animateElements = document.querySelectorAll('.stat-card, .chart-card');
    animateElements.forEach(element => {
      element.style.opacity = '0';
      element.style.transform = 'translateY(20px)';
      element.style.transition = 'all 0.6s ease';
      observer.observe(element);
    });
  }

  // Initialize dashboard counters
  function initCounters() {
    const counters = document.querySelectorAll('.stat-content h3');
    
    counters.forEach(counter => {
      const originalText = counter.textContent;
      // Skip animation for complex formats like fractions
      if (originalText.includes('/')) {
        return; // Don't animate fraction formats
      }
      
      const target = parseInt(originalText.replace(/[^\d]/g, ''));
      if (target && target < 10000) { // Only animate reasonable numbers
        animateCounter(counter, target, originalText);
      }
    });
  }

  function animateCounter(element, target, originalFormat) {
    let current = 0;
    const increment = target / 50; // Reduced steps for smoother animation
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
        // Restore original format when complete
        element.textContent = originalFormat;
        return;
      }
      
      // Preserve original format structure
      const numericPart = Math.floor(current);
      if (originalFormat.includes('$')) {
        element.textContent = '$' + numericPart.toLocaleString();
      } else if (originalFormat.includes('%')) {
        element.textContent = numericPart + '%';
      } else {
        element.textContent = numericPart.toString();
      }
    }, 30);
  }

  // Mobile menu toggle
  function initMobileMenu() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    
    // Add menu toggle button for mobile
    const menuToggle = document.createElement('button');
    menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
    menuToggle.className = 'menu-toggle';
    menuToggle.style.cssText = `
      display: none;
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 1001;
      background: #3498db;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
    `;
    
    document.body.appendChild(menuToggle);
    
    // Show/hide menu toggle on mobile
    function checkMobile() {
      if (window.innerWidth <= 992) {
        menuToggle.style.display = 'block';
      } else {
        menuToggle.style.display = 'none';
        sidebar.classList.remove('show');
      }
    }
    
    menuToggle.addEventListener('click', () => {
      sidebar.classList.toggle('show');
    });
    
    // Close sidebar when clicking outside
    mainContent.addEventListener('click', () => {
      if (window.innerWidth <= 992) {
        sidebar.classList.remove('show');
      }
    });
    
    window.addEventListener('resize', checkMobile);
    checkMobile();
  }

  // Initialize table sorting
  function initTableSorting() {
    const tables = document.querySelectorAll('table');
    
    tables.forEach(table => {
      const headers = table.querySelectorAll('th');
      
      headers.forEach((header, index) => {
        header.style.cursor = 'pointer';
        header.addEventListener('click', () => {
          sortTable(table, index);
        });
      });
    });
  }

  function sortTable(table, columnIndex) {
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    
    const sortedRows = rows.sort((a, b) => {
      const aValue = a.cells[columnIndex].textContent.trim();
      const bValue = b.cells[columnIndex].textContent.trim();
      
      // Check if values are numeric
      if (!isNaN(aValue) && !isNaN(bValue)) {
        return parseFloat(aValue) - parseFloat(bValue);
      }
      
      return aValue.localeCompare(bValue);
    });
    
    // Toggle sort order
    if (table.dataset.sortOrder === 'asc') {
      sortedRows.reverse();
      table.dataset.sortOrder = 'desc';
    } else {
      table.dataset.sortOrder = 'asc';
    }
    
    // Rebuild table
    tbody.innerHTML = '';
    sortedRows.forEach(row => tbody.appendChild(row));
  }

  // Initialize dashboard data refresh
  function initDataRefresh() {
    // Simulate real-time data updates
    setInterval(() => {
      updateDashboardStats();
    }, 30000); // Update every 30 seconds
  }

  function updateDashboardStats() {
    // Disable automatic stat updates to prevent unwanted changes
    // This was causing the numbers to keep increasing
    console.log('Stats update disabled to prevent number inflation');
    return;
  }

  // Initialize form validation
  function initFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const inputs = form.querySelectorAll('input[required]');
        let isValid = true;
        
        inputs.forEach(input => {
          if (!input.value.trim()) {
            input.style.borderColor = '#e74c3c';
            isValid = false;
          } else {
            input.style.borderColor = '#ddd';
          }
        });
        
        if (isValid) {
          showNotification('Form submitted successfully!', 'success');
        } else {
          showNotification('Please fill in all required fields.', 'error');
        }
      });
    });
  }

  // Chart resize handler
  function initChartResize() {
    window.addEventListener('resize', () => {
      Object.values(chartInstances).forEach(chart => {
        if (chart && typeof chart.resize === 'function') {
          chart.resize();
        }
      });
    });
  }

  // Initialize all functionality
  function init() {
    initNavigation();
    initDashboardCharts(); // Initialize dashboard charts by default
    initSearchFunctionality();
    initScrollAnimations();
    initCounters();
    initMobileMenu();
    initTableSorting();
    initDataRefresh();
    initFormValidation();
    initChartResize();
    
    // Show success message
    setTimeout(() => {
      showNotification('Dashboard loaded successfully!', 'success');
    }, 1000);
    
    console.log("Dashboard initialization complete!");
  }

  // Start initialization
  init();

  // Add click handlers for action buttons
  document.addEventListener('click', function(e) {
    if (e.target.closest('.btn')) {
      const btn = e.target.closest('.btn');
      const btnText = btn.textContent.trim();
      
      // Handle different button actions
      if (btnText.includes('Add New Student')) {
        showNotification('Add New Student form would open here', 'info');
      } else if (btnText.includes('Collect Fee')) {
        showNotification('Fee collection form would open here', 'info');
      } else if (btnText.includes('Mark Attendance')) {
        showNotification('Attendance marking form would open here', 'info');
      } else if (btnText.includes('Add Book')) {
        showNotification('Add Book form would open here', 'info');
      } else if (btnText.includes('Schedule Exam')) {
        showNotification('Schedule Exam form would open here', 'info');
      } else if (btnText.includes('Add Transaction')) {
        showNotification('Add Transaction form would open here', 'info');
      } else if (btnText.includes('Return')) {
        showNotification('Book returned successfully!', 'success');
      }
    }
  });

  // Add keyboard shortcuts
  document.addEventListener('keydown', function(e) {
    if (e.ctrlKey || e.metaKey) {
      switch(e.key) {
        case '1':
          e.preventDefault();
          document.querySelector('[data-section="dashboard"]').click();
          break;
        case '2':
          e.preventDefault();
          document.querySelector('[data-section="student-info"]').click();
          break;
        case '3':
          e.preventDefault();
          document.querySelector('[data-section="fees-collection"]').click();
          break;
        case '4':
          e.preventDefault();
          document.querySelector('[data-section="attendance"]').click();
          break;
        case '5':
          e.preventDefault();
          document.querySelector('[data-section="library"]').click();
          break;
        case '6':
          e.preventDefault();
          document.querySelector('[data-section="exams"]').click();
          break;
        case '7':
          e.preventDefault();
          document.querySelector('[data-section="income-expense"]').click();
          break;
      }
    }
  });

});
/* Parent JS */
document.addEventListener('DOMContentLoaded', function() {
  // Tab Switching Functionality
  const menuItems = document.querySelectorAll('.menu-item');
  const tabContents = document.querySelectorAll('.tab-content');
  const pageTitle = document.getElementById('page-title');

  menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      
      // Remove active class from all menu items and tab contents
      menuItems.forEach(item => item.classList.remove('active'));
      tabContents.forEach(content => content.classList.remove('active'));
      
      // Add active class to clicked menu item and corresponding tab content
      this.classList.add('active');
      const tabId = this.getAttribute('data-tab');
      document.getElementById(tabId).classList.add('active');
      
      // Update page title
      pageTitle.textContent = this.querySelector('span').textContent;
    });
  });

  // Performance Chart - Ali Raza
  new Chart(document.getElementById('performanceChart1'), {
    type: 'bar',
    data: {
      labels: ['Math', 'English', 'Science', 'Urdu', 'Computer'],
      datasets: [{
        label: 'Marks (%)',
        data: [85, 90, 78, 88, 82],
        backgroundColor: 'rgba(52, 152, 219, 0.8)',
        borderColor: 'rgba(52, 152, 219, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Subject-wise Performance'
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100
        }
      }
    }
  });

  // Performance Chart - Alina Raza
  new Chart(document.getElementById('performanceChart2'), {
    type: 'bar',
    data: {
      labels: ['Math', 'English', 'Science', 'Urdu', 'Computer'],
      datasets: [{
        label: 'Marks (%)',
        data: [92, 88, 84, 90, 89],
        backgroundColor: 'rgba(46, 204, 113, 0.8)',
        borderColor: 'rgba(46, 204, 113, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Subject-wise Performance'
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100
        }
      }
    }
  });

  // Attendance Chart - Ali Raza
  new Chart(document.getElementById('attendanceChart1'), {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
      datasets: [{
        label: 'Attendance %',
        data: [94, 91, 89, 90, 92],
        borderColor: 'rgba(52, 152, 219, 1)',
        backgroundColor: 'rgba(52, 152, 219, 0.1)',
        fill: true,
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Monthly Attendance Trend'
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100
        }
      }
    }
  });

  // Attendance Chart - Alina Raza
  new Chart(document.getElementById('attendanceChart2'), {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
      datasets: [{
        label: 'Attendance %',
        data: [98, 97, 96, 95, 97],
        borderColor: 'rgba(46, 204, 113, 1)',
        backgroundColor: 'rgba(46, 204, 113, 0.1)',
        fill: true,
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Monthly Attendance Trend'
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100
        }
      }
    }
  });

  // Attendance Overview Charts
  new Chart(document.getElementById('attendanceOverviewChart1'), {
    type: 'doughnut',
    data: {
      labels: ['Present', 'Absent', 'Leave'],
      datasets: [{
        data: [92, 5, 3],
        backgroundColor: ['#2ecc71', '#e74c3c', '#f1c40f']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Ali Raza - Attendance Distribution'
        }
      }
    }
  });

  new Chart(document.getElementById('attendanceOverviewChart2'), {
    type: 'doughnut',
    data: {
      labels: ['Present', 'Absent', 'Leave'],
      datasets: [{
        data: [97, 2, 1],
        backgroundColor: ['#2ecc71', '#e74c3c', '#f1c40f']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Alina Raza - Attendance Distribution'
        }
      }
    }
  });

  // Exam Calendar with more detailed events
  const examCalendar = new FullCalendar.Calendar(document.getElementById('examCalendar'), {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,listWeek'
    },
    events: [
      {
        title: 'Mathematics Final Exam',
        start: '2024-06-10T09:00:00',
        end: '2024-06-10T11:00:00',
        color: '#3498db',
        extendedProps: {
          room: '101',
          teacher: 'Mr. Ahmed',
          type: 'Final Exam'
        }
      },
      {
        title: 'English Final Exam',
        start: '2024-06-12T09:00:00',
        end: '2024-06-12T11:00:00',
        color: '#2ecc71',
        extendedProps: {
          room: '102',
          teacher: 'Ms. Sarah',
          type: 'Final Exam'
        }
      },
      {
        title: 'Science Final Exam',
        start: '2024-06-14T09:00:00',
        end: '2024-06-14T11:00:00',
        color: '#e74c3c',
        extendedProps: {
          room: '103',
          teacher: 'Mr. Ali',
          type: 'Final Exam'
        }
      },
      {
        title: 'Urdu Final Exam',
        start: '2024-06-16T09:00:00',
        end: '2024-06-16T11:00:00',
        color: '#f1c40f',
        extendedProps: {
          room: '104',
          teacher: 'Ms. Fatima',
          type: 'Final Exam'
        }
      },
      {
        title: 'Computer Final Exam',
        start: '2024-06-18T09:00:00',
        end: '2024-06-18T11:00:00',
        color: '#9b59b6',
        extendedProps: {
          room: '105',
          teacher: 'Mr. Hassan',
          type: 'Final Exam'
        }
      }
    ],
    eventDidMount: function(info) {
      info.el.setAttribute('data-bs-toggle', 'tooltip');
      info.el.setAttribute('data-bs-title', `
        Room: ${info.event.extendedProps.room}
        Teacher: ${info.event.extendedProps.teacher}
        Type: ${info.event.extendedProps.type}
      `);
    },
    height: 650
  });
  examCalendar.render();

  // Initialize tooltips for exam events
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Timetable Calendar with more detailed events
  const timetableCalendar = new FullCalendar.Calendar(document.getElementById('timetableCalendar'), {
    initialView: 'timeGridWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'timeGridWeek,timeGridDay'
    },
    slotMinTime: '08:00:00',
    slotMaxTime: '16:00:00',
    events: [
      {
        title: 'Mathematics',
        daysOfWeek: [1, 3, 5],
        startTime: '09:00:00',
        endTime: '10:00:00',
        color: '#3498db',
        extendedProps: {
          room: '101',
          teacher: 'Mr. Ahmed'
        }
      },
      {
        title: 'English',
        daysOfWeek: [1, 3, 5],
        startTime: '10:00:00',
        endTime: '11:00:00',
        color: '#2ecc71',
        extendedProps: {
          room: '102',
          teacher: 'Ms. Sarah'
        }
      },
      {
        title: 'Science',
        daysOfWeek: [2, 4],
        startTime: '09:00:00',
        endTime: '11:00:00',
        color: '#e74c3c',
        extendedProps: {
          room: '103',
          teacher: 'Mr. Ali'
        }
      },
      {
        title: 'Urdu',
        daysOfWeek: [2, 4],
        startTime: '11:00:00',
        endTime: '12:00:00',
        color: '#f1c40f',
        extendedProps: {
          room: '104',
          teacher: 'Ms. Fatima'
        }
      },
      {
        title: 'Computer',
        daysOfWeek: [1, 3],
        startTime: '11:00:00',
        endTime: '12:00:00',
        color: '#9b59b6',
        extendedProps: {
          room: '105',
          teacher: 'Mr. Hassan'
        }
      },
      {
        title: 'Physical Education',
        daysOfWeek: [2, 5],
        startTime: '12:00:00',
        endTime: '13:00:00',
        color: '#e67e22',
        extendedProps: {
          room: 'Ground',
          teacher: 'Mr. Usman'
        }
      }
    ],
    eventDidMount: function(info) {
      info.el.setAttribute('data-bs-toggle', 'tooltip');
      info.el.setAttribute('data-bs-title', `
        Room: ${info.event.extendedProps.room}
        Teacher: ${info.event.extendedProps.teacher}
      `);
    },
    height: 700
  });
  timetableCalendar.render();

  // Update Today's Classes
  function updateTodayClasses() {
    const now = new Date();
    const currentHour = now.getHours();
    const currentMinutes = now.getMinutes();
    const currentTime = currentHour * 60 + currentMinutes;

    document.querySelectorAll('.class-item').forEach(item => {
      const timeText = item.querySelector('.class-time').textContent;
      const [startTime] = timeText.split(' - ');
      const [startHour, startMinute] = startTime.split(':').map(Number);
      const classTime = startHour * 60 + startMinute;

      const statusElement = item.querySelector('.class-status');
      if (currentTime >= classTime && currentTime < classTime + 60) {
        statusElement.className = 'class-status ongoing';
        statusElement.querySelector('span').textContent = 'Ongoing';
      } else if (currentTime < classTime) {
        statusElement.className = 'class-status upcoming';
        statusElement.querySelector('span').textContent = 'Upcoming';
      } else {
        statusElement.className = 'class-status';
        statusElement.querySelector('span').textContent = 'Completed';
      }
    });
  }

  // Update class status every minute
  updateTodayClasses();
  setInterval(updateTodayClasses, 60000);

  // Previous Results Charts
  new Chart(document.getElementById('resultChart1'), {
    type: 'radar',
    data: {
      labels: ['Math', 'English', 'Science', 'Urdu', 'Computer'],
      datasets: [{
        label: 'First Term',
        data: [85, 90, 78, 88, 82],
        borderColor: 'rgba(52, 152, 219, 1)',
        backgroundColor: 'rgba(52, 152, 219, 0.2)'
      }, {
        label: 'Second Term',
        data: [88, 85, 82, 90, 85],
        borderColor: 'rgba(46, 204, 113, 1)',
        backgroundColor: 'rgba(46, 204, 113, 0.2)'
      }]
    },
    options: {
      responsive: true,
      scales: {
        r: {
          beginAtZero: true,
          max: 100
        }
      }
    }
  });

  new Chart(document.getElementById('resultChart2'), {
    type: 'radar',
    data: {
      labels: ['Math', 'English', 'Science', 'Urdu', 'Computer'],
      datasets: [{
        label: 'First Term',
        data: [92, 88, 84, 90, 89],
        borderColor: 'rgba(52, 152, 219, 1)',
        backgroundColor: 'rgba(52, 152, 219, 0.2)'
      }, {
        label: 'Second Term',
        data: [94, 90, 88, 92, 91],
        borderColor: 'rgba(46, 204, 113, 1)',
        backgroundColor: 'rgba(46, 204, 113, 0.2)'
      }]
    },
    options: {
      responsive: true,
      scales: {
        r: {
          beginAtZero: true,
          max: 100
        }
      }
    }
  });
}); 