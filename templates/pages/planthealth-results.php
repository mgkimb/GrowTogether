<style>
  a{
    text-decoration: none;
  }
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
    height: -webkit-fill-available;
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
    margin-top: 20px;
    text-align: center;
  }

  .health-description {
    text-align: center;
    margin-top: 10px;
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

  .card-description {
    margin-top: 10px;
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
  .learn-more-button {
            background-color: #399152;
            color: white;
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right; /* This floats the button to the right */
        }

        .learn-more-button:hover {
            background-color: #084517;
        }

        .popup-btn{
         
  text-align: center;
  background-color: #399152;
            color: white;
            padding: 10px 20px;
    border-radius: 20px 0;
}

.popup-btn:hover {
  background-color: #084517;
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
  <img class="plant-image" src="../assets/img/AppleScab3.jpg" alt="Plant Image">
  <div class="plant-heading">Apple Leaf</div>
</div>
<div class="plant-health-details">
  <div class="health-status-container">
    <div class="health-circle">
      <div class="health-percentage">75%</div>
    </div>
    <div class="health-heading">Diseased</div>
    <div class="health-description">Infected leaves often show distortion, with dark, irregularly shaped spots that may cause the leaves to curl or become distorted. This can lead to reduced photosynthesis and overall plant vitality.</div>
  </div>
  <div class="cards-container">
    <div class="card">
      <div class="plant-disease">Your plant has: <div class="disease">Apple Scab</div></div>
      <div class="card-description">Apple scab is caused by a fungus called Venturia inaequalis. It primarily affects the leaves, fruit, and twigs of apple trees. The disease gets its name from the scabby, dark lesions it creates on the surface of apples. These lesions can make the fruit look unattractive and can also affect its taste and texture.</div>
      <div class="card-description"><i>Ang apple scab ay sanhi ng isang fungus na tinatawag na Venturia inaequalis. Ito ay pangunahing nakakaapekto sa mga dahon, bunga, at mga sanga ng puno ng mansanas. Ang sakit ay nagmumula sa mga maitim na lesyon sa ibabaw ng mga mansanas. Ang mga lesyong ito ay maaaring gawing hindi kagandahan ang bunga at maaaring makaapekto sa lasa at tekstura nito.</i></div>
      <a href="#" class="learn-more-button">Learn More</a>
    </div>
    <div class="card">
      <div class="card-heading">How to take care of your plant:</div>
      <div class="card-description">
      To prevent apple scab, it's essential to keep your apple orchard or garden clean. Here are some tips:
    <ol>
        <li><strong>Prune:</strong> Regularly prune your apple trees to improve air circulation and sunlight exposure.</li>
        <li><strong>Clean Up:</strong> Remove fallen leaves and infected fruit from the ground.</li>
        <li><strong>Fungicides:</strong> In severe cases, you may need to use fungicides, but try to choose organic options when possible.</li>
    </ol>
    <i>Upang maiwasan ang apple scab, mahalaga na panatilihin ang iyong hardin o puno ng mansanas na malinis. Narito ang ilang tips:</h1>
    <ol>
        <li><strong>Regular na Pagpupungos:</strong> Regular na putulin ang mga puno ng mansanas para mapabuti ang sirkulasyon ng hangin at makakuha ng sapat na sikat ng araw.</li>
        <li><strong>Panatilihing Malinis:</strong> Alisin ang mga nahulog na dahon at mga bunga mula sa sahig.</li>
        <li><strong>Pagagamit ng mga Fungicides:</strong> Sa mga malubhang kaso, maaaring kailanganin ang mga fungisidyo, ngunit subukan na pumili ng mga organic na pagpipilian kung maaari.</li>
    </ol></i>
    <a href="#" class="learn-more-button">Learn More</a>
      </div>
    </div>
  </div>
</div>
<a href="#" class="popup-btn">Learn More about my Plant's Health</a>

