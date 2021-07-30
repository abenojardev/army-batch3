<b>if verifies if the statement is true</b>
<br>
 
@if($gender == 'male')
    Hi Mr.
@else 
    Hi Ms.
@endif

@if($gender == 'female')
    <br>
    Hi lady
@endif

{{-- unless - displays false condition --}}
@unless($vaccinated)
    <br>
    You can't enter the bldg.
@endunless

{{-- checks if the variable exists --}}
@isset($name)
    {{ $name }}
@endisset

{{-- empty - shows if the variable array size is zero --}}
@empty($sessions)
    <br>
    Variable $sessions is empty
@endif