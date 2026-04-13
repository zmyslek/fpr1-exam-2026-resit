<label for="id">Playfield</label>
<select name="id" id="id" class="form-control">
    @foreach ($playfields as $playfield)
        <option value=" $playfield->id "
            @selected(old('playfield_id', $game->playfield_id ?? null) == $playfield->id)>
            $playfield->name
        </option>
    @endforeach
</select>
