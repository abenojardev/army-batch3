<div class="col-2 pb-2">
    <div class="card">
        <a data-bs-toggle="modal" data-bs-target="#country_{{ $key }}" >
            <img src="{{ $country->flag }}" class="card-img-top" alt="...">
        </a>  
        <div class="card-body"> 
            <p class="card-text">
                {{ $country->name }}
            </p> 
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" 
     id="country_{{ $key }}" 
     tabindex="-1" 
     aria-labelledby="exampleModalLabel" 
     aria-hidden="true">
     
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-body">
                <img src="{{ $country->flag }}" width="100%">
            </div> 
        </div>
    </div>
</div>