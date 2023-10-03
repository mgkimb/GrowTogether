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

  .banner  p {
    font-size: 16px;
    color: #555;
    /* Description color */
  }

  .banner  .button {
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
  }

  .info-box-container{
    margin: 10%;
  }

  .info-box {
    border-radius: 0px 0px 10px 10px;
}

  .guide {
    align-items: center;
    display: flex;
    padding: 5%;
    border-radius: 10px 10px 0px 0px;
    background: #60B15E;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    color: #FFF;
  }

  .circle {
    border-radius: 50%;
    padding: 2% 5% 2% 5%;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    color: #60B15E;
 }

  .info-box h3 {
    padding-left: 10%;
  }

  .info-box p {
    padding: 10% 10% 10% 10%;
    background: #FAFAFA;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    margin-top: 0%;
    border-radius: 0px 0px 10px 10px;
    margin-bottom: 10%;
}

  /*upload*/

  .uploadborder {
    background-color: #B5D752;
    padding: 5% 5% 3% 5%;
  }

  .dropArea {
    border: 2px dashed #b5d752
    border-radius: 0.5rem;
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
    <h1><i style = "font-weight:300;">Grow with Confidence:</i><br>
<b style = "font-weight:800;">Plant Disease Detection</b></h1>
    <p>Our plant detection and diagnosis tool seamlessly combines speed, accuracy, and precision, providing users with a user-friendly and efficient solution for swiftly identifying plant issues, diseases, and anomalies, enabling data-driven decisions and optimized plant management.</p>
    <button class="button">Try Now!</button>
  </div>
</div>
<div class="rcontainer">
  <div class="left-container">
    <!-- Image Upload Container -->
    <div class = "uploadborder">
    <div class="dropArea" id="dropArea">
      <div class="contentHolder">
        <img src="https://raw.githubusercontent.com/Dinesh1042/Vanilla-JavaScript-Projects/54beb49518ed741a02ded177d987ea67fd9ebed1/Upload%20Drag%20and%20Drop/asset/upload.svg" draggable="false" alt="upload-icon" />
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
          <div class="la-icon">Icon 1</div>
          <h2>Heading 1</h2>
          <p>Description 1</p>
      </div>
      <div class="card">
          <div class="la-icon">Icon 1</div>
          <h2>Heading 1</h2>
          <p>Description 1</p>
      </div>
       <div class="card">
          <div class="la-icon">Icon 1</div>
          <h2>Heading 1</h2>
          <p>Description 1</p>
      </div>
    </div>
  </div>
  <div class="right-container">
    <!-- Right Container Heading -->
    <h2>Right Container Heading</h2>
    <!-- Three Info Boxes -->
    <div class="info-box-container">
      <div class="info-box"> <div class="info-box">
    <div class = "guide">
    <div class="circle">1</div>
      <h3>Heading 4</h2>
</div>
      <p>Description 4</p>
    </div>

    <div class="info-box">
    <div class = "guide">
    <div class="circle">1</div>
      <h3>Heading 4</h2>
</div>
      <p>Description 4</p>
    </div>

    <div class="info-box">
    <div class = "guide">
    <div class="circle">1</div>
      <h3>Heading 4</h2>
</div>
      <p>Description 4</p>
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