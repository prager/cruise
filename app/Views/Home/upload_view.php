<div class="container mt-5">
<div class="card border-0 shadow my-5 opacity-75">
<div class="card-body px-5">
<div class="d-flex justify-content-end">  </div>

<div class="row mt-5 mb-5">
  <div class="col-sm-4 mb-3 mt-3">
    <h4>File Upload</h4>
    <small class="mb-5"><a href="https://vltavacruise.info/" style="text-decoration-style: dotted;" class="text-warning-emphasis">(Home Page)</a></small>

    <?= form_open_multipart('Home/do-upload') ?>
    <div class="input-group mt-3">
        <input type="file" name="userfile" id="userfile" size="20" class="form-control">
    </div>
        <br><br>
        <div class="d-grid gap-2">
          <button class="btn btn-outline-primary" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Upload File
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div>
            <div class="d-flex justify-content-center">
              <strong>Loading ... &nbsp;</strong><div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>
          </div>
        </div>
        </div>
    </form>
  </div>
</div>

<div class="row mt-5 mb-5">
  <div class="col">
    <div id="loader" class="center"></div>
  </div>
</div>

</div>
</div>
</div>
