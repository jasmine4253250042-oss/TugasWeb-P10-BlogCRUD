@if (session('success'))
    <div style="padding: 10px; margin-bottom: 15px; border: 1px solid green;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div style="padding: 10px; margin-bottom: 15px; border: 1px solid red;">
        {{ session('error') }}
    </div>
@endif