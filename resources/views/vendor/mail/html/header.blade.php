<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'APP Tarefas')
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png" class="logo" alt="APP Tarefas">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
