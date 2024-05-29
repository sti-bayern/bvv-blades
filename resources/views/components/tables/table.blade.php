<div class="relative overflow-x-auto">
    <table class="w-full text-left rtl:text-right">
        {{-- 
            Die Kopf-Zeile wird aus dem Attribut $heads befüllt.
            Dieses muss aus einem eindimensionalen Array mit String-Werten bestehen,
            z.B. ['test1', 'test2']
        --}}
        @if (is_array($heads))
            <x-bvvblades::tables.thead>
                @foreach ($heads as $head)
                    <x-bvvblades::tables.th>
                        {{ $head }}
                    </x-bvvblades::tables.th>
                @endforeach
                </x-bvvblades::tables.th>
        @endif

        {{-- 
            Die einzelnen Reihen werden aus dem Attribut $rows (array) befüllt.
            Die Attribute des Array können String-Werte sein.
            Um mehrer Informationen mitzugeben kann das Attribut wiederum ein Array sein.
            Mögliche Werte sind:
            [
                'name' => STRING    // Pflichtfeld
                'link' => STRING    // optional, fügt einen Link-Tag ein
            ]
        --}}
        @if (is_array($rows))
            @foreach ($rows as $row)
                <x-bvvblades::tables.tr>
                    @foreach ($row as $col)
                        <x-bvvblades::tables.td>
                            @if (is_array($col))
                                {{-- Array mit Zusatzinformationen --}}
                                @if ($col['name'])
                                    @if ($col['link'])
                                        {{-- link-Atrribut gesetzt -> verlinkter Tag --}}
                                        <a href="{{ $col['link'] }}"
                                            class="text-sti-blue border-b border-white hover:border-sti-blue">
                                            {{ $col['name'] }}
                                        </a>
                                    @else
                                        {{ $col['name'] }}
                                    @endif
                                @endif
                            @else
                                {{-- einfacher String-Wert --}}
                                {{ $col }}
                            @endif
                        </x-bvvblades::tables.td>
                    @endforeach
                </x-bvvblades::tables.tr>
            @endforeach
        @endif

        {{ $slot }}
    </table>
</div>
