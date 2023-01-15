<div>
    <div class="border border-bottom-0">
        <h2 class="mt-2 mb-2">Tabela de valores</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">DDD - Origem</th>
                    <th scope="col">DDD - Destino</th>
                    <th scope="col">Valor/minuto</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rate as $item)
                <tr>
                    <td>{{ $item->cod_orig }} ({{ $item->name_orig }})</td>
                    <td>{{ $item->cod_dest }} ({{ $item->name_dest }})</td>
                    <td>R$ {{ number_format($item->price,2,",",".") }}</td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>

    <h2 class="mt-5 mb-4">Calcule o valor de sua ligação informando o plano FaleMais de seu interesse:</h2>
    <div x-data="{open: true}">
        <div x-show="open" @click.outside="open = false">
            <div class="row mt-4">
                <div class="col">
                    <select class="form-select" name="origi" wire:change.defer="$emit('origin', $event.target.value)">
                        <option selected>Origem</option>
                        <option value="11">011</option>
                        <option value="16">016</option>
                        <option value="17">017</option>
                        <option value="18">018</option>
                    </select>
                </div>

                <div class="col">
                    <select class="form-select" name="desti" wire:change.defer="$emit('destiny', $event.target.value)">
                        <option selected>Destino</option>
                        <option value="11">011</option>
                        <option value="16">016</option>
                        <option value="17">017</option>
                        <option value="18">018</option>
                    </select>
                </div>

                <div class="col">
                    <select class="form-select" wire:change.defer="$emit('plane', $event.target.value)">
                        <option selected>Plano FaleMais</option>
                        <option value="30">FaleMais 30</option>
                        <option value="60">FaleMais 60</option>
                        <option value="120">FaleMais 120</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4">
                    <input id="inputNum" type="number" class="form-control" aria-label="Sizing example input" placeholder="Minutos" min="0"
                        wire:change="$emit('minutes', $event.target.value)" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ open: false }">
        <button id="btnResult" wire:click="calc" @click="open = true" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalResult">
            {{ $btnCalc }}
        </button>
        <table class="table" x-show="open" @click.outside="open = false">
            <thead>
                <tr>
                    <th scope="col">Origem</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Tempo</th>
                    <th scope="col">Plano FaleMais</th>
                    <th scope="col"><b>Com FaleMais</b></th>
                    <th scope="col"><b>Sem FaleMais</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0{{ $orig }}</th>
                    <td>0{{ $dest }}</td>
                    <td>{{ $min }} min</td>
                    <td>FaleMais {{ $plan }}</td>
                    <td>R$ {{ number_format($valueFaleMais,2,",",".") }}</td>
                    <td>R$ {{ number_format($valueMin,2,",",".") }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="text-danger"><b>{{ $message }}</b></p>
</div>

<script>
    const btn = document.getElementById("btnResult");

    btn.addEventListener("click", () => {
        setTimeout(() => {
            btn.setAttribute("wire:click", "trash");
        }, 1000)
    });

</script>
