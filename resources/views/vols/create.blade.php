div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<form action="{{ route('vols.store') }}" method="POST">
    @csrf
    <input type="text" name='code_vol'>
    <input type="date" name='date_depart'>
    <input type="time" name='heure_depart'>
    <input type="text" name='destination'>
    <input type="number" name='nbre_placeA'>
    <input type="number" name='nbre_placeB'>
    <input type="number" name='prix_placeA'>
    <input type="number" name='prix_placeB'>
    <input type="submit" value='Ni enregistrer'>  
</form>