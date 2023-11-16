<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Your Flight Ticket | Web Design Mastery</title>
</head>
<body>
  <nav>
    <div class="nav__logo">Web Design Mastery</div>
    <ul class="nav__links">
      <li class="Beranda"><a href="#">Beranda</a></li>
      <li class="Tentang"><a href="#">Tentang</a></li>
      <li class="Penawaran"><a href="#">Penawaran</a></li>
      <li class="Tempat"><a href="#">Tempat Duduk</a></li>
      <li class="Tujuan"><a href="#">Tujuan</a></li>
    </ul>
    <button class="btn">LOGIN</button>
  </nav>

  <header class="section__container header__container">
    <h1 class="section__header">Your Flight Ticket</h1>
    <img class="ft" src="assets/garudahead.jpg" alt="header" />
  </header>

  <section class="section__container ticket__container">
    <h2>Your Flight Ticket</h2>
    <div id="ticketInfo"></div>

    <script>
      // Retrieve ticket data from localStorage
      var ticketData = JSON.parse(localStorage.getItem('ticketData'));

      // Display ticket information
      var ticketInfoElement = document.getElementById('ticketInfo');
      if (ticketData) {
        ticketInfoElement.innerHTML = `
          <p><strong>Location:</strong> ${ticketData.location}</p>
          <p><strong>Travellers:</strong> ${ticketData.travellers}</p>
          <p><strong>Flight Number:</strong> ${ticketData.flightNumber}</p>
          <p><strong>Seat Preference:</strong> ${ticketData.seatPreference}</p>
        `;
      } else {
        ticketInfoElement.innerHTML = '<p>No ticket information available.</p>';
      }
    </script>
  </section>
</body>
</html>
