@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'CASALCO')
<img src="https://i.ibb.co/51YY31r/Casalco-Logo-7.png" width="120" alt="CASALCO">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
