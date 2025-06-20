<div class="content-wrapper">
    <h2 class="text-center mb-4">Sewa Alat</h2>

    <div class="container card shadow p-4">
        <form id="rentalForm" action="{{ route('submitRental') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label fw-bold">Pilih Item</label>
                @forelse ($lihat as $item)
                    <div class="form-check">
                        <input name="item_id[]" class="form-check-input" type="checkbox" value="{{ $item->id }}">
                            {{-- id="item-{{ $item->id }}"> --}}
                        <label class="form-check-label" for="item-{{ $item->id }}">
                            {{ $item->name }}
                        </label>
                    </div>
                @empty
                    <p class="text-muted">Tidak ada item tersedia untuk disewa.</p>
                @endforelse
            </div>

            <div class="d-flex justify-content-between">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>


<script>
    
    @if (session('success'))
        alert("{{ session('success') }}");
    @endif

    @if (session('error'))
        alert("{{ session('error') }}");
    @endif

    document.getElementById('rentalForm').addEventListener('submit', function(e) {
        const checkboxes = document.querySelectorAll('input[name="item_id[]"]:checked');
        if (checkboxes.length === 0) {
            e.preventDefault();
            alert('Silakan pilih minimal satu item sebelum menyimpan.');
        }
    });
</script>
