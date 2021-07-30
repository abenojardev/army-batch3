Hello, {{ $name }}. 
<br>
Your {{ $age }} years old today.
<br>
Your {{ $height }}ft tall.

<br><br>
You can also run php functions in blade.
<br>
Time now is {{ time() }}
<br>
Today is {{ date('M d, Y H:i A') }}
<br>
Today is {{ Carbon\Carbon::parse('2021-05-29 00:11:00') }}
<br>
{{ 'you can run any php functions' }}