<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <div class="container">
        <h2>Dodaj Novu ponudu dobavljaca</h2>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Greška!</strong> Molimo Vas proverite unete podatke.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('ponude_dobavljaca.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="brojPonude">Broj Ponude:</label>
                <input type="text" name="brojPonude" class="form-control" placeholder="Unesite broj ponude" value="{{ old('brojPonude') }}">
            </div>
            <div class="form-group">
                <label for="nazivProizvoda">Naziv Proizvoda:</label>
                <input type="text" name="nazivProizvoda" class="form-control" placeholder="Unesite naziv proizvoda " value="{{ old('nazivProizvoda') }}">
            </div>
            <div class="form-group">
                <label for="kolicina">Kolicina:</label>
                <input type="number" name="kolicina" class="form-control" placeholder="Unesite kolicinu" value="{{ old('kolicina') }}">
            </div>
            <div class="form-group">
                <label for="cena">Cena:</label>
                <input type="number" step="0.01" name="cena" class="form-control" placeholder="Unesite platu radnika" value="{{ old('cena') }}">
            </div>
            <div class="form-group">
                <label for="dobavljac_id">Id dobavljaca:</label>
                <input type="number" name="dobavljac_id" class="form-control" placeholder="Unesite id dobavljaca" value="{{ old('dobavljac_id') }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Sačuvaj</button>
        </form>
    </div>
</x-layout>