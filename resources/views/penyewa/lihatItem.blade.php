<div class="content-wrapper">
    <div class="container">
        <div class="col-xl-12 mb-4 text-center">
            <h2 class="text-titlecase bold">LIST ALAT</h2>
        </div>

        <div class="card shadow p-4" > <!-- Card besar sebagai pembungkus -->
            <div class="row">
                @foreach ($lihat as $lht)
                    <div class="col-md-3 mb-4"">
                        <div class="card h-100 shadow-sm">
                            <img src="{{$lht->image_url}}" alt="..."></td>
                            <div class="card-body">
                                <h5 class="card-title">{{ $lht->name }}</h5>
                                <p class="card-text text-muted">{{ $lht->description }}</p>
                                <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($lht->price_per_day, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
