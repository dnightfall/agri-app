<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kontrol.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <title>Kontrol</title>
</head>
<body>
    <div class="sidebar">
        <div class="img-header">
            <img src="{{ asset('img/Logo-IPB-University-Horizontal-600x157.png') }}" alt="">
        </div>
        <div class="item-header">
            <a class="active" href="{{ route('allcontrol.index') }}">Kontrol</a>
            <a href="{{ route('tanamanadmin.index') }}">Data Tanaman</a>
            <a href="{{ route('seedlings.index') }}">Data </a>
            <a href="#about">Penelitian</a>
        </div>
    </div>
    <!-- --------------------------------------------------------middle------------------------------------------------------ -->
    <div class="container">
        <div class="top">
            <div class="middle">
                <h1>TABEL KONTROL OTOMATIS</h1>
                <div class="select-kontrol">
                    <a class="active" href="{{ route('allcontrol.index') }}">SEMUA</a>
                    <a href="{{ route('specificcontrol.index') }}">ALAT 1</a>
                    <a href="">ALAT 2</a>
                    
                </div>
                <div class="border"></div>
                <div class="fill">
                    <div class="filter">
                        <img src="{{ asset('img/filter.png') }}" alt="">
                        <p>Filter</p>
                    </div>
                    <div class="tambah">
                        <p>TAMBAH KONTROL</p>
                    </div>
                </div>
                <table>
                    <tr>
                      <th>NAMA</th>
                      <th>STATUS</th>
                      <th>TANGGAL</th>
                      <th>JAM</th>
                    </tr>
                    <tr>
                      <td>ALAT 1</td>
                      <td><div class="active"><div class="dot"></div>Active</div></td>
                      <td><div class="ch" onclick="showDatePicker()"><img src="{{ asset('img/Master.png') }}" alt="">ATUR</div></td>
                      <td><div class="ch" onclick="showTimePicker()"><img src="{{ asset('img/Master.png') }}" alt="">ATUR</div></td>
                    </tr>
                    <tr>
                        <td>ALAT 2</td>
                        <td><div class="active"><div class="dot"></div>Active</div></td>
                        <td><div class="ch" onclick="showDatePicker()"><img src="{{ asset('img/Master.png') }}" alt="">ATUR</div></td>
                        <td><div class="ch" onclick="showTimePicker()"><img src="{{ asset('img/Master.png') }}" alt="">ATUR</div></td>
                      </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Pop-up date picker -->
    <div id="datePickerPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeDatePicker()">&times;</span>
            <input type="date" id="datePicker">
        </div>
    </div>
      <!-- Pop-up time picker -->
    <div id="timePickerPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeTimePicker()">&times;</span>
            <label for="hour">Jam:</label>
            <input type="number" id="hour" min="0" max="23">
            <label for="minute">Menit:</label>
            <input type="number" id="minute" min="0" max="59">
            <button onclick="submitTime()">OK</button>
        </div>
    </div>
    

  <script>
    function showDatePicker() {
  var popup = document.getElementById("datePickerPopup");
  popup.style.display = "block";
  
  // Set the input date to the current month
  var today = new Date();
  var currentMonth = today.getMonth(); // Current month (0-11)
  var currentYear = today.getFullYear(); // Current year
  
  var datePicker = document.getElementById("datePicker");
  var firstDayOfMonth = new Date(currentYear, currentMonth, 1);
  var lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
  
  // Set min and max date
  datePicker.setAttribute('min', firstDayOfMonth.toISOString().split('T')[0]);
  datePicker.setAttribute('max', lastDayOfMonth.toISOString().split('T')[0]);
}

function closeDatePicker() {
  var popup = document.getElementById("datePickerPopup");
  popup.style.display = "none";
}

function showTimePicker() {
  var popup = document.getElementById("timePickerPopup");
  popup.style.display = "block";
}

function closeTimePicker() {
  var popup = document.getElementById("timePickerPopup");
  popup.style.display = "none";
}

function submitTime() {
  var hour = document.getElementById("hour").value;
  var minute = document.getElementById("minute").value;
  
  // Handle the selected time (you can display it, send it to a server, etc.)
  console.log("Selected time: " + hour + ":" + minute);

  // Close the pop-up
  closeTimePicker();
}


  </script>
</body>

</html>