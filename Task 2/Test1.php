<?php
session_start();
if (!isset($_SESSION['name'])) {
    $msg="You have been logged out. Please login to continue";
    header("location: login.php?m=$msg");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    /> -->

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      header {
        height: 100vh;
        /* background:  linear-gradient(rgba(0, 0, 0, 0.6), rgba(0,0,0,0.6)), url("6069380.jpg"); */
        background-image: url("6069380.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }
      nav{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            height: 70px;
            /* background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)); */
            background-color: #fff;
        }
        .left{
            padding: 20px;
            font-size: 2rem;
            color: blue;
        }
        .right ul{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            align-items: center;
        }
        nav ul li{
            list-style: none;
            padding: 20px;
            color: black;
        }
        nav ul a{
           text-decoration: none;
        }
      /* .container{
            width: 250px;
            height: 450px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            
            margin: 50px 40px;
            border-radius: 10px;
        }
        input{
            margin: 20px;
            height: 30px;
            border-radius: 50px;
            outline: none;
            padding: 10px;
            background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1));
            color: aliceblue;
        } */

      .container {
        max-width: 300px;
        margin: 30px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
      }
      .form-group {
        margin-bottom: 10px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input[type="text"],
      input[type="number"],
      input[type="date"],
      select {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }
      button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
      }

      .holi{
        margin: auto; width: 90%; display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;
      }
     .holi1{
      margin-bottom: 40px; width: 30%; height: 450px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); border-radius: 5px;
      transition: 1s;
     }
     .holi1:hover{
      transform: scale(1.1);
     }

     .suggestions {
        position: absolute;
        z-index: 1;
        list-style: none;
        background-color: #fff;
        /* border: 1px solid #ccc; */
        border-top: none;
        border-radius: 0 0 5px 5px;
        width: 300px;
        margin-top: 0;
        padding: 0;
      }

      .suggestions li {
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.2s;
      }

      .suggestions li:hover {
        background-color: #f0f0f0;
      }

      @media (max-width: 768px) {
        .left {
          font-size: 1.5rem;
        }
        .right {
          display: none;
        }
        .container {
          font-size: 0.6rem;
          max-width: 45%;
          margin-left: 15px;
        }
        input[type="text"],
      input[type="number"],
      input[type="date"],
      select {
        width: 100%;
        padding: 4px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 0.6rem;
      }
        header {
          height: 550px;
        }
        .holi{
          flex-direction: column;
        }
        .holi1{
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Travel With Indian Railway</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNavAltMarkup"
          >
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a>
              <a class="nav-link" href="#">Disabled</a>
            </div>
          </div>
        </div>
      </nav> -->
      <nav>
            <div class="left">
                <?php
                    if (isset($_SESSION["name"])) {
                        echo $_SESSION["name"];
                    }
                ?>
            </div>
            <div class="right">
                <ul>
                    <a href="#"><li>Home</li></a>
                    <a href="BookedTickets.php"><li>Your Booked Tickets</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    <!-- <a href=""><li>Home</li></a> -->
                </ul>
            </div>
        </nav>
      <div class="container">
        <form action="BookTicketdb.php" method="post">
          <div
            style="
              background-image: url('logo-poster-1.jpg');
              height: 70px;
              background-repeat: no-repeat;
              background-size: 100% 100%;
            "
          ></div>
          <div class="form-group">
            <label for="Name">Passenger Name:</label>
            <input type="text" id="Name" name="name" required />
          </div>
          <div class="form-group">
            <label for="stationInput">Departure Station:</label>
            <input type="text" id="stationInput" name="dt" required />
            <ul id="suggestions" class="suggestions"></ul>
          </div>
          <div class="form-group">
            <label for="stationInput1">Arrival Station:</label>
            <input type="text" id="stationInput1" name="at" required />
            <ul id="suggestions1" class="suggestions"></ul>
          </div>
          <div class="form-group">
            <label for="Nop">No. of passengers:</label>
            <input type="number" id="Nop" name="nop" required />
          </div>
          <div class="form-group">
            <label for="Trip">Trip:</label>
            <select id="Trip" name="trip" required>
              <option value="Round">Round</option>
              <option value="One-Way">One-Way</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Date">Date:</label>
            <input type="date" id="Date" name="date" required />
          </div>
          <button type="submit">Book Now</button>
        </form>
      </div>
    </header>

    <!-- <div class="container">
        <form style="padding: 20px; display: flex; flex-direction: column; flex-wrap: wrap; justify-content: space-around; align-items: center;" action="">
            <input type="text" name="" id="" placeholder="Departure station..."> <input type="text" name="" id="" placeholder="Arrival station...">
            <input type="text" name="" id="" placeholder="Trip..."> <input type="number" name="" id="">
            <input type="date" name="" id="" placeholder="select date..."> <input type="submit" value="Pay & Book">
        </form>
    </div> -->


    <div style="margin: 50px auto; width: 350px; height: 250px; background-color: #fff; display: flex; justify-content: center; align-items: center; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);"><iframe width="300" height="200" src="https://www.youtube.com/embed/IxVXCQh79l4"></iframe></div>



    <div style="display: flex; justify-content: center; align-items: center; margin: auto; padding: 40px;">
      <h2>HOLIDAYS</h2>
    </div>

    <div class="holi">

      <div class="holi1">
        <div style="height: 50%; background-image: url('exterior.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        </div>
        <div>
          <h2 style="padding: 10px;">Maharajas' Express</h2>
            <p style="padding: 10px;">Redefining Royalty, Luxury and Comfort, Maharajas' express takes you on a sojourn to the era of bygone stately splendour of princely states. Sylvan furnishings, elegant ambience and modern amenities are amalgamated for an “Experience Unsurpassed”. It has been a winner of “World’s Leading Luxury train” by World Travel Awards consecutively for last six years.</p>
        </div>
      </div>

      <div class="holi1">
        <div style="height: 50%; background-image: url('Thailand.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        </div>
        <div>
          <h2 style="padding: 10px;">International Packages</h2>
            <p style="padding: 10px;">Best deals in International Holiday packages, handpicked by IRCTC, for Thailand, Dubai, Sri Lanka, Hong Kong, China, Macau, Bhutan, Nepal, U.K., Europe, USA, Australia etc. The packages are inclusive of sightseeing, meals, visa charges and overseas medical insurance to give you a hassle-free and memorable experience.</p>
        </div>
      </div>

      <div class="holi1">
        <div style="height: 50%; background-image: url('Kashmir.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        </div>
        <div>
          <h2 style="padding: 10px;">Domestic Air Packages</h2>
            <p style="padding: 10px;">Be it the spiritual devotee seeking blessings of Tirupati, Shirdi or Mata Vaishno Devi or the leisure traveller wanting to relish the Blue mountains of North East, Sand-dunes of Rajasthan, Hamlets of Ladakh, Wonders of Himalayas, Serene lakes or Picturesque Islands, IRCTC has it all. Discover India through IRCTC!</p>
        </div>
      </div>

      <div class="holi1">
        <div style="height: 50%; background-image: url('Bharat_Gaurav.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        </div>
        <div>
          <h2 style="padding: 10px;">Bharat Gaurav Tourist Train</h2>
            <p style="padding: 10px;">IRCTC operates Bharat Gaurav Tourist Train having AC III-Tier accommodation on train specially designed to promote domestic tourism in India. This train runs on various theme based circuits covering pilgrimage and heritage destinations in its itinerary on a 5 days to 20 days trip and showcase India’s rich cultural heritage.</p>
        </div>
      </div>

      <div class="holi1">
        <div style="height: 50%; background-image: url('Manali.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        </div>
        <div>
          <h2 style="padding: 10px;">Rail Tour Packages</h2>
            <p style="padding: 10px;">IRCTC offers Exclusive Rail tour packages with confirmed train tickets, sight-seeing and meals for enchanting Nilgiri Mountains, Darjeeling, Kullu Manali, Kashmir, Gangtok or divine tours of Mata Vaishno Devi, Rameswaram, Madurai, Shirdi, Tirupati etc. Holiday packages/ Land packages to these destinations are also available.</p>
        </div>
      </div>

      

    </div>

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script> -->

    <script>
      const url = "https://rstations.p.rapidapi.com/";
      const apiKey = "d0b082466fmshe808f35e23a7b28p135aacjsn745e7bb29d95";

      const stationInput = document.getElementById("stationInput");
      const stationInput1 = document.getElementById("stationInput1");
      const suggestionsList = document.getElementById("suggestions");
      const suggestionsList1 = document.getElementById("suggestions1");
      // const findTrainbtn = document.getElementById("btn");

      stationInput.addEventListener("input", async () => {
        const searchTerm = stationInput.value.trim();

        if (searchTerm.length === 0) {
          suggestionsList.innerHTML = "";
          return;
        }

        const options = {
          method: "POST",
          headers: {
            "content-type": "application/json",
            "X-RapidAPI-Key": apiKey,
            "X-RapidAPI-Host": "rstations.p.rapidapi.com",
          },
          body: JSON.stringify({ search: searchTerm }),
        };

        try {
          const response = await fetch(url, options);
          const data = await response.json();
          displaySuggestions(data);
        } catch (error) {
          console.error(error);
        }
      });

      stationInput1.addEventListener("input", async () => {
        const searchTerm = stationInput1.value.trim();

        if (searchTerm.length === 0) {
          suggestionsList1.innerHTML = "";
          return;
        }

        const options = {
          method: "POST",
          headers: {
            "content-type": "application/json",
            "X-RapidAPI-Key": apiKey,
            "X-RapidAPI-Host": "rstations.p.rapidapi.com",
          },
          body: JSON.stringify({ search: searchTerm }),
        };

        try {
          const response = await fetch(url, options);
          const data = await response.json();
          displaySuggestions1(data);
        } catch (error) {
          console.error(error);
        }
      });

      function displaySuggestions(data) {
        suggestionsList.innerHTML = "";

        data.forEach((station) => {
          const suggestionItem = document.createElement("li");
          suggestionItem.textContent = `${station[0]} - ${station[1]}`;

          suggestionItem.addEventListener("click", () => {
            stationInput.value = station[1]; // Set input value to selected station name
            suggestionsList.innerHTML = ""; // Clear suggestions
          });

          suggestionsList.appendChild(suggestionItem);
        });
      }

      function displaySuggestions1(data) {
        suggestionsList1.innerHTML = "";

        data.forEach((station) => {
          const suggestionItem1 = document.createElement("li");
          suggestionItem1.textContent = `${station[0]} - ${station[1]}`;

          suggestionItem1.addEventListener("click", () => {
            stationInput1.value = station[1]; // Set input value to selected station name
            suggestionsList1.innerHTML = ""; // Clear suggestions
          });

          suggestionsList1.appendChild(suggestionItem1);
        });
      }

      
    </script>
  </body>
</html>
