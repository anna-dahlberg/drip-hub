@if($errors->any())
    <section class="error-container" role="alert" aria-live="assertive">
        <h6>Errors found:</h6>
        <ul>
            @foreach($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </section>
@endif