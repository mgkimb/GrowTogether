<style>
  .banner {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    /* 100% of the viewport height */
    width: 100%;
    background-image: url('../assets/img/banner.png');
    background-size: cover;
  }

  .green-box {
    background: rgba(248, 255, 229, 0.80);
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    position: absolute;
    right: 0;
    height: auto;
    width: 30%;
  }

  .banner h1 {
    margin: 0;
    font-size: 24px;
    color: #084517;
    /* Heading color */
  }

  .banner p {
    font-size: 16px;
    color: #555;
    /* Description color */
  }

  .banner .button {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #B5D752;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .rcontainer {
    display: flex;
    background: #E5E5E5;
    padding: 5%
  }

  .left-container {
    flex: 2;
    padding-right: 20px;
  }

  .right-container {
    flex: 1;
    background-color: #f0f0f0;
    /* Background color for the right container */
  }

  .right-container h2 {
    margin: 0;
    background: #378049;
    color: #FFF;
    font-weight: 700;
    padding: 8%;
  }

  .box__dragndrop,
  .box__uploading,
  .box__success,
  .box__error {
    display: none;
    s
  }

  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
  }

  .card {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 20px;
    background-color: #fff;
    flex: 0.3;
    text-align: center;
    font-size: small;
  }

  .card h2 {
    padding: 0 5%;
  }

  .card p {
    padding: 0 7%;
  }

  .card-icon {
    position: relative;
    padding-top: 10%;
  }

  .card-icon2 {
    position: absolute;
    top: 30%;
    left: 35%;
    z-index: 1;
  }

  .info-box-container {
    margin: 10%;
  }

  .info-box {
    border-radius: 0px 0px 10px 10px;
  }

  .guide {
    align-items: center;
    display: flex;
    padding: 0 10%;
    border-radius: 10px 10px 0px 0px;
    background: #60B15E;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    color: #FFF;
  }

  .circle {
    border-radius: 50%;
    padding: 2% 3.5% 2% 3.5%;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    height: 1em;
    color: #60B15E;
  }

  .info-box h3 {
    padding-left: 5%;
  }

  .info-box p {
    padding: 10% 10% 10% 10%;
    background: #FAFAFA;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    margin-top: 0%;
    border-radius: 0px 0px 10px 10px;
    margin-bottom: 10%;
    font-size: small;
  }

  /*upload*/
  .uploadborder {
    background-color: #B5D752;
    padding: 5% 5% 3% 5%;
  }

  .dropArea {
    border: 2px dashed #b5d752 border-radius: 0.5rem;
    flex: 0.9;
    margin-top: 10%;
    margin: auto;
    transition: 0.3s ease;
    transition-property: background-color, border;
    user-select: none;
    background: #fff;
  }

  .dropArea .contentHolder {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1.5rem 2rem;
    color: #858a92;
  }

  .dropArea .contentHolder img {
    width: 80px;
  }

  .dropArea .contentHolder p {
    font-size: 1rem;
    margin-bottom: 10px;
  }

  .dropArea .contentHolder span {
    font-size: 1rem;
    color: #a0a5ad;
  }

  .dropArea .contentHolder button {
    border: none;
    outline: none;
    background-color: #B5D752;
    color: #fff;
    padding: 0.45rem 1.2rem;
    border-radius: 0.25rem;
    cursor: pointer;
    font-size: 1rem;
    line-height: 1.5;
    margin-top: 10px;
  }

  .dropArea .contentHolder input {
    visibility: hidden;
    position: absolute;
    bottom: 0%;
  }

  .dropArea.content-over {
    border: 2px solid #c2d9f9;
    background-color: #c2d9f952;
  }

  .uploadedFileCont {
    width: 100%;
    margin-top: 1rem;
  }

  .uploadedFileCont .uploadedFile {
    display: grid;
    grid-template-columns: auto 5%;
    align-items: center;
    gap: 2px;
    padding: 0.5rem 1rem;
    background-color: #60b15e;
    border-radius: 0.4rem;
    user-select: none;
    margin: 10px 0;
  }

  .filename {
    margin: 2%;
  }

  .uploadedFileCont .uploadedFile .fileName p {
    color: #f1f1f1;
    font-size: 1rem;
    line-height: 1.5;
    margin: 0;
  }

  .uploadedFileCont .uploadedFile .fileName span {
    font-size: 12px;
    color: #f1f1f1;
    margin-left: 5px;
  }

  .uploadedFileCont .uploadedFile .closeBtn {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .uploadedFileCont .uploadedFile .closeBtn ion-icon {
    color: #f1f1f1;
    font-size: 20px;
  }

  .uploadBtnCont {
    width: 100%;
    margin-top: 10px;
    display: none;
  }

  .uploadBtn {
    border: none;
    outline: none;
    background-color: #378049;
    color: #fff;
    padding: 0.45rem 1.2rem;
    border-radius: 0.25rem;
    cursor: pointer;
    font-size: 1rem;
    line-height: 1.5;
    float: right;
    text-align: right;
  }

  .uploadBtnCont.content-here {
    display: flex;
    justify-content: flex-end;
  }
</style>
<div class="banner">
  <div class="green-box">
    <h1>
      <i style="font-weight:300;">Grow with Confidence:</i>
      <br>
      <b style="font-weight:800;">Plant Disease Detection</b>
    </h1>
    <p>Our plant detection and diagnosis tool seamlessly combines speed, accuracy, and precision, providing users with a user-friendly and efficient solution for swiftly identifying plant issues, diseases, and anomalies, enabling data-driven decisions and optimized plant management.</p>
    <button class="button">Try Now!</button>
  </div>
</div>
<div class="rcontainer">
  <div class="left-container">
    <!-- Image Upload Container -->
    <div class="uploadborder">
      <div class="dropArea" id="dropArea">
        <div class="contentHolder">
          <svg xmlns="http://www.w3.org/2000/svg" width="91" height="84" viewBox="0 0 91 84" fill="none">
            <path d="M78.625 50.5V63H91V71.3333H78.625V83.8333H70.375V71.3333H58V63H70.375V50.5H78.625ZM78.658 0.5C80.9185 0.5 82.75 2.35417 82.75 4.6375V43.5917C80.1002 42.6462 77.3102 42.1643 74.5 42.1667V8.83333H8.5L8.50412 67.1667L46.8336 28.4458C47.5429 27.727 48.4878 27.2947 49.4906 27.2303C50.4933 27.1658 51.4848 27.4736 52.2786 28.0958L52.6664 28.45L67.2895 43.2417C64.0911 44.2261 61.1233 45.8546 58.5649 48.029C56.0065 50.2034 53.9105 52.8786 52.4034 55.8933C50.8963 58.9081 50.0092 62.1999 49.7956 65.5703C49.582 68.9407 50.0464 72.3199 51.1607 75.5042L4.342 75.5C3.25636 75.4989 2.21555 75.0625 1.44827 74.2867C0.680988 73.5109 0.249999 72.4591 0.25 71.3625V4.6375C0.257549 3.54324 0.690964 2.49591 1.45662 1.72174C2.22227 0.947575 3.25869 0.508728 4.342 0.5H78.658ZM25 17.1667C27.188 17.1667 29.2865 18.0446 30.8336 19.6074C32.3808 21.1702 33.25 23.2899 33.25 25.5C33.25 27.7101 32.3808 29.8298 30.8336 31.3926C29.2865 32.9554 27.188 33.8333 25 33.8333C22.812 33.8333 20.7135 32.9554 19.1664 31.3926C17.6192 29.8298 16.75 27.7101 16.75 25.5C16.75 23.2899 17.6192 21.1702 19.1664 19.6074C20.7135 18.0446 22.812 17.1667 25 17.1667Z" fill="#B5D752" />
          </svg>
          <p id="dropText">Drag & Drop your files</p>
          <span>Or</span>
          <input type="file" multiple id="uploadInput" />
          <button id="browseBtn">Browse File</button>
        </div>
      </div>
      <div class="uploadedFileCont" id="uploadedFileCont"></div>
      <div class="uploadBtnCont" id="uploadBtnCont">
        <button class="uploadBtn">Upload</button>
      </div>
    </div>
    <div class="card-container">
      <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="108" height="112" viewBox="0 0 108 112" fill="none">
          <path d="M59.3998 16.8C59.3998 15.3147 58.8309 13.8904 57.8182 12.8402C56.8055 11.7899 55.432 11.2 53.9998 11.2C52.5676 11.2 51.1941 11.7899 50.1814 12.8402C49.1687 13.8904 48.5998 15.3147 48.5998 16.8V22.4C48.5998 23.8852 49.1687 25.3095 50.1814 26.3597C51.1941 27.41 52.5676 28 53.9998 28C55.432 28 56.8055 27.41 57.8182 26.3597C58.8309 25.3095 59.3998 23.8852 59.3998 22.4V16.8ZM84.5476 32.2392C85.5312 31.183 86.0755 29.7684 86.0632 28.3001C86.0509 26.8318 85.483 25.4273 84.4818 24.389C83.4806 23.3507 82.1262 22.7617 80.7104 22.749C79.2945 22.7362 77.9305 23.3007 76.912 24.3208L73.0942 28.28C72.1105 29.3361 71.5663 30.7507 71.5786 32.219C71.5909 33.6873 72.1588 35.0918 73.16 36.1301C74.1612 37.1684 75.5156 37.7574 76.9314 37.7701C78.3473 37.7829 79.7113 37.2184 80.7298 36.1984L84.5476 32.2392ZM97.1998 56C97.1998 57.4852 96.6309 58.9095 95.6182 59.9597C94.6055 61.01 93.232 61.5999 91.7998 61.5999H86.3998C84.9676 61.5999 83.5941 61.01 82.5814 59.9597C81.5687 58.9095 80.9998 57.4852 80.9998 56C80.9998 54.5147 81.5687 53.0904 82.5814 52.0402C83.5941 50.9899 84.9676 50.4 86.3998 50.4H91.7998C93.232 50.4 94.6055 50.9899 95.6182 52.0402C96.6309 53.0904 97.1998 54.5147 97.1998 56ZM27.2698 36.1984C27.7679 36.7332 28.3638 37.1598 29.0226 37.4533C29.6814 37.7468 30.39 37.9013 31.107 37.9078C31.824 37.9142 32.5351 37.7725 33.1988 37.491C33.8624 37.2094 34.4653 36.7936 34.9723 36.2678C35.4794 35.742 35.8803 35.1167 36.1518 34.4285C36.4234 33.7403 36.56 33.0029 36.5538 32.2593C36.5475 31.5157 36.3986 30.7809 36.1155 30.0977C35.8325 29.4145 35.4212 28.7965 34.9054 28.28L31.0876 24.3208C30.0692 23.3007 28.7051 22.7362 27.2892 22.749C25.8734 22.7617 24.519 23.3507 23.5178 24.389C22.5166 25.4273 21.9487 26.8318 21.9364 28.3001C21.9241 29.7684 22.4684 31.183 23.452 32.2392L27.2698 36.1984ZM26.9998 56C26.9998 57.4852 26.4309 58.9095 25.4182 59.9597C24.4055 61.01 23.032 61.5999 21.5998 61.5999H16.1998C14.7676 61.5999 13.3941 61.01 12.3814 59.9597C11.3687 58.9095 10.7998 57.4852 10.7998 56C10.7998 54.5147 11.3687 53.0904 12.3814 52.0402C13.3941 50.9899 14.7676 50.4 16.1998 50.4H21.5998C23.032 50.4 24.4055 50.9899 25.4182 52.0402C26.4309 53.0904 26.9998 54.5147 26.9998 56ZM43.1998 89.6V83.9999H64.7998V89.6C64.7998 92.5704 63.6619 95.4191 61.6366 97.5195C59.6112 99.6199 56.8641 100.8 53.9998 100.8C51.1355 100.8 48.3884 99.6199 46.3631 97.5195C44.3377 95.4191 43.1998 92.5704 43.1998 89.6ZM64.7998 78.3999C64.8808 76.4959 65.923 74.7823 67.3756 73.5896C70.9001 70.707 73.4711 66.7574 74.7312 62.2896C75.9913 57.8219 75.878 53.058 74.4069 48.6602C72.9359 44.2623 70.1802 40.449 66.5229 37.7502C62.8657 35.0514 58.4885 33.6012 53.9998 33.6012C49.5111 33.6012 45.134 35.0514 41.4767 37.7502C37.8194 40.449 35.0637 44.2623 33.5927 48.6602C32.1217 53.058 32.0083 57.8219 33.2684 62.2896C34.5285 66.7574 37.0995 70.707 40.624 73.5896C42.082 74.7823 43.1188 76.4959 43.1944 78.3999H64.8052H64.7998Z" fill="#3BAD60" />
        </svg>
        <h2>Fast and Easy Results</h2>
        <p>Our plant detection and diagnosis tool is designed for quick and intuitive use, ensuring that users can effortlessly obtain rapid results without technical hurdles.</p>
      </div>
      <div class="card">
        <div class="card-icon">
          <div class="card-icon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
              <path d="M0.416516 25.4167V10.6667C0.416516 7.96255 1.80485 5.6468 4.58151 3.71947C7.35818 1.79213 10.6921 0.830105 14.5832 0.833382H35.8332V10.6667H14.5832V25.4167H0.416516ZM14.5832 99.1667C10.6873 99.1667 7.3511 98.203 4.57443 96.2757C1.79777 94.3484 0.411794 92.0343 0.416516 89.3334V74.5834H14.5832V89.3334H35.8332V99.1667H14.5832ZM85.4165 25.4167V10.6667H64.1665V0.833382H85.4165C89.3124 0.833382 92.6486 1.79705 95.4253 3.72438C98.2019 5.65172 99.5879 7.96583 99.5832 10.6667V25.4167H85.4165ZM64.1665 99.1667V89.3334H85.4165V74.5834H99.5832V89.3334C99.5832 92.0375 98.1949 94.3533 95.4182 96.2806C92.6415 98.208 89.3076 99.17 85.4165 99.1667H64.1665Z" fill="#3BAD60" />
            </svg>
          </div>
          <div class="card-icon2">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="66" viewBox="0 0 65 66" fill="none">
              <path d="M52.155 38.9478C49.7198 40.4508 46.9229 41.2413 44.0732 41.232C41.6857 41.2128 39.3253 40.7169 37.1263 39.7728C35.4315 42.2022 34.5245 45.1075 34.5314 48.0846V55.6875C34.532 55.9703 34.4753 56.2501 34.3649 56.5097C34.2546 56.7693 34.0928 57.003 33.8897 57.1965C33.6866 57.3899 33.4465 57.5388 33.1843 57.6341C32.9221 57.7293 32.6434 57.7688 32.3656 57.75C31.8435 57.7039 31.3578 57.459 31.0061 57.0646C30.6543 56.6701 30.4624 56.1552 30.4689 55.6231V52.4159L20.663 42.4592C19.2053 43.0114 17.6637 43.3002 16.1079 43.3125C13.9662 43.3179 11.8645 42.7229 10.0345 41.5929C4.50188 38.1795 1.52356 30.3239 2.09993 20.5709C2.12895 20.0663 2.33943 19.5901 2.69141 19.2327C3.0434 18.8753 3.51237 18.6616 4.0093 18.6321C13.6146 18.0572 21.3511 21.0711 24.7027 26.6888C26.0195 28.8907 26.5943 31.4681 26.3404 34.0313C26.3246 34.2299 26.2525 34.4196 26.1328 34.5774C26.0131 34.7353 25.8509 34.8546 25.6658 34.9208C25.4808 34.9871 25.2808 34.9975 25.09 34.9508C24.8993 34.9042 24.7259 34.8024 24.5909 34.6578L19.7159 29.4757C19.3319 29.1053 18.8205 28.9018 18.2909 28.9087C17.7612 28.9156 17.2551 29.1323 16.8806 29.5126C16.506 29.8929 16.2926 30.4068 16.2858 30.9446C16.279 31.4824 16.4794 32.0017 16.8443 32.3916L30.5247 46.6357C30.54 46.4346 30.5577 46.2336 30.5781 46.035C31.0222 42.211 32.6841 38.6389 35.3109 35.8618L48.156 22.0791C48.5371 21.6924 48.7514 21.1679 48.7516 20.6208C48.7519 20.0737 48.5381 19.549 48.1572 19.162C47.7764 18.7749 47.2598 18.5574 46.721 18.5571C46.1823 18.5569 45.6655 18.774 45.2843 19.1607L32.8429 32.5205C32.7184 32.6544 32.5608 32.7521 32.3865 32.8032C32.2122 32.8544 32.0276 32.8572 31.8519 32.8114C31.6762 32.7657 31.5158 32.6729 31.3873 32.5429C31.2589 32.4128 31.167 32.2502 31.1214 32.0719C29.9179 27.5653 30.4486 23.0794 32.7464 19.2277C37.2812 11.6274 47.8335 7.5591 60.9757 8.34285C61.4726 8.37232 61.9416 8.58604 62.2936 8.94343C62.6456 9.30083 62.8561 9.77702 62.8851 10.2816C63.6468 23.6286 59.6402 34.3432 52.155 38.9478Z" fill="#3BAD60" />
            </svg>
          </div>
        </div>
        <h2>Accurate Detection</h2>
        <p>Leveraging machine learning and extensive data, our tool provides highly precise plant recognition, minimizing false positives and delivering reliable identification.</p>
      </div>
      <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="108" height="112" viewBox="0 0 108 112" fill="none">
          <path d="M36 88.6667H72V79.3334H36V88.6667ZM36 74.6667H72V65.3334H36V74.6667ZM54 57.4C58.95 52.7334 63.1875 48.5909 66.7125 44.9727C70.2375 41.3545 72 37.5636 72 33.6C72 30.8 71.025 28.3889 69.075 26.3667C67.125 24.3445 64.8 23.3334 62.1 23.3334C60.525 23.3334 59.0055 23.6647 57.5415 24.3274C56.0775 24.99 54.897 25.9032 54 27.0667C53.1 25.9 51.918 24.9869 50.454 24.3274C48.99 23.6678 47.472 23.3365 45.9 23.3334C43.2 23.3334 40.875 24.3445 38.925 26.3667C36.975 28.3889 36 30.8 36 33.6C36 37.5667 37.7055 41.3001 41.1165 44.8C44.5275 48.3 48.822 52.5 54 57.4ZM81 102.667H27C24.525 102.667 22.4055 101.752 20.6415 99.9227C18.8775 98.0934 17.997 95.8969 18 93.3334V18.6667C18 16.1 18.882 13.902 20.646 12.0727C22.41 10.2434 24.528 9.33027 27 9.33338H81C83.475 9.33338 85.5945 10.248 87.3585 12.0774C89.1225 13.9067 90.003 16.1032 90 18.6667V93.3334C90 95.9 89.118 98.098 87.354 99.9274C85.59 101.757 83.472 102.67 81 102.667Z" fill="#3BAD60" />
        </svg>
        <h2>Precise Diagnosis</h2>
        <p>Beyond detection, our tool offers problem diagnosis, providing detailed insights into plant issues, their severity, and recommended solutions for informed decision-making.</p>
      </div>
    </div>
  </div>
  <div class="right-container">
    <!-- Right Container Heading -->
    <h2>3 Tips for Getting Good Images for the Best Results!</h2>
    <!-- Three Info Boxes -->
    <div class="info-box-container">
      <div class="info-box">
        <div class="info-box">
          <div class="guide">
            <div class="circle">1</div>
            <h3>Use Good Lighting </h2>
          </div>
          <p>Adequate lighting is essential. Natural daylight or diffused light provides the best results. Avoid harsh shadows and overexposure. If necessary, use supplementary lighting to ensure even illumination.</p>
        </div>
        <div class="info-box">
          <div class="guide">
            <div class="circle">2</div>
            <h3>Plain Background </h2>
          </div>
          <p>Choose a simple, uncluttered background that doesn't distract from the subject. A plain white or black background can work well for isolating the plant.</p>
        </div>
        <div class="info-box">
          <div class="guide">
            <div class="circle">3</div>
            <h3>Multiple Angles </h2>
          </div>
          <p>Take multiple shots from different angles to provide a comprehensive view of the plant or issue. This can aid in accurate diagnosis.</p>
        </div>
      </div>
    </div>
  </div>
  <script>
    const uploadInputEl = document.getElementById("uploadInput");
    const dropAreaEl = document.getElementById("dropArea");
    const uploadedFileContEl = document.getElementById("uploadedFileCont");
    const uploadBtnContEl = document.getElementById("uploadBtnCont");
    const browseBtnEl = document.getElementById("browseBtn");
    const dropTextEl = document.getElementById("dropText");
    dropAreaEl.addEventListener("dragover", dragOver);
    dropAreaEl.addEventListener("dragleave", dragLeave);
    dropAreaEl.addEventListener("drop", dropItem);
    browseBtnEl.addEventListener("click", browseFile);
    uploadInputEl.addEventListener("change", uploadFile);
    let files = [];

    function dragOver(e) {
      e.preventDefault();
      this.classList.add("content-over");
      dropTextEl.innerHTML = `Release to Upload files`;
    }

    function dragLeave(e) {
      e.preventDefault();
      this.classList.remove("content-over");
      dropTextEl.innerHTML = `Drag & Drop your files`;
    }

    function browseFile() {
      uploadInputEl.click();
    }

    function uploadFile() {
      let file = [...this.files];
      file.forEach((fl) => (fl.fileId = getRandomFileId()));
      dropFile(file);
    }

    function dropItem(e, currentFile) {
      e.preventDefault();
      currentFile = [...e.dataTransfer.files];
      currentFile.forEach((file) => (file.fileId = getRandomFileId()));
      dropFile(currentFile);
    }

    function dropFile(currentFile) {
      files.push(...currentFile);
      uploadedFileContEl.innerHTML = null;
      files.forEach((data) => createFileHolderEl(data));
    }

    function createFileHolderEl(file) {
      const uploadedFileEl = document.createElement("div");
      uploadedFileEl.classList.add("uploadedFile");
      // Filename
      const fileNameCont = document.createElement("div");
      fileNameCont.classList.add("fileName");
      const fileName = document.createElement("p");
      fileNameCont.appendChild(fileName);
      fileName.innerHTML = file.name; //
      uploadedFileEl.appendChild(fileNameCont);
      const fileSize = document.createElement("span");
      fileNameCont.appendChild(fileSize);
      let sizeInMb = (file.size / (1024 * 1024)).toFixed(2) <= 0 ? `${file.size} KB` : `${(file.size / (1024 * 1024)).toFixed(2)} MB`;
      fileSize.innerHTML = sizeInMb;
      const closeBtn = document.createElement("div");
      closeBtn.classList.add("closeBtn");
      uploadedFileEl.appendChild(closeBtn);
      closeBtn.innerHTML = `
	
			<ion-icon name="close"></ion-icon>`;
      uploadedFileContEl.prepend(uploadedFileEl);
      closeBtn.addEventListener("click", (e) => {
        uploadedFileEl.remove();
        removeFile(file.fileId);
        if (!files.length) uploadBtnContEl.classList.remove("content-here");
      });
      if (files.length) uploadBtnContEl.classList.add("content-here");
      dropAreaEl.classList.remove("content-over");
      dropTextEl.innerHTML = `Drag & Drop your files`;
    }

    function getRandomFileId() {
      return Math.floor(Math.random() * 10000000).toString(16);
    }

    function removeFile(fileId) {
      return (files = files.filter((file) => file.fileId !== fileId));
    }
  </script>