<style>
  .banner {
    background-image: linear-gradient(rgb(200 243 204 / 74%),
        rgb(113 243 121 / 79%)), url(../assets/img/banner.png);
    background-size: cover;
    background-position: center;
    height: 30vh;
    display: flex;
    align-items: center;
    padding-left: 20px;
  }

  .banner .heading {
    color: #084517;
    font-size: 24px;
    font-weight: bold;
  }

  .plant-health-details {
    display: flex;
    flex-direction: row;
    margin: 5%;
    justify-content: space-evenly;
  }

  .plant-description-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 5%;
  }

  .plant-image {
    width: 300px;
    height: 300px;
    object-fit: cover;
    display: block;
    margin: 0 auto;
    border-style: solid;
    border-width: 10px;
    border-color: #399152;
  }

  .plant-heading {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
  }

  .health-status-container {
    border-radius: 10px;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    width: 30%;
    padding: 5%;
    box-sizing: border-box;
  }

  .health-circle {
    width: 100px;
    height: 100px;
    background-color: #ff9900;
    /* Adjust the color as needed */
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
  }

  .health-percentage {
    font-size: 24px;
    font-weight: bold;
    color: white;
  }

  .health-heading {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
    text-align: center;
  }

  .health-description {
    text-align: center;
  }

  .cards-container {
    width: 60%;
    display: flex;
    flex-direction: column;
  }

  .card {
    border-radius: 10px;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 5%;
    padding: 5%;
  }

  .card-heading {
    font-size: x-large;
    font-weight: bold;
  }
  .disease {
    font-weight: bold;
    padding-left: 1%;
  }
  .plant-disease {
    display: flex;
    flex-direction: row;
    font-size: x-large;
  }
</style>
<div class="banner">
  <div class="heading">
    <i style="font-weight:300;">Grow with Confidence: </i>
    <br>
    <b style="font-weight:800;">Plant Disease Detection</b>
  </div>
</div>
<div class="plant-description-container">
  <img class="plant-image" src="your-plant-image.jpg" alt="Plant Image">
  <div class="plant-heading">Plant Name</div>
</div>
<div class="plant-health-details">
  <div class="health-status-container">
    <div class="health-circle">
      <div class="health-percentage">75%</div>
    </div>
    <div class="health-heading">Health Status</div>
    <div class="health-description">Description of health status...</div>
  </div>
  <div class="cards-container">
    <div class="card">
      <div class="plant-disease">Your plant has: <div class="disease">Disease Name</div></div>
      <div class="card-description">Description of Card 1...</div>
    </div>
    <div class="card">
      <div class="card-heading">How to take care of your plant:</div>
      <div class="card-description">Description of Card 2...</div>
    </div>
  </div>
</div>