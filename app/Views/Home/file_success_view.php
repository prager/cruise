<div class="container mt-5">
<div class="card border-0 shadow my-5 opacity-75">
<div class="card-body px-5">
<div class="d-flex justify-content-end">  </div>

<div class="row mt-3">
  <div class="col-sm-6">
    <h3>File uploaded!</h3>
    <ul>
    <li>name: <?= esc($uploaded_fileinfo->getBasename()) ?></li>
    <li>size: <?= esc($uploaded_fileinfo->getSizeByUnit('kb')) ?> KB</li>
    <li>extension: <?= esc($uploaded_fileinfo->guessExtension()) ?></li>
  </ul>
    <a href="https://vltavacruise.info/index.php/upload-xyz" style="text-decoration-style: dotted;" class="text-warning-emphasis">Back to upload</a>
  </div>
</div>

<div class="row mt-3 mb-5">
  <div class="col-sm-10">
    <a href="https://vltavacruise.info/" style="text-decoration-style: dotted;" class="text-warning-emphasis">Home Page</a>
  </div>
</div>

</div>
</div>
</div>
