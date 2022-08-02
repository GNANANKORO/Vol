<form action="{{route ('vols.update', $avionflana->id)}}" method="post">
    @csrf
    @method('patch')
    <div>
        <label>Code_vol</label>
        <input type="text" name="code_vol" value="{{$avionflana->code_vol}}">
    </div>

    <div>
        <label>Date_depart</label>
        <input type="date" name="date_depart" value="{{$avionflana->date_depart}}">
    </div>

    <div>
        <label>Heure_depart</label>
        <input type="time" name="heure_depart" value="{{$avionflana->heure_depart}}">      
    </div>

    <div>
        <label>Destination</label>
        <input type="text" name="destination" value="{{$avionflana->destination}}">
    </div>

    <div>
        <label>Nbre_placeA</label>
        <input type="number" name="nbre_placeA" value="{{$avionflana->nbre_placeA}}">
    </div>
    <div>
        <label>Nbre_placeB</label>
        <input type="number" name="nbre_placeB" value="{{$avionflana->nbre_placeB}}">
    </div>

    <div>
        <label>Prix_classeA</label>
        <input type="text" name="prix_classeA" value="{{$avionflana->prix_classeA}}">
    </div>

    <div>
        <label>Prix_classeB</label>
        <input type="text" name="prix_classeB" value="{{$avionflana->prix_classeB}}">
    </div> 
    
    <div>
        <input type="submit" value="Modifier">
    </div>
</form>