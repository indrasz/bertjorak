<div>
    {{-- Pilih Jasa Pengiriman --}}
    <div class="preview-summary pt-2">
        Delivery Service
    </div>
    {{-- @php
        if (is_array($cost) || is_object($cost)) {
            foreach ($cost as $value) {
                dd($value['results'][0]);
            }
        } else {
            dd("null");
        }
    @endphp --}}
    <select class="form-select" wire:model="pilihKurir" name="pilihKurir" id="cost" required>
        <option value="none" selected>-- Select Courier --</option>
        @if (is_array($cost) || is_object($cost))
        @foreach ($cost as $k => $value)
                @if (isset($value['results'][0]['name']))
                    <option value="{{ $value['results'][0]['name'] }}">{{ $value['results'][0]['name'] }}</option>
                @else
                    {{-- <option value="{{ $value['results'][0]['service'] }}">{{ $value['results'][0]['service'] }}</option> --}}
                @endif
            @endforeach
        @endif
    </select>

    {{-- Pilih Jenis Pengiriman --}}
    <div class="preview-summary pt-2">
        Delivery Type
    </div>
    <select class="form-select" wire:model="jenisKurir" name="pilihJenisKurir" id="cost" required>
        <option value="none" selected>-- Select the type of service --</option>
        @foreach ($cost as $value)
            @if (isset($value['results'][0]['name']) && isset($value['results'][0]['name']) == $pilihKurir && isset($value['results'][0]['costs']))
                @foreach ($value['results'][0]['costs'] as $p)
                    @if (isset($p['service']))
                        <option value="{{ $p['service'] }}">{{ $p['service'] }}</option>
                    @endif
                @endforeach
            @endif
        @endforeach
    </select>


    {{-- Ongkos Kirim Display --}}
    <div class="d-flex justify-content-between">
        <div class="preview-summary pt-1">
            Shipping Cost :
        </div>
        <span class="p-2" wire:model="ongkirResult">
            @if (!is_array($jenisKurir) || is_object($jenisKurir))
                @foreach ($cost as $value)
                    @if (isset($value['results'][0]['name']) && $value['results'][0]['name'] == $pilihKurir && isset($value['results'][0]['costs']))
                        @foreach ($value['results'][0]['costs'] as $p)
                            @if (isset($p['service']) && $p['service'] == $jenisKurir && isset($p['cost']))
                            {{-- {{dd()}} --}}
                            @currency($p['cost'])
                            @php
                                $hargaOngkir = $p['cost'];
                            @endphp
                            <input type="text" name="ongkir" value="{{ $hargaOngkir }}" hidden>
                                {{-- @foreach ($p['cost'] as $harga)
                                    @if (isset($harga['value'])) --}}
                                    {{-- @endif
                                @endforeach --}}
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @else
                <h5>none</h5>
            @endif
        </span>
    </div>


    {{-- Estimasi Pengiriman --}}
    <div class="preview-summary mt-2">
        <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="8" stroke="#ADB2B8" stroke-width="1.5" />
            <path d="M12 7V12L15 13.5" stroke="#ADB2B8" stroke-width="1.5" stroke-linecap="round" />
        </svg>

        <span>
            @if (!$hargaOngkir == null)
                @foreach ($value['results'] as $y)
                    @if ($y['name'] == $pilihKurir)
                        @foreach ($y['costs'] as $p)
                            @if ($p['service'] == $jenisKurir)
                                {{-- {{dd($p['cost'])}} --}}
                                {{-- @foreach ($p['cost'] as $harga) --}}
                                    @php
                                        $convert = $p['etd'];
                                        $hasilKonversi = str_replace('HARI', '', $convert);
                                    @endphp
                                    @if ($hasilKonversi == '0' || $hasilKonversi == '1-1')
                                        1 Days Delivery
                                    @else
                                        {{ $hasilKonversi }} Days Delivery
                                    @endif
                                    <input type="text" name="durasi" value="{{ $hasilKonversi }}" hidden>
                                {{-- @endforeach --}}
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @else
                -
            @endif
        </span>
    </div>

    {{-- Total Harga Barang --}}
    <div class="total-summary mt-1">
        Total item price
        @if (!$hargaOngkir == null)
            <span class="float-end">@currency($cartsPrice) </span>
        @else
            <span class="float-end">@currency(0)</span>
        @endif
    </div>

    {{-- Total Harga Belanja --}}
    <div class="total-summary mt-1">
        Total purchase price
        @if (!$hargaOngkir == null)
            <span class="float-end">@currency($cartsPrice + $hargaOngkir) </span>
            <input type="number" name="totalPrice" value="{{ $cartsPrice + $hargaOngkir }}" readonly hidden>
        @else
            <span class="float-end">@currency(0)</span>
        @endif
    </div>
</div>
