
{{-- forloop - runs the function x amount of times --}}
<!--
    arguments
    1st - base iteration
    2nd - statement
    3rd - inc or dec (+/-)
-->

<h4> Increment</h4>
<ul>
    @for($i=0; $i <= 5; $i++)
        <li>
            {{ $i }}
        </li>
    @endfor
</ul>

<h4>Decrement</h4>
<ul>
    @for($i=10; $i >= 0; $i--)
        <li>
            {{ $i }}
        </li>
    @endfor
</ul>

<h4>Foreach loops</h4>

<ol>
    @foreach($fruits as $fruit)
        <li>
            {{ $fruit }}
        </li>
    @endforeach
</ol>