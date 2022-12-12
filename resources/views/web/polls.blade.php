<div class="album py-5 bg-light">
  <div class="container">
    <h1 class="fw-semibold text-center">Principais Enquetes do momento</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @for ($i = 0; $i < 3; $i++)
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="https://colegiointegro.com.br/wp-content/uploads/2020/03/enquete.png" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">enquete</text></svg>

          <div class="card-body">
            <p class="card-text">Quem foi o primeiro presidente da republica de bananas</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Rogerio Ceni</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Datena</button>
              </div>
              <small class="text-muted">193 votos totais</small>
            </div>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </div>
</div>