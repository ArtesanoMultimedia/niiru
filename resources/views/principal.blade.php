<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h3>introduce la ciudad</h3>
                  <input type="text" placeholder="INTRODUCE UNA CIUDAD">
                  
                </div>
            </div>
        </div>
    </div>
</div>