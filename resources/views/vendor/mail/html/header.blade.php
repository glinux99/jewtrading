<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="{{ url('assets/imgs/logojw.png')}}" class="logo" alt="Jew trading Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>
